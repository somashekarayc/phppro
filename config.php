<?php
require __DIR__ . '/vendor/autoload.php';
//   // DB Params
//   define("DB_HOST", "localhost");
//   define("DB_USER", "root");
//   define("DB_PASS", "");
//   define("DB_NAME", "phppro");

//   // App Root
//   define('APPROOT', dirname(dirname(__FILE__)));
  // URL Root
  define('URLROOT', 'http://localhost/phppro');
  // Site Name
//   define('SITENAME', 'MvcProject');

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->safeLoad();