<?php
require_once(__DIR__.'/../db.php');



if(!isset($_SESSION)){
  session_start();
}

 if( ! isset($_POST['user_email']) ){
  header('Location: /login/Put in an email');
  exit();  
}

if( ! isset($_POST['password']) ){
  header('Location: /login/Put in a password');
  exit();  
}

if( ! filter_var($_POST['user_email'], FILTER_VALIDATE_EMAIL) ){
  header('Location: /login/The email you entered was not an email (example: a@a.com)');
  exit();  
}
$password_length = strlen($_POST['password']);
if( $password_length < 6 or $password_length > 50 ){
  header('Location: /login/Your password should be more than 6 and less than 51 characters');
  exit();  
} 

try{
  $q = $db->prepare('SELECT * FROM user WHERE email = :user_email LIMIT 1');
  $q->bindValue(':user_email', strtolower($_POST['user_email']));
  $q->execute();
  $user = $q->fetch();
}catch(PDOException $ex){
  echo $ex;
}

if(!$user){
  header('Location: /login/No such user');
  session_destroy();
  exit();
} 

$peber = "2C5eV0XtQVKrXA==";
$timeStamp = $user['logged_time']; //timestamp
$currentTime = time(); //timestamp
$seconds = $currentTime - $timeStamp;
$logged = $user['logger'] + 1;
//$newTime = date('Y-m-d H:i:s', time()); //datetime

 //If password doesn't match
// if($_POST['password'] != $user['password']){ //no hashing, BAD

    //Take the input password and hash it, add the salt from the database (created onsignup) and the peber from this code base (static variable)
    //cross check it with the password from the db (already hashed), the hashed salt from the db and the peber from this code base
    if( hash("sha256", $_POST['password']).$user['salt'].$peber != $user['password'].$user['salt'].$peber){
  //if logger is more than or equal to 3
  if($user['logger'] >= 3){
    //If 5 minutes HAS passed since last try
    if($seconds > 300) { 
        $set_new_logger = 1;
        require_once(__DIR__.'/postToDb.php');
        header('Location: /login/Password does not match user (logger = 1)');
        exit();
      //If 5 minutes has NOT passed since last try
    }else{
      header('Location: /login/Due to too many faulty logins to your account it has been rendered inactive for 5 minutes. Please try again later.');
      session_destroy();
      exit();
    }
  //if logger is less than 3
  }else{
     $set_new_logger = $logged;
      require_once(__DIR__.'/postToDb.php');
      header("Location: /login/Password does not match user ($logged logged)");
      session_destroy();
      exit();
    }
  }else{  
    if($user['logger'] >= 3 && $seconds < 300) { 
    header('Location: /login/Sorry! Due to too many faulty logins to your account it has been rendered inactive for 5 minutes. Please try again later.');
    session_destroy();
    exit();
  } 
  $_SESSION['email'] = $_POST['user_email'];
  $_SESSION['uuid'] = $user['uuid'];
  $set_new_logger = 0;
  require_once(__DIR__.'/postToDb.php');        
  header("Location: /admin/You are now logged in");
  exit();
}; 
  
  

/* if(bruger IKKE findes){
   exit();
}

If (password ikke matcher bruger){
  If (loggen >= 3 ){
   If (timestamp > 5 min){
      //Sæt logger til 1 og gem nyt timestamp
    }else{
      //Din konto er på pause i 5 min
      //Evt gem timestamp 
    }
  }else{
    //Sæt logger til nuværende log + 1
  }
} else {
  //konto og password matcher)
  if(logger >= 3 && timestamp < 5 sek){
    //Din konto er på pause i 5 min
    //Evt gem timestamp 
    exit();
  }
// Sæt logger til 0
// Gen timestamp
// Log ind
}




 */