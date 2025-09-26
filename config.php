/**
 * Display all errors
 */
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


<?php
/**
 * Parse een .env file waar de instellingen instaan
 */
$env_array = parse_ini_file(dirname(__DIR__, 1) . '/.env');

/**
 * Definieer een aantal constante met de waardes uit je .env file
 */
define('DB_HOST', isset($env_array['DB_HOST']) ? $env_array['DB_HOST'] : '127.0.0.1');
define('DB_NAME', isset($env_array['DB_NAME']) ? $env_array['DB_NAME'] : 'm5prog');
define('DB_USERNAME', isset($env_array['DB_USERNAME']) ? $env_array['DB_USERNAME'] : 'm5prog_user');
define('DB_PASSWORD', isset($env_array['DB_PASSWORD']) ? $env_array['DB_PASSWORD'] : 'wachtwoord');



$connection = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);

<?php
$dsn        = 'mysql:host=' . DB_HOST . ';dbname=' . DB_NAME . ';port=3306';
$connection = new \PDO($dsn, DB_USERNAME, DB_PASSWORD, DB_NAME);


<?php

// haal de configuratie op door het config.php bestand te laden.
require_once('../source/config.php');

// Maak een database verbinding waarbij je de constanten uit de .env file gebruikt
$connection = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);
