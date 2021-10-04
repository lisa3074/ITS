<?php
require_once(__DIR__.'/top.php');
  if( isset($display_error) ){
    echo urldecode($display_error);
    }

?>

<form action="/signup"
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

<p>Go to <a href="http://its.aug_30/">login</a></p>

<?php
require_once(__DIR__.'/bottom.php');