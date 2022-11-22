<?php
try {
    $dbh = new PDO('mysql:dbname=docker_review;host=docker_review-review-mysql-1;unix_socket=/tmp/mysql.sock', 'root', 'e2QNqCUd');
    echo '<h1 style="color:yellow">Congratulations</h1>';
} catch (PDOException $e) {
    echo '<h1 style="color:red">Failed<br><p>' . $e->getMessage() . '</p>';
}

