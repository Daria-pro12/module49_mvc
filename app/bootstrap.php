<?php

namespace App;
use App\core\Route;

session_start();

require_once 'core' . DIRECTORY_SEPARATOR . 'config' . DIRECTORY_SEPARATOR . 'config.php';
require_once dirname(__DIR__, 1) . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';

Route::start();