<?php
require __DIR__ . '/vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->safeLoad();


// ================================================
function view(String $fileName) : String {
  
  return $_ENV['APP_URL']. '/' . $fileName;
}