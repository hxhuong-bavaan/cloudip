<div id="content-vue-custom">
  <!-- header -->
  <div id="header-content">
    <div class="container-header">
      <div class="plan">
        <span class="label">CURRENT PLAN</span></br>
        <span class="value"><img width="20px" src="/custom_apps/myappcustom/img/icon_backup.svg" alt="">
          Backup</span>
      </div>
      <div class="storage">
        <span class="label">STORAGE</span></br>
        <span class="value">2TB</span>
      </div>
      <div class="location">
        <span class="label">LOCATION</span></br>
        <span class="value">Michigan</span>
      </div>
      <div class="compliance">
        <span class="label">COMPLIANCE</span></br>
        <span class="value">HIPAA,SOC2,27001</span>
      </div>
    </div>
  </div>
  <!-- end header -->
  <div id="overlay"></div>
  <div class="wapper-box">
    <section id="box-header">
      <div class="row files-section">
        <div class="col-lg-1 d-flex align-items-center"> <span class="files-label">Files</span></div>
        <div class="col-lg-8 d-flex align-items-center justify-content-end current-view curent-view"><span
            class="current-view">Current view: <span class="detailed-view">Detailed View</span></span>
        </div>
        <div class="col-lg-3 d-flex align-items-center justify-content-end widget-button">
          <button class="add-widgets-button" id="add-widget">
            <span class="button-icon"><img src="/custom_apps/myappcustom/img/add-widget.svg" alt=""></span>
            Add Widgets
          </button>
        </div>

      </div>
    </section>
    <div id="popub-add-widget">
      <div class="popub-header">
        <h4>Edit widgets</h4>
        <div class="icon-close-popub" id="closePopupButton">
          <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g clip-path="url(#clip0_399_4765)">
              <path
                d="M19.7913 6.67725L18.3226 5.2085L12.4997 11.0314L6.67676 5.2085L5.20801 6.67725L11.0309 12.5002L5.20801 18.3231L6.67676 19.7918L12.4997 13.9689L18.3226 19.7918L19.7913 18.3231L13.9684 12.5002L19.7913 6.67725Z"
                fill="#4E84C1" />
            </g>
            <defs>
              <clipPath id="clip0_399_4765">
                <rect width="25" height="25" fill="white" />
              </clipPath>
            </defs>
          </svg>
        </div>
      </div>
      <div class="row add-widget-form">
        <div class="col-lg-3">
          <div class="form-group container" id="digital-storage-box">
            <div class="box-top">
              <span class="status-indicator"></span>
              <input type="checkbox" name="" data-section-id="digital-storage" id="input-digital-storage">
            </div>
            <span class="status-text">Digital Storage</span>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="form-group container" id="device-management-box">
            <div class="box-top">
              <span class="status-indicator"></span>
              <input type="checkbox" name="" data-section-id="device-management" id="input-device-management">
            </div>
            <span class="status-text">Devices Management</span>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="form-group container" id="scan-devices-box">
            <div class="box-top">
              <span class="status-indicator"></span>
              <input type="checkbox" name="" data-section-id="scan-devices" id="input-scan-devices">
            </div>
            <span class="status-text">Scan Devices</span>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="form-group container" id="restore-data-box">
            <div class="box-top">
              <span class="status-indicator"></span>
              <input type="checkbox" name="" data-section-id="restore-data" id="input-restore-data">
            </div>
            <span class="status-text">Restore my data</span>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="form-group container" id="location-box">
            <div class="box-top">
              <span class="status-indicator"></span>
              <input type="checkbox" name="" data-section-id="location" id="input-location">
            </div>
            <span class="status-text">Locations</span>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="form-group container" id="security-box">
            <div class="box-top">
              <span class="status-indicator"></span>
              <input type="checkbox" name="" data-section-id="security" id="input-security">
            </div>
            <span class="status-text">Security</span>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="form-group container" id="connectivity-box">
            <div class="box-top">
              <span class="status-indicator"></span>
              <input type="checkbox" name="" data-section-id="connectivity" id="input-connectivity">
            </div>
            <span class="status-text">Connectivity</span>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="form-group container" id="policies-box">
            <div class="box-top">
              <span class="status-indicator"></span>
              <input type="checkbox" name="" data-section-id="policies" id="input-policies">
            </div>
            <span class="status-text">Policies</span>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="form-group container" id="main-content-box">
            <div class="box-top">
              <span class="status-indicator"></span>
              <input type="checkbox" name="" data-section-id="main-content" id="input-files">
            </div>
            <span class="status-text">Files</span>
          </div>
        </div>
      </div>
    </div>
    <!-- Digital Storage -->
    <section id="digital-storage">
      <div class="header">
        <h2 class="title">Digital Storage</h2>
        <div class="more-icon-box">
          <svg class="more-icon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
            stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round"
              d="M12 6.75a.75.75 0 1 1 0-1.5.75.75 0 0 1 0 1.5ZM12 12.75a.75.75 0 1 1 0-1.5.75.75 0 0 1 0 1.5ZM12 18.75a.75.75 0 1 1 0-1.5.75.75 0 0 1 0 1.5Z" />
          </svg>

          <div id="popup-menu" class="icon-dropdown-menu">
            <ul>
              <li><a class="action-item no-underline" href="#">Delete Widget</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="row main">
        <div class="row col-lg-6 left-side">
          <div class="net-io-container">
            <h3 class="chart-title">Net IO total</h3>
            <div class="chart-group">
              <div class="chart">
                <div class="d-flex justify-content-between align-items-stretch">
                  <div class="chart-container">
                    <canvas id="barChart"></canvas>
                  </div>
                  <div class="char-container-content d-flex flex-column justify-content-between">
                    <div class="chart-text-title">Net out</div>
                    <div class="net-out mt-2 d-flex flex-column chart-text-all">
                      <span class="chart-text-primary">
                        <img src="/custom_apps/myappcustom/img/time.svg" alt=""> Last 30 days
                      </span>
                      <h5 class="chart-text-used">97.245 GB</h5>
                    </div>
                  </div>
                </div>
              </div>
              <div class="chart">
                <div class="d-flex justify-content-between align-items-stretch">
                  <div class="chart-container">
                    <canvas id="netInChart"></canvas>
                  </div>
                  <div class="char-container-content d-flex flex-column justify-content-between">
                    <div class="chart-text-title">Net In</div>
                    <div class="net-in mt-2 d-flex flex-column chart-text-all">
                      <span class="chart-text-primary">
                        <img src="/custom_apps/myappcustom/img/time.svg" alt=""> Last 30 days
                      </span>
                      <h5 class="chart-text-used">481.162 GB</h5>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="io-total row">
            <div class="col-lg-8 total-io-container">
              <h3 class="chart-title">Total I/O (Average)</h3>
              <div class="chart-group">
                <div class="chart">
                  <div class="d-flex justify-content-between align-items-stretch">
                    <div class="chart-container">
                      <canvas id="egressChart"></canvas>
                    </div>
                    <div class="char-container-content d-flex flex-column justify-content-between">
                      <div class="chart-text-title">Egress</div>
                      <div class="egress mt-2 d-flex flex-column chart-text-all">
                        <!-- <span class="chart-text-primary">
                          <img src="/custom_apps/myappcustom/img/time.svg" alt=""> Last 30 days
                        </span> -->
                        <h5 class="chart-text-used">5.58 Mb/s</h5>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="chart">
                  <div class="d-flex justify-content-between align-items-stretch">
                    <div class="chart-container">
                      <canvas id="ingressChart"></canvas>
                    </div>
                    <div class="char-container-content d-flex flex-column justify-content-between">
                      <div class="chart-text-title">Ingress</div>
                      <div class="ingress mt-2 d-flex flex-column chart-text-all">
                        <!-- <span class="chart-text-primary">
                          <img src="/custom_apps/myappcustom/img/time.svg" alt=""> Last 30 days
                        </span> -->
                        <h5 class="chart-text-used">15.9 Mb/s</h5>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 total-container">
              <h3 class="chart-title">Total</h3>
              <div class="chart">
                <div class="d-flex justify-content-between align-items-stretch">
                  <div class="chart-container">
                    <canvas id="totalChart"></canvas>
                  </div>
                  <div class="char-container-content d-flex flex-column justify-content-between">
                    <div class="chart-text-title"></div>
                    <div class="total-digital mt-2 d-flex flex-column chart-text-all">
                      <span class="chart-text-primary">
                        <img src="/custom_apps/myappcustom/img/time.svg" alt=""> Last 30 days
                      </span>
                      <h5 class="chart-text-used">1.03 TB</h5>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6 right-side">
          <div class="storage-total-container">
            <h3 class="chart-title">Storage total</h3>
            <div class="chart-donut">
              <div class="donut-chart-container">
                <canvas id="storageChart"></canvas>
              </div>
              <div class="value-chart chart-legend">
                <div class="legend-item used">
                  <span class="legend-color"></span>
                  <p class="legend">
                    <span class="disk-used legend-text">
                      9.99 TB
                    </span>
                    <span class="legend-subtext">Disk
                      used</span>
                  </p>
                </div>
                <div class="legend-item free">
                  <span class="legend-color"></span>
                  <p class="legend">
                    <span class="disk-free legend-text">
                      470 TB
                    </span>
                    <span class="legend-subtext">Disk
                      free</span>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- end Digital Storage -->

    <!-- Devices Management -->
    <section id="device-management">
      <div class="header">
        <h2 class="title">Devices Management</h2>
        <div class="more-icon-box">
          <svg class="more-icon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
            stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round"
              d="M12 6.75a.75.75 0 1 1 0-1.5.75.75 0 0 1 0 1.5ZM12 12.75a.75.75 0 1 1 0-1.5.75.75 0 0 1 0 1.5ZM12 18.75a.75.75 0 1 1 0-1.5.75.75 0 0 1 0 1.5Z" />
          </svg>

          <div id="popup-menu" class="icon-dropdown-menu">
            <ul>
              <li><a class="action-item no-underline" href="#">Delete Widget</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-3 directory-col">
              <div class="directory-section">
                <h3 class="directory-section-title">Directory search</h3>
                <div class="treeview">
                  <div id="pen-container">
                    <div class="tree-view">
                      <ul class="root">
                        <li class="is-folder open">
                          <div class="checkbox partial-check">
                            <a class="folder-toggle" href="javascript:void(0)"></a>
                            <svg class="folder-icon" width="22" height="17" viewBox="0 0 22 17" fill="none"
                              xmlns="http://www.w3.org/2000/svg">
                              <path
                                d="M9.24349 0.166504H2.99349C1.84766 0.166504 0.920573 1.104 0.920573 2.24984L0.910156 14.7498C0.910156 15.8957 1.84766 16.8332 2.99349 16.8332H19.6602C20.806 16.8332 21.7435 15.8957 21.7435 14.7498V4.33317C21.7435 3.18734 20.806 2.24984 19.6602 2.24984H11.3268L9.24349 0.166504Z"
                                fill="#5686E1" />
                            </svg> Company </label>
                          </div>
                          <ul>
                            <li class="is-folder open">
                              <div class="checkbox partial-check">
                                <a class="folder-toggle" href="javascript:void(0)"></a>
                                <svg class="folder-icon" width="22" height="17" viewBox="0 0 22 17" fill="none"
                                  xmlns="http://www.w3.org/2000/svg">
                                  <path
                                    d="M9.24349 0.166504H2.99349C1.84766 0.166504 0.920573 1.104 0.920573 2.24984L0.910156 14.7498C0.910156 15.8957 1.84766 16.8332 2.99349 16.8332H19.6602C20.806 16.8332 21.7435 15.8957 21.7435 14.7498V4.33317C21.7435 3.18734 20.806 2.24984 19.6602 2.24984H11.3268L9.24349 0.166504Z"
                                    fill="#5686E1" />
                                </svg> Business Unit</label>
                              </div>
                              <ul>
                                <li class="is-folder open">
                                  <div class="checkbox partial-check">
                                    <a class="folder-toggle" href="javascript:void(0)"></a>
                                    <svg class="folder-icon" width="22" height="17" viewBox="0 0 22 17" fill="none"
                                      xmlns="http://www.w3.org/2000/svg">
                                      <path
                                        d="M9.24349 0.166504H2.99349C1.84766 0.166504 0.920573 1.104 0.920573 2.24984L0.910156 14.7498C0.910156 15.8957 1.84766 16.8332 2.99349 16.8332H19.6602C20.806 16.8332 21.7435 15.8957 21.7435 14.7498V4.33317C21.7435 3.18734 20.806 2.24984 19.6602 2.24984H11.3268L9.24349 0.166504Z"
                                        fill="#5686E1" />
                                    </svg> Group</label>
                                  </div>
                                  <ul>
                                    <li class="is-folder open">
                                      <div class="checkbox partial-check">
                                        <a class="folder-toggle" href="javascript:void(0)"></a>
                                        <svg class="folder-icon" width="22" height="17" viewBox="0 0 22 17" fill="none"
                                          xmlns="http://www.w3.org/2000/svg">
                                          <path
                                            d="M9.24349 0.166504H2.99349C1.84766 0.166504 0.920573 1.104 0.920573 2.24984L0.910156 14.7498C0.910156 15.8957 1.84766 16.8332 2.99349 16.8332H19.6602C20.806 16.8332 21.7435 15.8957 21.7435 14.7498V4.33317C21.7435 3.18734 20.806 2.24984 19.6602 2.24984H11.3268L9.24349 0.166504Z"
                                            fill="#5686E1" />
                                        </svg> Device type</label>
                                      </div>
                                      <ul>
                                        <li class="is-folder">
                                          <div class="checkbox partial-check">
                                            <a class="folder-toggle"></a>
                                            <div class="checkbox"><svg class="folder-icon" width="22" height="17"
                                                viewBox="0 0 22 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                  d="M9.24349 0.166504H2.99349C1.84766 0.166504 0.920573 1.104 0.920573 2.24984L0.910156 14.7498C0.910156 15.8957 1.84766 16.8332 2.99349 16.8332H19.6602C20.806 16.8332 21.7435 15.8957 21.7435 14.7498V4.33317C21.7435 3.18734 20.806 2.24984 19.6602 2.24984H11.3268L9.24349 0.166504Z"
                                                  fill="#5686E1" />
                                              </svg>
                                              <span>Cell phones</span>
                                            </div>
                                          </div>
                                        </li>
                                        <li>
                                          <div class="checkbox"><svg class="folder-icon" width="22" height="17"
                                              viewBox="0 0 22 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                              <path
                                                d="M9.24349 0.166504H2.99349C1.84766 0.166504 0.920573 1.104 0.920573 2.24984L0.910156 14.7498C0.910156 15.8957 1.84766 16.8332 2.99349 16.8332H19.6602C20.806 16.8332 21.7435 15.8957 21.7435 14.7498V4.33317C21.7435 3.18734 20.806 2.24984 19.6602 2.24984H11.3268L9.24349 0.166504Z"
                                                fill="#5686E1" />
                                            </svg>
                                            <span>Desktops</span>
                                          </div>
                                        </li>
                                      </ul>
                                    </li>
                                  </ul>
                                </li>
                              </ul>
                            </li>
                          </ul>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Manual Search Form Column -->
            <div class="col-md-9 form-col">
              <div class="manual-section">
                <h1 class="directory-section-title">Manual search</h1>
                <form action="">
                  <!-- Backup Details Section -->
                  <div class="row form-section">
                    <div class="col-lg-6 manual-baclup-details">
                      <h3 class="form-section-title">Backup Details</h3>
                      <div class="row manual-detail">
                        <div class="col-md-6">
                          <div class="form-group">
                            <div class="search-dropdown-manual">
                              <label for="backupPlan">Backup type</label>
                              <div class="dropdown-container">
                                <div class="dropdown-button">
                                  <span id="dropdown-button-text">Incremental</span>
                                </div>
                                <ul class="dropdown-list">
                                  <li data-value="incremental"><a href="#">Incremental</a></li>
                                  <li data-value="full"><a href="#">Full</a></li>
                                </ul>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <div class="search-dropdown-manual">
                              <label for="backupPlan">Backup plan</label>
                              <div class="dropdown-container">
                                <div class="dropdown-button">
                                  <span id="dropdown-button-text">Incremental</span>
                                </div>
                                <!-- <ul class="dropdown-list">
                                <li data-value="incremental"><a href="#">Incremental</a></li>
                                <li data-value="full"><a href="#">Full</a></li>
                              </ul> -->
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-12">
                          <div class="form-group">
                            <div class="hostname location">
                              <label class="input">
                                <input class="input__field" type="text" placeholder="Michigan" />
                                <span class="input__label">Location</span>
                              </label>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-6 manual-organization">
                      <h3 class="form-section-title">Organization</h3>
                      <div class="row manual-detail-organization">
                        <div class="col-md-6">
                          <div class="form-group">
                            <div class="hostname">
                              <label class="input">
                                <input class="input__field" type="text" placeholder="CloudIP" />
                                <span class="input__label">Company</span>
                              </label>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <div class="hostname">
                              <label class="input">
                                <input class="input__field" type="text" placeholder="US BU" />
                                <span class="input__label">Business Unit</span>
                              </label>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <div class="hostname ">
                              <label class="input">
                                <input class="input__field" type="text" placeholder="Programming" />
                                <span class="input__label">Department</span>
                              </label>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <div class="hostname">
                              <label class="input">
                                <input class="input__field" type="text" placeholder="Delivery" />
                                <span class="input__label">Service</span>
                              </label>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <!-- Technical Information Section -->
                  <div class="form-section technical-section">
                    <h3 class="form-section-title">Technical information</h3>
                    <div class="row tech-row-first">
                      <div class="col-md-3">
                        <div class="form-group">
                          <div class="search-dropdown-manual">
                            <label for="backupPlan">Backup type</label>
                            <div class="dropdown-container">
                              <div class="dropdown-button">
                                <span id="dropdown-button-text">Incremental</span>
                              </div>
                              <ul class="dropdown-list">
                                <li data-value="incremental"><a href="#">Incremental</a></li>
                                <li data-value="full"><a href="#">Full</a></li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <div class="search-dropdown-manual">
                            <label for="backupPlan">Backup type</label>
                            <div class="dropdown-container">
                              <div class="dropdown-button">
                                <span id="dropdown-button-text">Incremental</span>
                              </div>
                              <ul class="dropdown-list">
                                <li data-value="incremental"><a href="#">Incremental</a></li>
                                <li data-value="full"><a href="#">Full</a></li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <div class="search-dropdown-manual">
                            <label for="backupPlan">Backup type</label>
                            <div class="dropdown-container">
                              <div class="dropdown-button">
                                <span id="dropdown-button-text">Incremental</span>
                              </div>
                              <ul class="dropdown-list">
                                <li data-value="incremental"><a href="#">Incremental</a></li>
                                <li data-value="full"><a href="#">Full</a></li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <div class="hostname">
                            <label class="input">
                              <input class="input__field" type="text" placeholder="netmask" />
                              <span class="input__label">Netmask</span>
                            </label>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-3">
                        <div class="form-group">
                          <div class="hostname">
                            <label class="input">
                              <input class="input__field" type="text" placeholder="" />
                              <span class="input__label">MAC Address</span>
                            </label>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <div class="hostname">
                            <label class="input">
                              <input class="input__field" type="text" placeholder="" />
                              <span class="input__label">Hostname</span>
                            </label>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <div class="hostname">
                            <label class="input">
                              <input class="input__field" type="text" placeholder="" />
                              <span class="input__label">DNS 1 IP Address</span>
                            </label>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <div class="hostname">
                            <label class="input">
                              <input class="input__field" type="text" placeholder="" />
                              <span class="input__label">DNS 2 IP Address</span>
                            </label>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <div class="hostname it-management">
                            <label class="input">
                              <input class="input__field" type="text" placeholder="CloudIP IT Group" />
                              <span class="input__label">IT Management</span>
                            </label>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <div class="hostname gatewayipaddress">
                            <label class="input">
                              <input class="input__field" type="text" placeholder="" />
                              <span class="input__label">Gateway IP Address</span>
                            </label>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <!-- User Information Section -->
                  <div class="form-section">
                    <h3 class="form-section-title">User information</h3>
                    <div class="row">
                      <div class="col-md-3">
                        <div class="form-group">
                          <div class="hostname">
                            <label class="input">
                              <input class="input__field" type="text" placeholder="First name" />
                              <span class="input__label">User first name</span>
                            </label>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <div class="hostname">
                            <label class="input">
                              <input class="input__field" type="text" placeholder="Last name" />
                              <span class="input__label">User last name</span>
                            </label>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <div class="hostname">
                            <label class="input">
                              <input class="input__field" type="text" placeholder="email@email.com" />
                              <span class="input__label">Email</span>
                            </label>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <div class="hostname">
                            <label class="input">
                              <input class="input__field" type="text" id="phoneNumber" value="+1" />
                              <span class="input__label">Phone number</span>
                            </label>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="form-buttons">
                    <button type="submit" class="btn btn-primary">SEARCH</button>
                    <button type="button" class="btn btn-light" id="saveSearchViewButton"><span><svg width="20"
                          height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path
                            d="M14.887 0.352051H2.38704C1.23079 0.352051 0.303711 1.28955 0.303711 2.43538V17.0187C0.303711 18.1646 1.23079 19.1021 2.38704 19.1021H16.9704C18.1162 19.1021 19.0537 18.1646 19.0537 17.0187V4.51872L14.887 0.352051ZM9.67871 17.0187C7.94954 17.0187 6.55371 15.6229 6.55371 13.8937C6.55371 12.1646 7.94954 10.7687 9.67871 10.7687C11.4079 10.7687 12.8037 12.1646 12.8037 13.8937C12.8037 15.6229 11.4079 17.0187 9.67871 17.0187ZM12.8037 6.60205H2.38704V2.43538H12.8037V6.60205Z"
                            fill="#5686E1" />
                        </svg>
                      </span> Save search view</button>
                  </div>

                  <div class="popub-search-view"
                    style="display: none; position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%); background-color: white; border: 1px solid #ccc; padding: 20px; z-index: 1000;">
                    <div class="popub-header">
                      <h4>Save your search view</h4>
                      <div class="icon-close-popub" id="closePopupButton">
                        <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <g clip-path="url(#clip0_399_4765)">
                            <path
                              d="M19.7913 6.67725L18.3226 5.2085L12.4997 11.0314L6.67676 5.2085L5.20801 6.67725L11.0309 12.5002L5.20801 18.3231L6.67676 19.7918L12.4997 13.9689L18.3226 19.7918L19.7913 18.3231L13.9684 12.5002L19.7913 6.67725Z"
                              fill="#4E84C1" />
                          </g>
                          <defs>
                            <clipPath id="clip0_399_4765">
                              <rect width="25" height="25" fill="white" />
                            </clipPath>
                          </defs>
                        </svg>

                      </div>
                    </div>
                    <div class="input-srearch">
                      <div class="hostname">
                        <label class="input">
                          <input class="input__field popub-search" type="text" placeholder="" />
                          <span class="input__label">Enter search view name</span>
                        </label>
                      </div>
                    </div>
                    <div class="button-search-view">
                      <button type="submit"><svg width="19" height="19" viewBox="0 0 19 19" fill="none"
                          xmlns="http://www.w3.org/2000/svg">
                          <path
                            d="M14.7083 0.125H2.20833C1.05208 0.125 0.125 1.0625 0.125 2.20833V16.7917C0.125 17.9375 1.05208 18.875 2.20833 18.875H16.7917C17.9375 18.875 18.875 17.9375 18.875 16.7917V4.29167L14.7083 0.125ZM9.5 16.7917C7.77083 16.7917 6.375 15.3958 6.375 13.6667C6.375 11.9375 7.77083 10.5417 9.5 10.5417C11.2292 10.5417 12.625 11.9375 12.625 13.6667C12.625 15.3958 11.2292 16.7917 9.5 16.7917ZM12.625 6.375H2.20833V2.20833H12.625V6.375Z"
                            fill="white" />
                        </svg>
                        Save</button>
                    </div>
                  </div>
                  <div id="popub-add-device-management">
                    <div class="popub-header">
                      <h4>Add device</h4>
                      <div class="icon-close-popub" id="closePopupButton">
                        <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <g clip-path="url(#clip0_399_4765)">
                            <path
                              d="M19.7913 6.67725L18.3226 5.2085L12.4997 11.0314L6.67676 5.2085L5.20801 6.67725L11.0309 12.5002L5.20801 18.3231L6.67676 19.7918L12.4997 13.9689L18.3226 19.7918L19.7913 18.3231L13.9684 12.5002L19.7913 6.67725Z"
                              fill="#4E84C1" />
                          </g>
                          <defs>
                            <clipPath id="clip0_399_4765">
                              <rect width="25" height="25" fill="white" />
                            </clipPath>
                          </defs>
                        </svg>

                      </div>
                    </div>
                    <div class="form-popub-add-device">
                      <div class="form-row">
                        <div class="form-group">
                          <div class="search-dropdown-manual">
                            <label for="backupPlan">Device type</label>
                            <div class="dropdown-container">
                              <div class="dropdown-button">
                                <span id="dropdown-button-text">Desktop</span>
                              </div>
                              <ul class="dropdown-list">
                                <li data-value="desktop"><a href="#">Desktop</a></li>
                                <li data-value="laptop"><a href="#">Laptop</a></li>
                                <li data-value="server"><a href="#">Server</a></li>
                                <li data-value="cell-phone"><a href="#">Cell Phone</a></li>
                                <li data-value="tablet"><a href="#">Tablet</a></li>
                              </ul>
                            </div>
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="search-dropdown-manual">
                            <label for="backupPlan">OS</label>
                            <div class="dropdown-container">
                              <div class="dropdown-button">
                                <span id="dropdown-button-text">Windows</span>
                              </div>
                              <ul class="dropdown-list">
                                <li data-value="windows"><a href="#">Windows</a></li>
                                <li data-value="linux"><a href="#">Linux</a></li>
                                <li data-value="ubuntu"><a href="#">Ubuntu</a></li>
                                <li data-value="ios"><a href="#">IOS</a></li>
                                <li data-value="andoid"><a href="#">Android</a></li>
                              </ul>
                            </div>
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="search-dropdown-manual">
                            <label for="backupPlan">IP Address type</label>
                            <div class="dropdown-container">
                              <div class="dropdown-button">
                                <span id="dropdown-button-text">DHCP</span>
                              </div>
                              <ul class="dropdown-list">
                                <li data-value="dhcp"><a href="#">DHCP</a></li>
                                <li data-value="static  "><a href="#">Static</a></li>
                              </ul>
                            </div>
                          </div>

                        </div>
                        <div class="form-group">
                          <div class="hostname ">
                            <label style="color: transparent;" for="backupPlan">a</label>
                            <label class="input">
                              <input class="input__field popub-search" id="netmask" type="text" placeholder="" />
                              <span class="input__label">Netmask</span>
                            </label>
                          </div>
                        </div>
                      </div>
                      <div class="form-row">
                        <div class="form-group">
                          <div class="hostname">
                            <label class="input">
                              <input class="input__field popub-search" id="mac-address" type="text" placeholder="" />
                              <span class="input__label">MAC Address</span>
                            </label>
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="hostname">
                            <label class="input">
                              <input class="input__field popub-search" id="hostname" type="text" placeholder="" />
                              <span class="input__label">Hostname</span>
                            </label>
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="hostname">
                            <label class="input">
                              <input class="input__field popub-search" id="dns1-ip-address" type="text"
                                placeholder="" />
                              <span class="input__label">DNS 1 IP Address</span>
                            </label>
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="hostname">
                            <label class="input">
                              <input class="input__field popub-search" id="dns2-ip-address" type="text"
                                placeholder="" />
                              <span class="input__label">DNS 2 IP Address</span>
                            </label>
                          </div>
                        </div>
                      </div>
                      <div class="form-row">
                        <div class="form-group">
                          <div class="hostname">
                            <label class="input">
                              <input class="input__field popub-search" id="it-management" type="text" placeholder="" />
                              <span class="input__label">IT Management</span>
                            </label>
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="hostname">
                            <label class="input">
                              <input class="input__field popub-search" id="gateway-ip-address" type="text"
                                placeholder="" />
                              <span class="input__label">Gateway IP Address</span>
                            </label>
                          </div>
                        </div>
                      </div>
                    </div>
                    <button class="scan-device-button">
                      <svg width="24" height="16" viewBox="0 0 24 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M4 2H22V0H4C2.9 0 2 0.9 2 2V13H0V16H14V13H4V2ZM23 4H17C16.45 4 16 4.45 16 5V15C16 15.55 16.45 16 17 16H23C23.55 16 24 15.55 24 15V5C24 4.45 23.55 4 23 4ZM22 13H18V6H22V13Z"
                          fill="#4E84C1" />
                      </svg>
                      Scan Device
                    </button>

                    <table class="device-table table-striped">
                      <thead>
                        <tr>
                          <th><input type="checkbox"></th>
                          <th>Device Type</th>
                          <th>OS</th>
                          <th>MAC Address</th>
                          <th>Hostname</th>
                          <th>IP Address Type</th>
                          <th>Gateway IP Address</th>
                          <th>Netmask</th>
                          <th>DNS 1 IP Address</th>
                          <th>DNS 2 IP Address</th>
                          <th>IT Management</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td><input type="checkbox"></td>
                          <td>Desktop</td>
                          <td>Windows</td>
                          <td>00:1A:2B:3C:4D:5E</td>
                          <td>desktop-john</td>
                          <td>DHCP</td>
                          <td>192.168.1.1</td>
                          <td>255.255.255.0</td>
                          <td>1.1.1.1</td>
                          <td>1.0.0.1</td>
                          <td>CloudIP IT Group</td>
                        </tr>
                        <tr>
                          <td><input type="checkbox"></td>
                          <td>Desktop</td>
                          <td>Windows</td>
                          <td>00:1A:2B:3C:4D:5E</td>
                          <td>desktop-john</td>
                          <td>DHCP</td>
                          <td>192.168.1.1</td>
                          <td>255.255.255.0</td>
                          <td>1.1.1.1</td>
                          <td>1.0.0.1</td>
                          <td>CloudIP IT Group</td>
                        </tr>
                        <tr>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                        </tr>
                      </tbody>
                    </table>

                    <button class="apply-button">Apply</button>

                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="">
        <div class="" style="margin: 0;">
          <div class="device-save-view">
            <div class="dropdown-container">
              <div class="dropdown-button">
                <span id="dropdown-button-text">Saved Search View Name</span>
              </div>
              <!-- <ul class="dropdown-list">
                <li data-value="retention-policies"><a href="#">Retention Policies</a></li>
                <li data-value="priority-retention-policies"><a href="#">Priority policies and
                    groups</a></li>
              </ul> -->
            </div>
          </div>
          <div class="device-add-view text-right">
            <button class="button-device-add" id="popub-add-device"><svg width="21" height="21" viewBox="0 0 21 21"
                fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M10.4997 0.0834961C4.74967 0.0834961 0.0830078 4.75016 0.0830078 10.5002C0.0830078 16.2502 4.74967 20.9168 10.4997 20.9168C16.2497 20.9168 20.9163 16.2502 20.9163 10.5002C20.9163 4.75016 16.2497 0.0834961 10.4997 0.0834961ZM15.708 11.5418H11.5413V15.7085H9.45801V11.5418H5.29134V9.4585H9.45801V5.29183H11.5413V9.4585H15.708V11.5418Z"
                  fill="white" />
              </svg>
              Add Device</button>
            <div class="btn-group-show">
              <div class="dropdown">
                <button class="dropdown-toggle" id="dropdownToggle">
                  <span class="dropdown-text">
                    <svg width="20" height="14" viewBox="0 0 20 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="M9.99967 0.75C5.83301 0.75 2.27467 3.34167 0.833008 7C2.27467 10.6583 5.83301 13.25 9.99967 13.25C14.1663 13.25 17.7247 10.6583 19.1663 7C17.7247 3.34167 14.1663 0.75 9.99967 0.75ZM9.99967 11.1667C7.69967 11.1667 5.83301 9.3 5.83301 7C5.83301 4.7 7.69967 2.83333 9.99967 2.83333C12.2997 2.83333 14.1663 4.7 14.1663 7C14.1663 9.3 12.2997 11.1667 9.99967 11.1667ZM9.99967 4.5C8.61634 4.5 7.49967 5.61667 7.49967 7C7.49967 8.38333 8.61634 9.5 9.99967 9.5C11.383 9.5 12.4997 8.38333 12.4997 7C12.4997 5.61667 11.383 4.5 9.99967 4.5Z"
                        fill="#4E84C1" />
                    </svg>
                    Show
                  </span>
                  <svg width="10" height="7" viewBox="0 0 10 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1.175 0.158203L5 3.97487L8.825 0.158203L10 1.3332L5 6.3332L0 1.3332L1.175 0.158203Z"
                      fill="#4E84C1" />
                  </svg>
                </button>
                <div id="dropdownOptions" class="dropdown-options">
                  <label class="dropdown-option">
                    <input type="checkbox" value="backupPlan" checked>
                    <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="M3.89732 10.3999L0.400391 5.65978L1.27462 4.47475L3.89732 8.02984L9.52616 0.399902L10.4004 1.58493L3.89732 10.3999Z"
                        fill="#4E84C1" />
                    </svg>
                    Backup Plan
                  </label>
                  <label class="dropdown-option">
                    <input type="checkbox" value="userInfo" checked>
                    <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="M3.89732 10.3999L0.400391 5.65978L1.27462 4.47475L3.89732 8.02984L9.52616 0.399902L10.4004 1.58493L3.89732 10.3999Z"
                        fill="#4E84C1" />
                    </svg>
                    User Information
                  </label>
                  <label class="dropdown-option">
                    <input type="checkbox" value="organization" checked>
                    <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="M3.89732 10.3999L0.400391 5.65978L1.27462 4.47475L3.89732 8.02984L9.52616 0.399902L10.4004 1.58493L3.89732 10.3999Z"
                        fill="#4E84C1" />
                    </svg>
                    Organization
                  </label>
                  <label class="dropdown-option">
                    <input type="checkbox" value="technicalInfo" checked>
                    <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="M3.89732 10.3999L0.400391 5.65978L1.27462 4.47475L3.89732 8.02984L9.52616 0.399902L10.4004 1.58493L3.89732 10.3999Z"
                        fill="#4E84C1" />
                    </svg>
                    Technical Information
                  </label>
                </div>
              </div>
            </div>
          </div>
        </div>

        <ul class="nav nav-tabs mt-3">
          <li class="nav-item">
            <a class="nav-link active" href="#">BACKUPS</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">DUPLICATION</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">IMMUTABILITY</a>
          </li>
        </ul>

        <div class="table-responsive">
          <table class="table table-striped" style="width: 100%;">
            <thead class="thead-light">
              <tr class="header-top">
                <th colspan="4">Backup Plan</th>
                <th colspan="4">User Information</th>
                <th></th>
                <th></th>
              </tr>
              <tr class="header-bottom">
                <th>Backup Type</th>
                <th>Backup Plan Level</th>
                <th>Backup Location</th>
                <th>Retention Policy</th>
                <th>User First Name</th>
                <th>User Last Name</th>
                <th>Email Address</th>
                <th>Phone Number</th>
                <th>History</th>
                <th>Company</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Full</td>
                <td>Backup Plan</td>
                <td>Michigan</td>
                <td></td>
                <td>John</td>
                <td>Doe</td>
                <td>email@gmail.com</td>
                <td>+1 000000</td>
                <td>
                  <button class="btn btn-outline-primary">
                    <svg class="icon-word" width="20" height="20" viewBox="0 0 20 20" fill="none"
                      xmlns="http://www.w3.org/2000/svg">
                      <g clip-path="url(#clip0_1219_3096)">
                        <path
                          d="M0 10C0 7.34784 1.05357 4.8043 2.92893 2.92893C4.8043 1.05357 7.34784 0 10 0C12.6522 0 15.1957 1.05357 17.0711 2.92893C18.9464 4.8043 20 7.34784 20 10C20 12.6522 18.9464 15.1957 17.0711 17.0711C15.1957 18.9464 12.6522 20 10 20C7.34784 20 4.8043 18.9464 2.92893 17.0711C1.05357 15.1957 0 12.6522 0 10ZM9.375 1.34625C8.5375 1.60125 7.70625 2.37125 7.01625 3.665C6.78904 4.09518 6.59352 4.54136 6.43125 5H9.375V1.34625ZM5.1125 5C5.32105 4.3361 5.58879 3.69226 5.9125 3.07625C6.13005 2.6684 6.37959 2.27843 6.65875 1.91C5.11018 2.55259 3.77777 3.62477 2.81875 5H5.1125ZM4.385 9.375C4.4225 8.27875 4.5575 7.2275 4.775 6.25H2.0925C1.62756 7.23174 1.34949 8.29146 1.2725 9.375H4.385ZM6.05875 6.25C5.81289 7.27475 5.67134 8.32175 5.63625 9.375H9.375V6.25H6.05875ZM10.625 6.25V9.375H14.3625C14.3278 8.32179 14.1867 7.2748 13.9412 6.25H10.625ZM5.6375 10.625C5.67218 11.6782 5.81331 12.7252 6.05875 13.75H9.375V10.625H5.6375ZM10.625 10.625V13.75H13.9412C14.175 12.7937 14.3238 11.74 14.3638 10.625H10.625ZM6.43125 15C6.60458 15.4833 6.79958 15.9283 7.01625 16.335C7.70625 17.6287 8.53875 18.3975 9.375 18.6538V15H6.43125ZM6.65875 18.09C6.37959 17.7216 6.13005 17.3316 5.9125 16.9237C5.58879 16.3077 5.32105 15.6639 5.1125 15H2.81875C3.77621 16.3767 5.1091 17.4492 6.65875 18.09ZM4.775 13.75C4.54929 12.7225 4.41874 11.6764 4.385 10.625H1.2725C1.35 11.7375 1.63625 12.7913 2.0925 13.75H4.775ZM13.3413 18.09C14.8909 17.4492 16.2238 16.3767 17.1812 15H14.8875C14.6789 15.6639 14.4112 16.3077 14.0875 16.9237C13.8699 17.3316 13.6204 17.7216 13.3413 18.09ZM10.625 15V18.6538C11.4625 18.3988 12.2937 17.6287 12.9838 16.335C13.2004 15.9292 13.3954 15.4842 13.5687 15H10.625ZM15.225 13.75H17.9075C18.3638 12.7913 18.65 11.7375 18.7275 10.625H15.615C15.5813 11.6764 15.4507 12.7225 15.225 13.75ZM18.7275 9.375C18.6505 8.29146 18.3724 7.23174 17.9075 6.25H15.225C15.4425 7.2275 15.5775 8.27875 15.615 9.375H18.7275ZM14.0875 3.07625C14.3963 3.65625 14.665 4.30125 14.8875 5H17.1812C16.2238 3.62332 14.8909 2.55076 13.3413 1.91C13.6138 2.265 13.8638 2.6575 14.0875 3.07625ZM13.5687 5C13.4065 4.54136 13.211 4.09518 12.9838 3.665C12.2937 2.37125 11.4625 1.6025 10.625 1.34625V5H13.5687Z"
                          fill="#2C78C8" />
                      </g>
                      <defs>
                        <clipPath id="clip0_1219_3096">
                          <rect width="20" height="20" fill="white" />
                        </clipPath>
                      </defs>
                    </svg>Action History
                  </button>
                </td>
                <td>CloudIP</td>
              </tr>
              <tr>
                <td class="backup-plan" colspan="4">
                  <button class="btn btn-primary">Add to backup plan</button>
                </td>
                <td>John</td>
                <td>Doe</td>
                <td>email@gmail.com</td>
                <td>+1 000000</td>
                <td>
                  <button class="btn btn-outline-primary">
                    <svg class="icon-word" width="20" height="20" viewBox="0 0 20 20" fill="none"
                      xmlns="http://www.w3.org/2000/svg">
                      <g clip-path="url(#clip0_1219_3096)">
                        <path
                          d="M0 10C0 7.34784 1.05357 4.8043 2.92893 2.92893C4.8043 1.05357 7.34784 0 10 0C12.6522 0 15.1957 1.05357 17.0711 2.92893C18.9464 4.8043 20 7.34784 20 10C20 12.6522 18.9464 15.1957 17.0711 17.0711C15.1957 18.9464 12.6522 20 10 20C7.34784 20 4.8043 18.9464 2.92893 17.0711C1.05357 15.1957 0 12.6522 0 10ZM9.375 1.34625C8.5375 1.60125 7.70625 2.37125 7.01625 3.665C6.78904 4.09518 6.59352 4.54136 6.43125 5H9.375V1.34625ZM5.1125 5C5.32105 4.3361 5.58879 3.69226 5.9125 3.07625C6.13005 2.6684 6.37959 2.27843 6.65875 1.91C5.11018 2.55259 3.77777 3.62477 2.81875 5H5.1125ZM4.385 9.375C4.4225 8.27875 4.5575 7.2275 4.775 6.25H2.0925C1.62756 7.23174 1.34949 8.29146 1.2725 9.375H4.385ZM6.05875 6.25C5.81289 7.27475 5.67134 8.32175 5.63625 9.375H9.375V6.25H6.05875ZM10.625 6.25V9.375H14.3625C14.3278 8.32179 14.1867 7.2748 13.9412 6.25H10.625ZM5.6375 10.625C5.67218 11.6782 5.81331 12.7252 6.05875 13.75H9.375V10.625H5.6375ZM10.625 10.625V13.75H13.9412C14.175 12.7937 14.3238 11.74 14.3638 10.625H10.625ZM6.43125 15C6.60458 15.4833 6.79958 15.9283 7.01625 16.335C7.70625 17.6287 8.53875 18.3975 9.375 18.6538V15H6.43125ZM6.65875 18.09C6.37959 17.7216 6.13005 17.3316 5.9125 16.9237C5.58879 16.3077 5.32105 15.6639 5.1125 15H2.81875C3.77621 16.3767 5.1091 17.4492 6.65875 18.09ZM4.775 13.75C4.54929 12.7225 4.41874 11.6764 4.385 10.625H1.2725C1.35 11.7375 1.63625 12.7913 2.0925 13.75H4.775ZM13.3413 18.09C14.8909 17.4492 16.2238 16.3767 17.1812 15H14.8875C14.6789 15.6639 14.4112 16.3077 14.0875 16.9237C13.8699 17.3316 13.6204 17.7216 13.3413 18.09ZM10.625 15V18.6538C11.4625 18.3988 12.2937 17.6287 12.9838 16.335C13.2004 15.9292 13.3954 15.4842 13.5687 15H10.625ZM15.225 13.75H17.9075C18.3638 12.7913 18.65 11.7375 18.7275 10.625H15.615C15.5813 11.6764 15.4507 12.7225 15.225 13.75ZM18.7275 9.375C18.6505 8.29146 18.3724 7.23174 17.9075 6.25H15.225C15.4425 7.2275 15.5775 8.27875 15.615 9.375H18.7275ZM14.0875 3.07625C14.3963 3.65625 14.665 4.30125 14.8875 5H17.1812C16.2238 3.62332 14.8909 2.55076 13.3413 1.91C13.6138 2.265 13.8638 2.6575 14.0875 3.07625ZM13.5687 5C13.4065 4.54136 13.211 4.09518 12.9838 3.665C12.2937 2.37125 11.4625 1.6025 10.625 1.34625V5H13.5687Z"
                          fill="#2C78C8" />
                      </g>
                      <defs>
                        <clipPath id="clip0_1219_3096">
                          <rect width="20" height="20" fill="white" />
                        </clipPath>
                      </defs>
                    </svg>Action History
                  </button>
                </td>
                <td>CloudIP</td>
              </tr>
              <tr>
                <td>Full</td>
                <td>Backup Plan</td>
                <td>Michigan</td>
                <td></td>
                <td>John</td>
                <td>Doe</td>
                <td>email@gmail.com</td>
                <td>+1 000000</td>
                <td>
                  <button class="btn btn-outline-primary">
                    <svg class="icon-word" width="20" height="20" viewBox="0 0 20 20" fill="none"
                      xmlns="http://www.w3.org/2000/svg">
                      <g clip-path="url(#clip0_1219_3096)">
                        <path
                          d="M0 10C0 7.34784 1.05357 4.8043 2.92893 2.92893C4.8043 1.05357 7.34784 0 10 0C12.6522 0 15.1957 1.05357 17.0711 2.92893C18.9464 4.8043 20 7.34784 20 10C20 12.6522 18.9464 15.1957 17.0711 17.0711C15.1957 18.9464 12.6522 20 10 20C7.34784 20 4.8043 18.9464 2.92893 17.0711C1.05357 15.1957 0 12.6522 0 10ZM9.375 1.34625C8.5375 1.60125 7.70625 2.37125 7.01625 3.665C6.78904 4.09518 6.59352 4.54136 6.43125 5H9.375V1.34625ZM5.1125 5C5.32105 4.3361 5.58879 3.69226 5.9125 3.07625C6.13005 2.6684 6.37959 2.27843 6.65875 1.91C5.11018 2.55259 3.77777 3.62477 2.81875 5H5.1125ZM4.385 9.375C4.4225 8.27875 4.5575 7.2275 4.775 6.25H2.0925C1.62756 7.23174 1.34949 8.29146 1.2725 9.375H4.385ZM6.05875 6.25C5.81289 7.27475 5.67134 8.32175 5.63625 9.375H9.375V6.25H6.05875ZM10.625 6.25V9.375H14.3625C14.3278 8.32179 14.1867 7.2748 13.9412 6.25H10.625ZM5.6375 10.625C5.67218 11.6782 5.81331 12.7252 6.05875 13.75H9.375V10.625H5.6375ZM10.625 10.625V13.75H13.9412C14.175 12.7937 14.3238 11.74 14.3638 10.625H10.625ZM6.43125 15C6.60458 15.4833 6.79958 15.9283 7.01625 16.335C7.70625 17.6287 8.53875 18.3975 9.375 18.6538V15H6.43125ZM6.65875 18.09C6.37959 17.7216 6.13005 17.3316 5.9125 16.9237C5.58879 16.3077 5.32105 15.6639 5.1125 15H2.81875C3.77621 16.3767 5.1091 17.4492 6.65875 18.09ZM4.775 13.75C4.54929 12.7225 4.41874 11.6764 4.385 10.625H1.2725C1.35 11.7375 1.63625 12.7913 2.0925 13.75H4.775ZM13.3413 18.09C14.8909 17.4492 16.2238 16.3767 17.1812 15H14.8875C14.6789 15.6639 14.4112 16.3077 14.0875 16.9237C13.8699 17.3316 13.6204 17.7216 13.3413 18.09ZM10.625 15V18.6538C11.4625 18.3988 12.2937 17.6287 12.9838 16.335C13.2004 15.9292 13.3954 15.4842 13.5687 15H10.625ZM15.225 13.75H17.9075C18.3638 12.7913 18.65 11.7375 18.7275 10.625H15.615C15.5813 11.6764 15.4507 12.7225 15.225 13.75ZM18.7275 9.375C18.6505 8.29146 18.3724 7.23174 17.9075 6.25H15.225C15.4425 7.2275 15.5775 8.27875 15.615 9.375H18.7275ZM14.0875 3.07625C14.3963 3.65625 14.665 4.30125 14.8875 5H17.1812C16.2238 3.62332 14.8909 2.55076 13.3413 1.91C13.6138 2.265 13.8638 2.6575 14.0875 3.07625ZM13.5687 5C13.4065 4.54136 13.211 4.09518 12.9838 3.665C12.2937 2.37125 11.4625 1.6025 10.625 1.34625V5H13.5687Z"
                          fill="#2C78C8" />
                      </g>
                      <defs>
                        <clipPath id="clip0_1219_3096">
                          <rect width="20" height="20" fill="white" />
                        </clipPath>
                      </defs>
                    </svg>Action History
                  </button>
                </td>
                <td>CloudIP</td>
              </tr>
              <tr>
                <td>Full</td>
                <td>Backup Plan</td>
                <td>Michigan</td>
                <td></td>
                <td>John</td>
                <td>Doe</td>
                <td>email@gmail.com</td>
                <td>+1 000000</td>
                <td>
                  <button class="btn btn-outline-primary">
                    <svg class="icon-word" width="20" height="20" viewBox="0 0 20 20" fill="none"
                      xmlns="http://www.w3.org/2000/svg">
                      <g clip-path="url(#clip0_1219_3096)">
                        <path
                          d="M0 10C0 7.34784 1.05357 4.8043 2.92893 2.92893C4.8043 1.05357 7.34784 0 10 0C12.6522 0 15.1957 1.05357 17.0711 2.92893C18.9464 4.8043 20 7.34784 20 10C20 12.6522 18.9464 15.1957 17.0711 17.0711C15.1957 18.9464 12.6522 20 10 20C7.34784 20 4.8043 18.9464 2.92893 17.0711C1.05357 15.1957 0 12.6522 0 10ZM9.375 1.34625C8.5375 1.60125 7.70625 2.37125 7.01625 3.665C6.78904 4.09518 6.59352 4.54136 6.43125 5H9.375V1.34625ZM5.1125 5C5.32105 4.3361 5.58879 3.69226 5.9125 3.07625C6.13005 2.6684 6.37959 2.27843 6.65875 1.91C5.11018 2.55259 3.77777 3.62477 2.81875 5H5.1125ZM4.385 9.375C4.4225 8.27875 4.5575 7.2275 4.775 6.25H2.0925C1.62756 7.23174 1.34949 8.29146 1.2725 9.375H4.385ZM6.05875 6.25C5.81289 7.27475 5.67134 8.32175 5.63625 9.375H9.375V6.25H6.05875ZM10.625 6.25V9.375H14.3625C14.3278 8.32179 14.1867 7.2748 13.9412 6.25H10.625ZM5.6375 10.625C5.67218 11.6782 5.81331 12.7252 6.05875 13.75H9.375V10.625H5.6375ZM10.625 10.625V13.75H13.9412C14.175 12.7937 14.3238 11.74 14.3638 10.625H10.625ZM6.43125 15C6.60458 15.4833 6.79958 15.9283 7.01625 16.335C7.70625 17.6287 8.53875 18.3975 9.375 18.6538V15H6.43125ZM6.65875 18.09C6.37959 17.7216 6.13005 17.3316 5.9125 16.9237C5.58879 16.3077 5.32105 15.6639 5.1125 15H2.81875C3.77621 16.3767 5.1091 17.4492 6.65875 18.09ZM4.775 13.75C4.54929 12.7225 4.41874 11.6764 4.385 10.625H1.2725C1.35 11.7375 1.63625 12.7913 2.0925 13.75H4.775ZM13.3413 18.09C14.8909 17.4492 16.2238 16.3767 17.1812 15H14.8875C14.6789 15.6639 14.4112 16.3077 14.0875 16.9237C13.8699 17.3316 13.6204 17.7216 13.3413 18.09ZM10.625 15V18.6538C11.4625 18.3988 12.2937 17.6287 12.9838 16.335C13.2004 15.9292 13.3954 15.4842 13.5687 15H10.625ZM15.225 13.75H17.9075C18.3638 12.7913 18.65 11.7375 18.7275 10.625H15.615C15.5813 11.6764 15.4507 12.7225 15.225 13.75ZM18.7275 9.375C18.6505 8.29146 18.3724 7.23174 17.9075 6.25H15.225C15.4425 7.2275 15.5775 8.27875 15.615 9.375H18.7275ZM14.0875 3.07625C14.3963 3.65625 14.665 4.30125 14.8875 5H17.1812C16.2238 3.62332 14.8909 2.55076 13.3413 1.91C13.6138 2.265 13.8638 2.6575 14.0875 3.07625ZM13.5687 5C13.4065 4.54136 13.211 4.09518 12.9838 3.665C12.2937 2.37125 11.4625 1.6025 10.625 1.34625V5H13.5687Z"
                          fill="#2C78C8" />
                      </g>
                      <defs>
                        <clipPath id="clip0_1219_3096">
                          <rect width="20" height="20" fill="white" />
                        </clipPath>
                      </defs>
                    </svg>Action History
                  </button>
                </td>
                <td>CloudIP</td>
              </tr>
              <tr>
                <td>Full</td>
                <td>Backup Plan</td>
                <td>Michigan</td>
                <td></td>
                <td>John</td>
                <td>Doe</td>
                <td>email@gmail.com</td>
                <td>+1 000000</td>
                <td>
                  <button class="btn btn-outline-primary">
                    <svg class="icon-word" width="20" height="20" viewBox="0 0 20 20" fill="none"
                      xmlns="http://www.w3.org/2000/svg">
                      <g clip-path="url(#clip0_1219_3096)">
                        <path
                          d="M0 10C0 7.34784 1.05357 4.8043 2.92893 2.92893C4.8043 1.05357 7.34784 0 10 0C12.6522 0 15.1957 1.05357 17.0711 2.92893C18.9464 4.8043 20 7.34784 20 10C20 12.6522 18.9464 15.1957 17.0711 17.0711C15.1957 18.9464 12.6522 20 10 20C7.34784 20 4.8043 18.9464 2.92893 17.0711C1.05357 15.1957 0 12.6522 0 10ZM9.375 1.34625C8.5375 1.60125 7.70625 2.37125 7.01625 3.665C6.78904 4.09518 6.59352 4.54136 6.43125 5H9.375V1.34625ZM5.1125 5C5.32105 4.3361 5.58879 3.69226 5.9125 3.07625C6.13005 2.6684 6.37959 2.27843 6.65875 1.91C5.11018 2.55259 3.77777 3.62477 2.81875 5H5.1125ZM4.385 9.375C4.4225 8.27875 4.5575 7.2275 4.775 6.25H2.0925C1.62756 7.23174 1.34949 8.29146 1.2725 9.375H4.385ZM6.05875 6.25C5.81289 7.27475 5.67134 8.32175 5.63625 9.375H9.375V6.25H6.05875ZM10.625 6.25V9.375H14.3625C14.3278 8.32179 14.1867 7.2748 13.9412 6.25H10.625ZM5.6375 10.625C5.67218 11.6782 5.81331 12.7252 6.05875 13.75H9.375V10.625H5.6375ZM10.625 10.625V13.75H13.9412C14.175 12.7937 14.3238 11.74 14.3638 10.625H10.625ZM6.43125 15C6.60458 15.4833 6.79958 15.9283 7.01625 16.335C7.70625 17.6287 8.53875 18.3975 9.375 18.6538V15H6.43125ZM6.65875 18.09C6.37959 17.7216 6.13005 17.3316 5.9125 16.9237C5.58879 16.3077 5.32105 15.6639 5.1125 15H2.81875C3.77621 16.3767 5.1091 17.4492 6.65875 18.09ZM4.775 13.75C4.54929 12.7225 4.41874 11.6764 4.385 10.625H1.2725C1.35 11.7375 1.63625 12.7913 2.0925 13.75H4.775ZM13.3413 18.09C14.8909 17.4492 16.2238 16.3767 17.1812 15H14.8875C14.6789 15.6639 14.4112 16.3077 14.0875 16.9237C13.8699 17.3316 13.6204 17.7216 13.3413 18.09ZM10.625 15V18.6538C11.4625 18.3988 12.2937 17.6287 12.9838 16.335C13.2004 15.9292 13.3954 15.4842 13.5687 15H10.625ZM15.225 13.75H17.9075C18.3638 12.7913 18.65 11.7375 18.7275 10.625H15.615C15.5813 11.6764 15.4507 12.7225 15.225 13.75ZM18.7275 9.375C18.6505 8.29146 18.3724 7.23174 17.9075 6.25H15.225C15.4425 7.2275 15.5775 8.27875 15.615 9.375H18.7275ZM14.0875 3.07625C14.3963 3.65625 14.665 4.30125 14.8875 5H17.1812C16.2238 3.62332 14.8909 2.55076 13.3413 1.91C13.6138 2.265 13.8638 2.6575 14.0875 3.07625ZM13.5687 5C13.4065 4.54136 13.211 4.09518 12.9838 3.665C12.2937 2.37125 11.4625 1.6025 10.625 1.34625V5H13.5687Z"
                          fill="#2C78C8" />
                      </g>
                      <defs>
                        <clipPath id="clip0_1219_3096">
                          <rect width="20" height="20" fill="white" />
                        </clipPath>
                      </defs>
                    </svg>Action History
                  </button>
                </td>
                <td>CloudIP</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </section>
    <!-- end Devices Management -->

    <!-- Scan Devices -->
    <section id="scan-devices">
      <div class="header">
        <h2 class="title">Scan Devices</h2>
        <div class="more-icon-box">
          <svg class="more-icon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
            stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round"
              d="M12 6.75a.75.75 0 1 1 0-1.5.75.75 0 0 1 0 1.5ZM12 12.75a.75.75 0 1 1 0-1.5.75.75 0 0 1 0 1.5ZM12 18.75a.75.75 0 1 1 0-1.5.75.75 0 0 1 0 1.5Z" />
          </svg>

          <div id="popup-menu" class="icon-dropdown-menu">
            <ul>
              <li><a class="action-item no-underline" href="#">Delete Widget</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="content-wrapper">
        <div class="scan-fillter">
          <div class="filters">
            <div class="filter-infor">
              <div class="hostname">
                <label class="input">
                  <input class="input__field" type="text" />
                  <span class="input__label">Hostname</span>
                </label>
              </div>
              <div class="hostname">
                <label class="input">
                  <input class="input__field" type="text" />
                  <span class="input__label">Netmask</span>
                </label>
              </div>
            </div>
            <div class="d-flex align-items-center filter-range">
              <div class="iprange">
                <span class="me-2 scan-head-title">IP Range:</span>
                <input type="text" class="form-control me-2">
              </div>
              <div class="scan-to">
                <span class="me-2 scan-head-title">To:</span>
                <input type="text" class="form-control me-2">
              </div>
            </div>
          </div>
          <div class="text-end">
            <button class="btn btn-primary w-100"><img src="/custom_apps/myappcustom/img/play.svg">Start</button>
          </div>
        </div>
        <div class="scan-table">
          <table class="table-striped">
            <thead>
              <tr>
                <th>Device Type</th>
                <th>OS</th>
                <th>MAC Address</th>
                <th>Hostname</th>
                <th>IP Address Type</th>
                <th>Gateway IP Address</th>
                <th>Netmask</th>
                <th>DNS 1 IP Address</th>
                <th>DNS 2 IP Address</th>
                <th>IT Management</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Desktop</td>
                <td>Windows</td>
                <td>00:1A:2B:3C:4D:5E</td>
                <td>desktop-john</td>
                <td>DHCP</td>
                <td>192.168.1.1</td>
                <td>255.255.255.0</td>
                <td>1.1.1.1</td>
                <td>1.0.0.1</td>
                <td>CloudIP IT Group</td>
              </tr>
              <tr>
                <td>Desktop</td>
                <td>Windows</td>
                <td>00:1A:2B:3C:4D:5E</td>
                <td>desktop-john</td>
                <td>DHCP</td>
                <td>192.168.1.1</td>
                <td>255.255.255.0</td>
                <td>1.1.1.1</td>
                <td>1.0.0.1</td>
                <td>CloudIP IT Group</td>
              </tr>
              <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </section>
    <!-- end Scan Devices -->

    <!-- Restore my data -->
    <section id="restore-data">
      <div class="restore-container">
        <div class="header">
          <h2 class="title">Restore my data</h2>
          <div class="more-icon-box">
            <svg class="more-icon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
              stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round"
                d="M12 6.75a.75.75 0 1 1 0-1.5.75.75 0 0 1 0 1.5ZM12 12.75a.75.75 0 1 1 0-1.5.75.75 0 0 1 0 1.5ZM12 18.75a.75.75 0 1 1 0-1.5.75.75 0 0 1 0 1.5Z" />
            </svg>

            <div id="popup-menu" class="icon-dropdown-menu">
              <ul>
                <li><a class="action-item no-underline" href="#">Delete Widget</a></li>
              </ul>
            </div>
          </div>
        </div>

        <div class="options-container">
          <div class="source-option">
            <label class="option-label">Source</label>
            <div class="dropdown-container-backup">
              <div class="dropdown-container">
                <div class="dropdown-button">
                  <span id="dropdown-button-text">Backup</span>
                </div>
                <ul class="dropdown-list">
                  <li data-value="backup"><a href="#">Backup</a></li>
                  <li data-value="duplication"><a href="#">Duplication</a></li>
                  <li data-value="immutability"><a href="#">Immutability</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="data-option">
            <label class="option-label">Data choice</label>
            <div class="dropdown-container-restore">
              <div class="dropdown-container">
                <div class="dropdown-button">
                  <span id="dropdown-button-text">Select data to restore</span>
                </div>
                <ul class="dropdown-list">
                  <li data-value="user-security"><a href="#">Select data to restore</a></li>
                  <li data-value="vpn-security"><a href="#">Bare Metal Restore</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="choose-file-button">
            <label for="file-upload" class="custom-file-upload">
              <svg width="18" height="14" viewBox="0 0 18 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M7.33366 0.333496H2.33366C1.41699 0.333496 0.675326 1.0835 0.675326 2.00016L0.666992 12.0002C0.666992 12.9168 1.41699 13.6668 2.33366 13.6668H15.667C16.5837 13.6668 17.3337 12.9168 17.3337 12.0002V3.66683C17.3337 2.75016 16.5837 2.00016 15.667 2.00016H9.00033L7.33366 0.333496Z"
                  fill="white" />
              </svg>
              Choose files
            </label>
            <input type="file" id="file-upload" name="file-upload">
          </div>
        </div>

        <h3 class="devices-title">Select Devices to restore</h3>
        <div class="table-container">
          <table class="table-striped">
            <thead>
              <tr>
                <th><input type="checkbox"></th>
                <th>Device Type</th>
                <th>OS</th>
                <th>MAC Address</th>
                <th>Hostname</th>
                <th>IP Address Type</th>
                <th>Gateway IP Address</th>
                <th>Netmask</th>
                <th>DNS 1 IP Address</th>
                <th>DNS 2 IP Address</th>
                <th>IT Management</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><input type="checkbox"></td>
                <td>Desktop</td>
                <td>Windows</td>
                <td>00:1A:2B:3C:4D:5E</td>
                <td>desktop-john</td>
                <td>DHCP</td>
                <td>192.168.1.1</td>
                <td>255.255.255.0</td>
                <td>1.1.1.1</td>
                <td>1.0.0.1</td>
                <td>CloudIP IT Group</td>
              </tr>
              <tr>
                <td><input type="checkbox"></td>
                <td>Desktop</td>
                <td>Windows</td>
                <td>00:1A:2B:3C:4D:5E</td>
                <td>desktop-john</td>
                <td>DHCP</td>
                <td>192.168.1.1</td>
                <td>255.255.255.0</td>
                <td>1.1.1.1</td>
                <td>1.0.0.1</td>
                <td>CloudIP IT Group</td>
              </tr>
              <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
            </tbody>
          </table>
        </div>


        <div class="footer">
          <button class="restore-button">Restore</button>
        </div>
      </div>
    </section>
    <!-- end Restore my data -->

    <!-- Locations -->
    <section id="location">
      <div class="locations-container">
        <div class="header">
          <h2 class="title">Locations</h2>
          <div class="more-icon-box">
            <svg class="more-icon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
              stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round"
                d="M12 6.75a.75.75 0 1 1 0-1.5.75.75 0 0 1 0 1.5ZM12 12.75a.75.75 0 1 1 0-1.5.75.75 0 0 1 0 1.5ZM12 18.75a.75.75 0 1 1 0-1.5.75.75 0 0 1 0 1.5Z" />
            </svg>

            <div id="popup-menu" class="icon-dropdown-menu">
              <ul>
                <li><a class="action-item no-underline" href="#">Delete Widget</a></li>
              </ul>
            </div>
          </div>
        </div>

        <div class="locations-list">
          <div class="locations-group">
            <div class="location-list-action">
              <h3 class="group-title">My backup locations</h3>
              <button class="add-location-button" id="add-location-button">
                <svg width="14" height="14" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                  stroke-width="1.5" stroke="currentColor" class="add-icon">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                </svg>
                Add location to my plan
              </button>
            </div>
            <!-- popub -->
            <div id="popub-add-location">
              <div class="popub-header">
                <h4>Add Locations</h4>
                <div class="icon-close-popub" id="closePopupButton">
                  <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_399_4765)">
                      <path
                        d="M19.7913 6.67725L18.3226 5.2085L12.4997 11.0314L6.67676 5.2085L5.20801 6.67725L11.0309 12.5002L5.20801 18.3231L6.67676 19.7918L12.4997 13.9689L18.3226 19.7918L19.7913 18.3231L13.9684 12.5002L19.7913 6.67725Z"
                        fill="#4E84C1" />
                    </g>
                    <defs>
                      <clipPath id="clip0_399_4765">
                        <rect width="25" height="25" fill="white" />
                      </clipPath>
                    </defs>
                  </svg>
                </div>
              </div>
              <div class="location-des">
                <p>Search a location to add to your plan</p>
              </div>
              <div class="form-location">
                <form action="">
                  <div class="row row-location">
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label style="color: transparent;" for="backupPlan">a</label>
                        <div class="hostname">
                          <label class="input">
                            <input class="input__field" type="text" placeholder="US" />
                            <span class="input__label">Country</span>
                          </label>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group">
                        <div class="search-dropdown-manual">
                          <label class="label-drop" for="label-drop">State</label>
                          <div class="dropdown-container">
                            <div class="dropdown-button">
                              <span id="dropdown-button-text">MI</span>
                            </div>
                            <ul class="dropdown-list">
                              <li data-value="mi"><a href="#">MI</a></li>
                              <li data-value="il"><a href="#">IL</a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label style="color: transparent;" for="backupPlan">a</label>
                        <div class="hostname">
                          <label class="input">
                            <input class="input__field" type="text" placeholder="" />
                            <span class="input__label">Zipcode</span>
                          </label>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label style="color: transparent;" for="backupPlan">a</label>
                        <div class="hostname">
                          <label class="input">
                            <input class="input__field" type="text" placeholder="" />
                            <span class="input__label">City</span>
                          </label>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group">
                        <div class="search-dropdown-manual">
                          <label class="label-drop" for="label-drop">Access Plan Capability</label>
                          <div class="dropdown-container">
                            <div class="dropdown-button">
                              <span id="dropdown-button-text">Backup</span>
                            </div>
                            <ul class="dropdown-list">
                              <li data-value="incremental"><a href="#">MI</a></li>
                              <li data-value="full"><a href="#">Full</a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="label-drop" for="label-drop">Compliances</label>
                        <div class="compliance-checkbox-container">
                          <div class="compliance-checkbox-item">
                            <input type="checkbox" class="compliance-checkbox" id="iso27001">
                            <label for="iso27001">ISO 27001</label>
                          </div>
                          <div class="compliance-checkbox-item">
                            <input type="checkbox" class="compliance-checkbox" id="soc2" checked>
                            <label for="soc2">SOC II Type 2</label>
                          </div>
                          <div class="compliance-checkbox-item">
                            <input type="checkbox" class="compliance-checkbox" id="pci">
                            <label for="pci">PCI</label>
                          </div>
                          <div class="compliance-checkbox-item">
                            <input type="checkbox" class="compliance-checkbox" id="hipaa" checked>
                            <label for="hipaa">HIPAA</label>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="search-location">
                    <button>
                      <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M10.9167 9.66667H10.2583L10.025 9.44167C10.8417 8.49167 11.3333 7.25833 11.3333 5.91667C11.3333 2.925 8.90833 0.5 5.91667 0.5C2.925 0.5 0.5 2.925 0.5 5.91667C0.5 8.90833 2.925 11.3333 5.91667 11.3333C7.25833 11.3333 8.49167 10.8417 9.44167 10.025L9.66667 10.2583V10.9167L13.8333 15.075L15.075 13.8333L10.9167 9.66667ZM5.91667 9.66667C3.84167 9.66667 2.16667 7.99167 2.16667 5.91667C2.16667 3.84167 3.84167 2.16667 5.91667 2.16667C7.99167 2.16667 9.66667 3.84167 9.66667 5.91667C9.66667 7.99167 7.99167 9.66667 5.91667 9.66667Z"
                          fill="#2C78C8" />
                      </svg>
                      search
                    </button>
                  </div>
                  <table class="table-striped location-popub-table">
                    <thead>
                      <tr>
                        <td><input type="checkbox"></td>
                        <th>Country</th>
                        <th>State</th>
                        <th>City</th>
                        <th>Zipcode</th>
                        <th>Compliances</th>
                        <th>Access Plan Capability</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td><input type="checkbox"></td>
                        <td>US</td>
                        <td>MI</td>
                        <td>South Bend</td>
                        <td>48075</td>
                        <td>HIPAA, SOC II</td>
                        <td>Backup</td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                    </tbody>
                  </table>
                  <div class="button-location-popub">
                    <button id="reuqest-new-location">Request New Location</button>
                    <button id="add-new-location">Add location</button>
                  </div>
                </form>
              </div>
            </div>
            <div id="popub-request-location">
              <div class="popub-header">
                <h4> 
                  <span><svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                      xmlns="http://www.w3.org/2000/svg">
                      <path d="M16 7H3.83L9.42 1.41L8 0L0 8L8 16L9.41 14.59L3.83 9H16V7Z" fill="#4E84C1" />
                    </svg>
                  </span>
                  Request New Location</h4>
                <div class="icon-close-popub" id="closePopupButton">
                  <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_399_4765)">
                      <path
                        d="M19.7913 6.67725L18.3226 5.2085L12.4997 11.0314L6.67676 5.2085L5.20801 6.67725L11.0309 12.5002L5.20801 18.3231L6.67676 19.7918L12.4997 13.9689L18.3226 19.7918L19.7913 18.3231L13.9684 12.5002L19.7913 6.67725Z"
                        fill="#4E84C1" />
                    </g>
                    <defs>
                      <clipPath id="clip0_399_4765">
                        <rect width="25" height="25" fill="white" />
                      </clipPath>
                    </defs>
                  </svg>
                </div>
              </div>
              <div class="location-des">
                <p>You will send an email request for new locationn</p>
              </div>
              <div class="form-location">
                <form action="">
                  <div class="row row-location">
                    <div class="col-lg-4">
                      <div class="form-group">
                        <div class="hostname location">
                          <label class="input">
                            <input class="input__field" type="text" placeholder="US" />
                            <span class="input__label">Country</span>
                          </label>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group">
                        <div class="hostname">
                          <label class="input">
                            <input class="input__field" type="text" placeholder="" />
                            <span class="input__label">State</span>
                          </label>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group">
                        <div class="hostname">
                          <label class="input">
                            <input class="input__field" type="text" placeholder="" />
                            <span class="input__label">Zipcode</span>
                          </label>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label style="color: transparent;" for="backupPlan">a</label>
                        <div class="hostname">
                          <label class="input">
                            <input class="input__field" type="text" placeholder="" />
                            <span class="input__label">City</span>
                          </label>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group">
                        <div class="search-dropdown-manual">
                          <label class="label-drop" for="label-drop">Access Plan Capability</label>
                          <div class="dropdown-container">
                            <div class="dropdown-button">
                              <span id="dropdown-button-text">Backup</span>
                            </div>
                            <ul class="dropdown-list">
                              <li data-value="incremental"><a href="#">Backup</a></li>
                              <li data-value="full"><a href="#">Full</a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="label-drop" for="label-drop">Compliances</label>
                        <div class="compliance-checkbox-container">
                          <div class="compliance-checkbox-item">
                            <input type="checkbox" class="compliance-checkbox" id="iso27001">
                            <label for="iso27001">ISO 27001</label>
                          </div>
                          <div class="compliance-checkbox-item">
                            <input type="checkbox" class="compliance-checkbox" id="soc2" checked>
                            <label for="soc2">SOC II Type 2</label>
                          </div>
                          <div class="compliance-checkbox-item">
                            <input type="checkbox" class="compliance-checkbox" id="pci">
                            <label for="pci">PCI</label>
                          </div>
                          <div class="compliance-checkbox-item">
                            <input type="checkbox" class="compliance-checkbox" id="hipaa" checked>
                            <label for="hipaa">HIPAA</label>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-8">
                      <div class="form-group">
                        <div class="hostname email-address">
                          <label class="input">
                            <input class="input__field" type="text" placeholder="" />
                            <span class="input__label">Email Address</span>
                          </label>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-12">
                      <div class="form-group">
                        <div class="hostname comment">
                          <label class="input">
                            <textarea class="input__field_text" type="text" rows="6"></textarea>
                            <span class="input__label">Comments</span>
                          </label>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="button-location-popub">
                    <button>Send</button>
                  </div>
                </form>
              </div>
            </div>
            <!-- end popub -->
            <div class="table-container">
              <table class="table-striped">
                <thead>
                  <tr>
                    <th>Country</th>
                    <th>State</th>
                    <th>City</th>
                    <th>Zipcode</th>
                    <th>Compliances</th>
                    <th>Access Plan Capability</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>US</td>
                    <td>MI</td>
                    <td>South Bend</td>
                    <td>48075</td>
                    <td>ISO 27001, HIPAA, SOC II</td>
                    <td>Backup - Duplication - Immutability</td>
                  </tr>
                  <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <div class="locations-group">
            <h3 class="group-title">Available locations</h3>
            <div class="table-container">
              <table class="table-striped">
                <thead>
                  <tr>
                    <th>Country</th>
                    <th>State</th>
                    <th>City</th>
                    <th>Zipcode</th>
                    <th>Compliances</th>
                    <th>Access Plan Capability</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>US</td>
                    <td>MI</td>
                    <td>South Bend</td>
                    <td>48075</td>
                    <td>ISO 27001, HIPAA, SOC II</td>
                    <td>Backup - Duplication - Immutability</td>
                  </tr>
                  <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>

      </div>
    </section>
    <!-- end Locations -->

    <!-- Security -->
    <section id="security">
      <div class="security-container">
        <div class="header">
          <h2 class="title">Security</h2>
          <div class="more-icon-box">
            <svg class="more-icon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
              stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round"
                d="M12 6.75a.75.75 0 1 1 0-1.5.75.75 0 0 1 0 1.5ZM12 12.75a.75.75 0 1 1 0-1.5.75.75 0 0 1 0 1.5ZM12 18.75a.75.75 0 1 1 0-1.5.75.75 0 0 1 0 1.5Z" />
            </svg>

            <div id="popup-menu" class="icon-dropdown-menu">
              <ul>
                <li><a class="action-item no-underline" href="#">Delete Widget</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="security-button">
          <div class="dropdown-container">
            <div class="dropdown-button">
              <span id="dropdown-button-text">User Security</span>
            </div>
            <ul class="dropdown-list">
              <li data-value="user-security"><a href="#">User Security</a></li>
              <li data-value="vpn-security"><a href="#">VPN Security</a></li>
            </ul>
          </div>
        </div>
        <div class="settings-grid">
          <div class="gird-item-security-first">
            <div class="setting-item">
              <label class="setting-label">Password</label>
              <button class="reset-button">Password reset</button>
            </div>
            <div class="setting-item">
              <label class="setting-label">2FA authentification</label>
              <div class="switch-container">
                <span class="email-text">em...@email.com</span>
                <label class="switch">
                  <input type="checkbox" checked>
                  <span class="slider round"></span>
                </label>
              </div>
            </div>
          </div>
          <div class="gird-item-security">
            <div class="setting-item">
              <label class="setting-label">Secure code device</label>
              <div class="switch-container">
                <span class="phone-number">+1 000...00</span>
                <label class="switch">
                  <input type="checkbox" checked>
                  <span class="slider round"></span>
                </label>
              </div>
            </div>
            <div class="setting-item" style="margin-top: 14px;">
              <label class="setting-label">Fingerprint access</label>
              <label class="switch">
                <input type="checkbox">
                <span class="slider round"></span>
              </label>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- end Security -->

    <!-- Connectivity -->
    <section id="connectivity">
      <div class="connectivity-container">
        <div class="header">
          <h2 class="title">Connectivity</h2>
          <div class="more-icon-box">
            <svg class="more-icon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
              stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round"
                d="M12 6.75a.75.75 0 1 1 0-1.5.75.75 0 0 1 0 1.5ZM12 12.75a.75.75 0 1 1 0-1.5.75.75 0 0 1 0 1.5ZM12 18.75a.75.75 0 1 1 0-1.5.75.75 0 0 1 0 1.5Z" />
            </svg>

            <div id="popup-menu" class="icon-dropdown-menu">
              <ul>
                <li><a class="action-item no-underline" href="#">Delete Widget</a></li>
              </ul>
            </div>
          </div>
        </div>

        <div class="table-container">
          <table class="table-striped">
            <thead>
              <tr>
                <th>Type</th>
                <th>Data type</th>
                <th>Device type</th>
                <th>Connectivity type</th>
                <th>Protocol</th>
                <th>Security type</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>File</td>
                <td>User files</td>
                <td>desktop, Laptop, mobile</td>
                <td>Internet/VPN</td>
                <td>HTTPS (S3 API)</td>
                <td>SSL/TLS,VPN</td>
                <td><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                      d="M9 5H11V7H9V5ZM9 9H11V15H9V9ZM10 0C4.48 0 0 4.48 0 10C0 15.52 4.48 20 10 20C15.52 20 20 15.52 20 10C20 4.48 15.52 0 10 0ZM10 18C5.59 18 2 14.41 2 10C2 5.59 5.59 2 10 2C14.41 2 18 5.59 18 10C18 14.41 14.41 18 10 18Z"
                      fill="#4E84C1" />
                  </svg>
                </td>
              </tr>
              <tr>
                <td>Database</td>
                <td>Databases</td>
                <td>Server</td>
                <td>Direct Database Connectivity (via VPN)</td>
                <td>HTTPS (S3 API)</td>
                <td>SSL/TLS,VPN</td>
                <td><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                      d="M9 5H11V7H9V5ZM9 9H11V15H9V9ZM10 0C4.48 0 0 4.48 0 10C0 15.52 4.48 20 10 20C15.52 20 20 15.52 20 10C20 4.48 15.52 0 10 0ZM10 18C5.59 18 2 14.41 2 10C2 5.59 5.59 2 10 2C14.41 2 18 5.59 18 10C18 14.41 14.41 18 10 18Z"
                      fill="#4E84C1" />
                  </svg>
                </td>
              </tr>
              <tr>
                <td>File</td>
                <td>Media Files</td>
                <td>desktop, Laptop, mobile</td>
                <td>Internet/VPN</td>
                <td>HTTPS (S3 API)</td>
                <td>SSL/TLS,VPN</td>
                <td><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                      d="M9 5H11V7H9V5ZM9 9H11V15H9V9ZM10 0C4.48 0 0 4.48 0 10C0 15.52 4.48 20 10 20C15.52 20 20 15.52 20 10C20 4.48 15.52 0 10 0ZM10 18C5.59 18 2 14.41 2 10C2 5.59 5.59 2 10 2C14.41 2 18 5.59 18 10C18 14.41 14.41 18 10 18Z"
                      fill="#4E84C1" />
                  </svg>
                </td>
              </tr>
              <tr>
                <td>File</td>
                <td>Configuration Files</td>
                <td>Desktop, Laptop, Server</td>
                <td>Internet/VPN</td>
                <td>HTTPS (S3 API)</td>
                <td>SSL/TLS,VPN</td>
                <td><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                      d="M9 5H11V7H9V5ZM9 9H11V15H9V9ZM10 0C4.48 0 0 4.48 0 10C0 15.52 4.48 20 10 20C15.52 20 20 15.52 20 10C20 4.48 15.52 0 10 0ZM10 18C5.59 18 2 14.41 2 10C2 5.59 5.59 2 10 2C14.41 2 18 5.59 18 10C18 14.41 14.41 18 10 18Z"
                      fill="#4E84C1" />
                  </svg>
                </td>
              </tr>
              <tr>
                <td>File</td>
                <td>System Backups VMs</td>
                <td>Server, Desktop</td>
                <td>VPN/Internal Network</td>
                <td>HTTPS (S3 API)</td>
                <td>SSL/TLS,VPN</td>
                <td><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                      d="M9 5H11V7H9V5ZM9 9H11V15H9V9ZM10 0C4.48 0 0 4.48 0 10C0 15.52 4.48 20 10 20C15.52 20 20 15.52 20 10C20 4.48 15.52 0 10 0ZM10 18C5.59 18 2 14.41 2 10C2 5.59 5.59 2 10 2C14.41 2 18 5.59 18 10C18 14.41 14.41 18 10 18Z"
                      fill="#4E84C1" />
                  </svg>
                </td>
              </tr>
              <tr class="advanced-application">
                <td>Advanced<br>Application</td>
                <td>Bare Metal Backups</td>
                <td>Desktop, Laptop, Server</td>
                <td>VPN/Internal Network</td>
                <td>HTTPS (S3 API, PXE, iSCSI)</td>
                <td>SSL/TLS,VPN</td>
                <td><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                      d="M9 5H11V7H9V5ZM9 9H11V15H9V9ZM10 0C4.48 0 0 4.48 0 10C0 15.52 4.48 20 10 20C15.52 20 20 15.52 20 10C20 4.48 15.52 0 10 0ZM10 18C5.59 18 2 14.41 2 10C2 5.59 5.59 2 10 2C14.41 2 18 5.59 18 10C18 14.41 14.41 18 10 18Z"
                      fill="#4E84C1" />
                  </svg>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </section>
    <!-- end Connectivity -->

    <!-- Policies -->
    <section id="policies">
      <div class="policies-container">
        <div class="header">
          <h2 class="title">Policies</h2>
          <div class="more-icon-box">
            <svg class="more-icon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
              stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round"
                d="M12 6.75a.75.75 0 1 1 0-1.5.75.75 0 0 1 0 1.5ZM12 12.75a.75.75 0 1 1 0-1.5.75.75 0 0 1 0 1.5ZM12 18.75a.75.75 0 1 1 0-1.5.75.75 0 0 1 0 1.5Z" />
            </svg>

            <div id="popup-menu" class="icon-dropdown-menu">
              <ul>
                <li><a class="action-item no-underline" href="#">Delete Widget</a></li>
              </ul>
            </div>
          </div>
        </div>

        <div class="header">
          <h3 class="subtitle">Global retention policy</h3>
          <div class="dropdown-container-policies">
            <div class="dropdown-container">
              <div class="dropdown-button">
                <span id="dropdown-button-text">Retention Policies</span>
              </div>
              <ul class="dropdown-list">
                <li data-value="retention-policies"><a href="#">Retention Policies</a></li>
                <li data-value="priority-retention-policies"><a href="#">Priority policies and groups</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="table-container">
          <table>
            <thead>
              <tr>
                <td><input type="checkbox"></td>
                <th>Device Type</th>
                <th>OS</th>
                <th>MAC Address</th>
                <th>Hostname</th>
                <th>IP Address Type</th>
                <th>Gateway IP Address</th>
                <th>Netmask</th>
                <th>DNS 1 IP Address</th>
                <th>DNS 2 IP Address</th>
                <th>IT Management</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><input type="checkbox"></td>
                <td>Desktop</td>
                <td>Windows</td>
                <td>00:1A:2B:3C:4D:5E</td>
                <td>desktop-john</td>
                <td>DHCP</td>
                <td>192.168.1.1</td>
                <td>255.255.255.0</td>
                <td>1.1.1.1</td>
                <td>1.0.0.1</td>
                <td>CloudIP IT Group</td>
              </tr>
              <tr>
                <td><input type="checkbox"></td>
                <td>Desktop</td>
                <td>Windows</td>
                <td>00:1A:2B:3C:4D:5E</td>
                <td>desktop-john</td>
                <td>DHCP</td>
                <td>192.168.1.1</td>
                <td>255.255.255.0</td>
                <td>1.1.1.1</td>
                <td>1.0.0.1</td>
                <td>CloudIP IT Group</td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="footer">
          <div class="dropdown-container-footer">
            <div class="security-button">
              <div class="dropdown-container">
                <div class="dropdown-button">
                  <span id="dropdown-button-text">30 days</span>
                </div>
                <ul class="dropdown-list">
                  <li data-value="60days"><a href="#">30 days</a></li>
                  <li data-value="30days"><a href="#">60 days</a></li>
                </ul>
              </div>
            </div>
          </div>
          <button class="apply-button">Apply</button>
        </div>

      </div>
    </section>
    <!-- end Policies -->
  </div>
</div>