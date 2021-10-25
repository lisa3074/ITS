<?php

try{
  $database_user_name = 'root';
  $database_password = 'root';
  $database_connection = 'mysql:host=localhost; dbname=company_sql_injection; charset=utf8mb4';
  
  $database_options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    // PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
  ];
  $_db =  new PDO( $database_connection, $database_user_name, $database_password, $database_options ); 
}catch(Exception $ex){
  http_response_code(500);
  echo "System under maintainance";
}