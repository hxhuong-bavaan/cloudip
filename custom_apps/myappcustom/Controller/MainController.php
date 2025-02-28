<?php

namespace OCA\MyAppCustom\Controller;

use OCP\AppFramework\Controller;
use OCP\IRequest;

class MainController extends Controller
{

    public function __construct($appName, IRequest $request)
    {
        parent::__construct($appName, $request);
    }

    public function index()
    {
        return 'Hello, Nextcloud 30!';
    }
}
