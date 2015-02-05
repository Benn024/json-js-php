
<?php

$dsn = 'mysql:host=localhost;dbname=testdb';
$username = 'root';
$password = '';
$options = array(
PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',); 
$dbh = new PDO($dsn, $username, $password, $options);

$sql = "SELECT * FROM f1-bilar";

$stmt = $dbh->prepare($sql);
$stmt->execute();
?>