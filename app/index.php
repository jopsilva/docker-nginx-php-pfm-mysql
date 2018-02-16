<?php

$dbuser = $_ENV['MYSQL_USER'];
$dbpass = $_ENV['MYSQL_PASS'];

try {
    $pdo = new PDO("mysql:host=mysql;dbname=son_financas", $dbuser, $dbpass);

    echo "Connection ok";

} catch(PDOException $e) {
    echo $e->getMessage();
};
	//phpinfo();

