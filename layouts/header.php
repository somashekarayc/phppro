<?php
define('__ROOT__', dirname(dirname(__FILE__)));
require_once(__ROOT__.'/config.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>main index</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
  <div class="container">
    <header class="d-flex justify-content-center py-3">
      <ul class="nav nav-pills">
        <li class="nav-item"><a href="<?= URLROOT ?>/index" class="nav-link active" aria-current="page">Home</a></li>
        <li class="nav-item"><a href="<?= URLROOT ?>/about" class="nav-link">About</a></li>
        <li class="nav-item"><a href="<?= URLROOT ?>/admin/index" class="nav-link">Admin index</a></li>
        <li class="nav-item"><a href="<?= URLROOT ?>/admin/about" class="nav-link">Admin Abput</a></li>
      </ul>
    </header>
  </div>