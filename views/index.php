<?php
require_once(__DIR__.'/top.php');
  if( isset($display_error) ){
    echo urldecode($display_error);
    }
    //Make a random salt that should be stored in the db when user signs up. This salt will be unique for the specific user
  /*    $salt = hash("sha256",base64_encode(openssl_random_pseudo_bytes(10)));
     echo "<br>$salt"; */
?>



<form action="/login"
    method="POST">
    <label>Email
        <input type="text"
            placeholder="Email"
            name="user_email" />
    </label>
    <label>Password
        <input type="text"
            placeholder="Password"
            name="password" />
    </label>
    <button>Sign in</button>
</form>

<p>Go to <a href="http://its.aug_30/signup">signup</a></p>

<?php 
require_once(__DIR__.'/bottom.php');