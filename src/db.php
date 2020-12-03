<?php
$dbConnected = false;
$dbConnectionError = null;

try {
  $conn = new PDO("mysql:host=db;dbname=db", 'user', 'secret');
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $dbConnected = true;
} catch(PDOException $e) {
    $dbConnected = false;
    $dbConnectionError = $e->getMessage();
}