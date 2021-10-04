<?php
try{
  $sDatabaseUserName = 'root';
  $sDatabasePassword = 'root';
  $sDatabaseConnection = "mysql:host=localhost; dbname=its_aug_30; charset=utf8mb4";

  // PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
  $aDatabaseOptions = array(
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
   // PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ // Array with object
    /*
    [{"id":"1","name":"A","email":"@A","password":"passA"},{"id":"2","name":"B","email":"@B","password":"passB"}]
    */
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    /*
    [{"id":"1","name":"A","email":"@A","password":"passA"},{"id":"2","name":"B","email":"@B","password":"passB"}]
    */
    //PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_NUM
    // [["1","A","@A","passA"],["2","B","@B","passB"]]
  );
  $db = new PDO( $sDatabaseConnection, $sDatabaseUserName, $sDatabasePassword, $aDatabaseOptions );
}catch( PDOException $e){
  echo '{"status":0,"message":"cannot connect to database"}';
  exit();
}