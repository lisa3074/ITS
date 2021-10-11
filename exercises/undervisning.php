<?php
require_once(__DIR__.'/../views/top.php');

//salting and pebering
$peber = "2C5eV0XtQVKrXA==";
$random = base64_encode(openssl_random_pseudo_bytes(10));
$password= "password";
echo $random."<br>";
//Gør ligesom dette, tag password fra input, random fra salt i db og peber fra denne kodebasde
echo hash("sha256", $password.$random.$peber)."<br>";
//echo "password".$random.$peber;


//creating 10 different passwords to see the difference
$password= 'password0';
for($i=0;$i<10;$i++){
    echo "Password: ".$password.$i.'<br>';
    echo password_hash($password.$i, PASSWORD_DEFAULT, ["cost"=>10])."<br>";
}

//se all the different modes
//var_dump(openssl_get_cipher_methods());

//encrypting with ECB
/* $alg='AES-128-ECB';
$plaintext = 'this is a secret message';
$key="secretKey";
$ciphertext=openssl_encrypt($plaintext, $alg, $key);

echo 'ciphertext: '.$ciphertext.'<br>';

$decrypted=openssl_decrypt($ciphertext, $alg, $key);
echo 'decrypted: '.$decrypted.'<br>'; */


//encrypting with CBC
$alg='AES-128-CBC';
//when using the last part with $alg, it will automatically find the length for the particular algorithm
$iv=openssl_random_pseudo_bytes(openssl_cipher_iv_length(($alg)));
$plaintext = 'this is a secret message';
$key="secretKey";
$ciphertext=openssl_encrypt($plaintext, $alg, $key, 0, $iv);

echo 'ciphertext: '.$ciphertext.'<br>';

$decrypted=openssl_decrypt($ciphertext, $alg, $key, 0, $iv);

echo 'decrypted: '.$decrypted;

require_once(__DIR__.'/../views/bottom.php');