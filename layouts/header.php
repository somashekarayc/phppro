<?php
require_once(__DIR__ . '/../config.php');

$baseUrl = $_ENV['APP_URL'];
function isActive($url)
{
$currentUrl = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
  return($url === $currentUrl) ? 'active' : '';
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>main index</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<style>
  *{
  background-color: black;
  color: white;
  }
</style>

<body class="bg-black text-white">
  <div class="container">
    <header class="d-flex justify-content-center py-3">
      <ul class="nav nav-pills">
        <li class="nav-item"><a href="<?= view('index') ?>" class="nav-link <?= isActive("$baseUrl/index") ?>" aria-current="page">Home</a></li>
        <li class="nav-item"><a href="<?= view('about') ?>" class="nav-link <?= isActive("$baseUrl/about") ?>">About</a></li>
        <li class="nav-item"><a href="<?= view('admin/index') ?>" class="nav-link <?= isActive("$baseUrl/admin/index") ?>">Admin index</a></li>
        <li class="nav-item"><a href="<?= view('admin/about') ?>" class="nav-link <?= isActive("$baseUrl/admin/about") ?>">Admin About</a></li>
      </ul>
    </header>
  </div>