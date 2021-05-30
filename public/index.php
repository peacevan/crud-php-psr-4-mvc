<?php

/*
  --------------------------------------------------------------------------
  vendor autoload
  Import composer vendor
 */
require '../vendor/autoload.php';

/*
  | Import configuration
 */
require '../config/config.php';

require '../util/util.php';

use app\Route\Route;

/**
 * Create instance Class Route
 * 
 */
$route = new Route;

/**
 * Call function run
 * runing route
 *  
 */
$route->run();
