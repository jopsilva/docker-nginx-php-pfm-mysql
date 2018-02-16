<?php

$dbuser = $_ENV['MYSQL_USER'];
$dbpass = $_ENV['MYSQL_PASS'];

try {
    $pdo = new PDO("mysql:host=mysql;dbname=son_financas", $dbuser, $dbpass);
<<<<<<< HEAD

    echo "Connection ok";
=======
    $statement = $pdo->prepare("SELECT * FROM category");
    $statement->execute();
    $posts = $statement->fetchAll(PDO::FETCH_OBJ);
    
    echo "<h2>Posts</h2>";
    echo "<ul>";
    foreach ($posts as $post ) {
        echo "<li>".$post->title."</li>";
    }
    echo "</ul>";
>>>>>>> f3e88c1193043f5409d3a3f89dad03c802910cdc

} catch(PDOException $e) {
    echo $e->getMessage();
};
<<<<<<< HEAD
	//phpinfo();
=======
	phpinfo();
>>>>>>> f3e88c1193043f5409d3a3f89dad03c802910cdc

