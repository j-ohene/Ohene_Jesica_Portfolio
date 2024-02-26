<?php
$dsn = "mysql:host=localhost;dbname=vkmopl00_portfolio;charset=utf8mb4";
try {
$connection = new PDO($dsn, 'vkmopl00_johene', 'vkmopl00_portfolio');
} catch (Exception $e) {
  error_log($e->getMessage());
  exit('unable to connect');
}
?>