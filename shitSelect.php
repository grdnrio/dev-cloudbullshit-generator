<?php

$username = 'cloudshit'
$password = 'zExFxhsccr4Jv9tp'

try {
    $conn = new PDO('mysql:host=hyper1.joegardiner.co.uk;dbname=cloudshit', $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}
?>