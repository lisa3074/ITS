<?php

require_once(__DIR__ . '/router.php');


get('/', function(){
   require_once(__DIR__ . '/views/index.php');
   
});

##############################
######### EXERCISES ##########
##############################

get('/bruteforce', function(){
   require_once(__DIR__ . '/exercises/bruteForce.php');

});

get('/undervisning', function(){
   require_once(__DIR__ . '/exercises/undervisning.php');

});
get('/sql1', function(){
   require_once(__DIR__ . '/exercises/santiago/api-test.php');
   //require_once(__DIR__ . '/exercises/santiago/index.html');

});
get('/blog', function(){
   require_once(__DIR__ . '/exercises/santiago2/xxs/blog.php');
});

get('/blogs', function(){
   require_once(__DIR__ . '/exercises/santiago2/xxs/blogs.php');
});
get('/csfrLogin', function(){
   require_once(__DIR__ . '/exercises/santiago2/csrf/login.php');
});
get('/csfrProfile', function(){
   require_once(__DIR__ . '/exercises/santiago2/csrf/profile.php');
});
get('/csfrBlogs', function(){
   require_once(__DIR__ . '/exercises/santiago2/csrf/blogs.php');
});
get('/csfrHack', function(){
   require_once(__DIR__ . '/exercises/santiago2/csrf/hack.php');
});

##############################
##############################

get('/index/:display_error', function($display_error){
   require_once(__DIR__ . '/views/index.php');

});

get('/signup', function(){
   require_once(__DIR__ . '/views/signup.php');

});


get('/login/:display_error', function($display_error){
   require_once(__DIR__ . '/views/index.php');

});
get('/signup/:display_error', function($display_error){
   require_once(__DIR__ . '/views/signup.php');

});
get('/admin', function(){
   require_once(__DIR__ . '/views/admin.php');

});
get('/admin/note/:note', function($note){
   require_once(__DIR__ . '/views/admin.php');

});
get('/admin/:display_message', function($display_message){
   require_once(__DIR__ . '/views/admin.php');

});

get('/logout', function(){
   require_once(__DIR__ . '/bridges/bridge_logout.php');

});

##############################
############ POST ############
##############################

post('/login', function(){
   require_once(__DIR__ . '/apis/api_login.php');

});
post('/signup', function(){
   require_once(__DIR__ . '/apis/api_signup.php');

});
post('/admin', function(){
   //echo 'Hello';
  require_once(__DIR__ . '/apis/api_save_note.php');
  require_once(__DIR__ . '/views/admin.php');

});
post('/show_note', function(){
   //echo 'Hello';
  require_once(__DIR__ . '/apis/api_display_note.php');
  require_once(__DIR__ . '/views/admin.php');

});


get('/error', function(){
   require_once(__DIR__ . '/views/index.php');
   echo 'Wrong';

});


// ##############################

// For GET or POST
any('/404', function(){
  echo 'Not found';
});