<?php
// Storage total
function get_storage_data()
{
    $disk_total = disk_total_space('/var/www/html');
    $disk_free = disk_free_space('/var/www/html');
    $disk_used = $disk_total - $disk_free;

    return [
        'total' => round($disk_total / 1073741824, 3),
        'used' => round($disk_used / 1073741824, 3),
        'free' => round($disk_free / 1073741824, 3)
    ];
}

// get location
function get_geolocation($ip = null)
{
    if ($ip === null) {
        $ip = $_SERVER['REMOTE_ADDR'];
    }
    $url = "https://api.iplocation.net/?ip={$ip}";

    $geo_data = file_get_contents($url);

    $data = json_decode($geo_data, true);

    if ($data && $data['response_code'] === "200") {
        return [
            'ip' => $data['ip'],
            'ip_number' => $data['ip_number'],
            'ip_version' => $data['ip_version'],
            'country_name' => $data['country_name'] ?: 'N/A',
            'country_code2' => $data['country_code2'] ?: 'N/A',
            'isp' => $data['isp'] ?: 'N/A',
            'response_message' => $data['response_message']
        ];
    } else {
        return null;
    }
}

// Net IO total
function get_network_io()
{

    $data = @file_get_contents('/proc/net/dev');

    if (!$data) {
        return ['error' => 'Cannot read network data'];
    }

    $lines = explode("\n", trim($data));
    $total_rx = 0;
    $total_tx = 0;

    foreach ($lines as $line) {
        if (strpos($line, 'eth0') !== false) {
            $parts = preg_split('/\s+/', trim(str_replace(':', ' ', $line)));
            if (count($parts) > 9) {
                $total_rx = (int) $parts[1];
                $total_tx = (int) $parts[9];
            }
            break;
        }
    }
    // MB
    return [
        'net_in' => round($total_rx / 1048576, 3),
        'net_out' => round($total_tx / 1048576, 3),
        'net_total' => round(($total_rx + $total_tx) / 1048576, 3)
    ];
}

// Total I/O (Average)
function get_network_io_average()
{
    $data = @file_get_contents('/proc/net/dev');

    if (!$data) {
        return ['error' => 'Cannot read network data'];
    }

    $lines = explode("\n", trim($data));
    $total_rx = 0;
    $total_tx = 0;

    foreach ($lines as $line) {
        if (strpos($line, 'eth0') !== false) {
            $parts = preg_split('/\s+/', trim(str_replace(':', ' ', $line)));
            if (count($parts) > 9) {
                $total_rx = (int) $parts[1];  // Ingress
                $total_tx = (int) $parts[9];  // Egress 
            }
            break;
        }
    }

    $total_rx_mb = round($total_rx / 1048576, 3);
    $total_tx_mb = round($total_tx / 1048576, 3);
    $total_io_mb = round(($total_rx + $total_tx) / 1048576, 3);

    $sleep_time = 1;
    sleep($sleep_time);

    $data_after = @file_get_contents('/proc/net/dev');
    $lines_after = explode("\n", trim($data_after));
    $new_total_rx = 0;
    $new_total_tx = 0;

    foreach ($lines_after as $line) {
        if (strpos($line, 'eth0') !== false) {
            $parts = preg_split('/\s+/', trim(str_replace(':', ' ', $line)));
            if (count($parts) > 9) {
                $new_total_rx = (int) $parts[1];
                $new_total_tx = (int) $parts[9];
            }
            break;
        }
    }

    $avg_rx = round(($new_total_rx - $total_rx) / 1048576 / $sleep_time, 3);
    $avg_tx = round(($new_total_tx - $total_tx) / 1048576 / $sleep_time, 3);
    $avg_io = round(($avg_rx + $avg_tx), 3);

    return [
        'ingress' => $total_rx_mb,
        'egress' => $total_tx_mb,
        'total_io' => $total_io_mb,
        'avg_ingress' => $avg_rx,
        'avg_egress' => $avg_tx,
        'avg_io' => $avg_io
    ];
}

// Total
function get_total_digital()
{
    $host = "postgres";
    $dbname = "cloudipdev";
    $user = "cloudipdev";
    $pass = "cloudipdev";

    header('Content-Type: application/json');
    $total_disk = disk_total_space('/var/www/html');
    $total_disk_gb = $total_disk / 1024 / 1024 / 1024;
    try {
        $pdo = new PDO("pgsql:host=$host;dbname=$dbname", $user, $pass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = "
    SELECT SUM(f.size) AS total_size
    FROM oc_filecache f
    WHERE f.mtime > EXTRACT(EPOCH FROM NOW() - INTERVAL '30 days')
    AND f.storage = 1;
    ";

        $stmt = $pdo->query($sql);
        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($row) {
            $total_size_gb = $row['total_size'] / 1024 / 1024 / 1024;
            return [
                'total' => round($total_disk_gb, 2),
                'total_size' => round($total_size_gb, 2)
            ];
        } else {
            return ['error' => 'No data found'];
        }
    } catch (PDOException $e) {
        return ['error' => 'Error: ' . $e->getMessage()];
    }
}

echo json_encode([
    'storage' => get_storage_data(),
    'location' => get_geolocation(),
    'network' => get_network_io(),
    'network_average' => get_network_io_average(),
    'network_total' => get_total_digital()
]);

