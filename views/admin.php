<?php
require_once(__DIR__.'/top.php');

if(!isset($_SESSION)){
  session_start();
}

  if( isset($display_message) ){
    echo urldecode($display_message);
    }
?>

<p>Hi <?= $_SESSION['email']?></p>
<form action="/logout"><button>Logout</button></form>

<form action="/admin"
    method="POST">
    <textarea placeholder="Save secret note to self"
        name="note"></textarea>
    <button>Save</button>
</form>

<?php
if( isset($note) ){
  ?>
<p><span class="bold">Saved note:</span></p>
<p><?php
    echo urldecode($note);
    }?></p>
<form action="/show_note"
    method="POST"><button>Show secret note</button></form>
<?php
    require_once(__DIR__.'/bottom.php');