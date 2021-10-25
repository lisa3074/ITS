<?php
require_once('./db.php');
//echo 'test';

$user_email = $_POST['user_email'];
$user_password = $_POST['user_password'];
//prepare statements are not secure by themself, if you don't user bincValue or bindParam
//NEVER put a variable into a statement
//ALWAYS useplaceholders
//can be used in all programming languages, just different syntax
//Learn nodejs, php and svelte
$q = $_db->prepare("SELECT * FROM users WHERE user_email = :user_email AND user_password = :user_password ");
$q->bindValue(':user_email', $user_email);
$q->bindValue(':user_password', $user_password);

$q -> execute();
$rows = $q->fetchAll();

header('Content-Type: application/json');

echo json_encode($rows);