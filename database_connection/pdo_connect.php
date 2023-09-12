<?php
$dsn = "mysql:server=localhost;Database=eflorist";
$options = [
  PDO::ATTR_EMULATE_PREPARES   => false, 
  PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION, 
  PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, 
];
?>
