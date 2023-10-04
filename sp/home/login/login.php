<pre>
<?php

include_once '../db/database.class.php';
include_once '../db/user.class.php';
include_once '../db/session.class.php';



session::start();
print_r($_POST);

if (Session::get('is_loggedin')){
    
    print("welcome BAck");
    print("\nsession");
print_r($_SESSION);
print("cookie");
print_r($_COOKIE);
header("Location: ../index.php");
    

}else{
    print("NO SESSION FOUND TRY LOGIN");
$result = user::login($_POST['user'],$_POST['pass']);
print("\n\n\nchecking datasbase\n\n\n");

if ($result){
    print("\nLogin sucess");
    Session::set('is_loggedin',true);
    Session::set('team_id',$_POST['user']);
    if (!isset($_SESSION['countdown_time'])) {
        $_SESSION['countdown_time'] = '3600'; // Initial countdown time
      }
    header("Location: ../index.php");

}else{
    print("\nLogin Failed");
    header("Location: ../index.html");
    Session::destroy();

}
print("\nsession");
print_r($_SESSION);
print_r($_COOKIE);




}



?>
</pre>

