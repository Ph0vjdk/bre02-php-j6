<?php
require "connexion.php";
$query = $db->prepare('SELECT * FROM users WHERE id = :id');
$parameters = [
    'id' => $_GET['id']
];
$query->execute($parameters);
$user = $query->fetchall(PDO::FETCH_ASSOC);
// echo "<pre>";
// var_dump($users.id);
// echo "</pre>";
?>