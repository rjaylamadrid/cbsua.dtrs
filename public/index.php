<?php
session_start();
error_reporting(E_ALL ^ E_NOTICE);

require_once __DIR__ . '/../vendor/autoload.php';
require_once 'routes.php';