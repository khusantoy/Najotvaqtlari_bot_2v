<?php

require_once realpath(__DIR__ . "/vendor/autoload.php");

use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

// Database
$server = $_ENV['SERVER'];
$db_user = $_ENV['DB_USER'];
$db_password = $_ENV['DB_PASSWORD'];
$database = $_ENV['DATABASE'];
$db = mysqli_connect($server,$db_user,$db_password,$database);