<?php
//email and password
//Make sure the cookie can't be read from any other source than http requests (no js)
ini_set('session.cookie_httponly', 1);
session_start();
$_SESSION['user_name'] = 'Lisa';
header('Location: /csfrProfile');
exit();