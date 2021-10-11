<style>
* {
    font-family: Arial, Helvetica, sans-serif;
}

.pass {
    font-weight: bold;
    font-size: 1.2rem;
    margin: 0;
    padding: 0;
}

.test {
    font-weight: bold;
}
</style>

<?php
echo '<h1>bruteForce</h1>';

##############################
/////////// VARS /////////////
##############################

//array from a-z small caps
//$abc = range('a', 'z');

//array from a-z small caps, A-Z uppercase and 0-9 (don't test  with more than 4 chars)
$smallCaps = range('a', 'z');
$largeCaps = range('A', 'Z');
$num = range('1', '9');
$abc = array_merge($smallCaps, $largeCaps, $num);

//legth of $abc array
$len = count($abc);

##############################
////////// TESTS /////////////
##############################

 //Test with 3 characters 
  $hashpass3=hash("sha256", "j6D");
for($i = 0; $i < $len; $i++){
      for($k = 0; $k < $len; $k++){
        for($j = 0; $j < $len; $j++){
            //echo 'TEST:<br> First letter: '.$i + 1 .' out of '.$len.'<br> Second letter: '.$k + 1 .' out of '.$len.'<br> Third letter: '.$j + 1 .' out of '.$len.'<br>';
            //echo 'Testing: <span class="test">'.$abc[$i].$abc[$k].$abc[$j].'</span> or in hash: '.hash("sha256", $abc[$i].$abc[$k].$abc[$j]).'<br><br>';
            if(hash("sha256", $abc[$i].$abc[$k].$abc[$j])==$hashpass3){
                echo '<h2>FOUND</h2>The password is: <p class="pass">'.$abc[$i].$abc[$k].$abc[$j].'</p> or in hash:<br>'.hash("sha256", $abc[$i].$abc[$k].$abc[$j]).'<br>';
               exit();
            } 
        } 
    } 
}   
/*  //Test with 4 characters
$hashpass4=hash("sha256", "hxdl");
for($i = 0; $i < $len; $i++){
   for($k = 0; $k < $len; $k++){
     for($j = 0; $j < $len; $j++){
        for($l = 0; $l < $len; $l++){
            if(hash("sha256", $abc[$i].$abc[$k].$abc[$j].$abc[$l])==$hashpass4){
            echo '<h2>FOUND</h2>The password is: <p class="pass">'.$abc[$i].$abc[$k].$abc[$j].$abc[$l].'</p> or in hash:<br>'.hash("sha256", $abc[$i].$abc[$k].$abc[$j].$abc[$l]).'<br>';
          //  exit();
            } 
        } 
     } 
    } 
} 
 //Test with 5 characters
 $hashpass5=hash("sha256", "axdaa");
for($i = 0; $i < $len; $i++){
   for($k = 0; $k < $len; $k++){
     for($j = 0; $j < $len; $j++){
        for($m = 0; $m < $len; $m++){
            for($l = 0; $l < $len; $l++){
                if(hash("sha256", $abc[$i].$abc[$k].$abc[$j].$abc[$l].$abc[$m])==$hashpass5){
                echo '<h2>FOUND</h2>The password is: <p class="pass">'.$abc[$i].$abc[$k].$abc[$j].$abc[$l].$abc[$m].'</p> or in hash:<br>'.hash("sha256", $abc[$i].$abc[$k].$abc[$j].$abc[$l].$abc[$m]).'<br>';
               // exit();
                } 
            } 
        } 
     } 
    } 
}  */ 

//WITH ALL CHARACTERS
/* //array from a-z small caps, A-Z uppercase and 0-9 (don't test  with more than 3 chars)
$abc = range('a', 'z');
$ABC = range('A', 'Z');
$num = range('1', '9');
$numChar = array_merge($abc, $num, $ABC);

//legth of $abc array
$len = count($numChar);

 //Test with 4 characters 
 $hashpass4el=hash('sha256', 'hG4l');
for($i = 0; $i < $len; $i++){
      for($k = 0; $k < $len; $k++){
        for($j = 0; $j < $len; $j++){
            for($l = 0; $l < $len; $l++){
                    //echo 'TEST:<br> First letter: '.$i + 1 .' out of '.$len.'<br> Second letter: '.$k + 1 .' out of '.$len.'<br> Third letter: '.$j + 1 .' out of '.$len.'<br>';
                // echo 'Testing: <span class="test">'.$numChar[$i].$numChar[$k].$numChar[$j].'</span> or in hash: '.hash("sha256", $numChar[$i].$numChar[$k].$numChar[$j]).'<br><br>';
                    if(hash("sha256", $numChar[$i].$numChar[$k].$numChar[$j].$numChar[$l])==$hashpass4el){
                        echo '<h2>FOUND</h2>The password is: <p class="pass">'.$numChar[$i].$numChar[$k].$numChar[$j].$numChar[$l].'</p> or in hash:<br>'.hash("sha256", $numChar[$i].$numChar[$k].$numChar[$j].$numChar[$l]).'<br>';
                        exit();
                    } 
            } 
        } 
    } 
}   */