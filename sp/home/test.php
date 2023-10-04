<pre>
<?php 

include_once '../home/db/session.class.php';
include_once '../home/db/database.class.php';

session::start();
Database::make_conn();

$current_page = $_SERVER['PHP_SELF'];

// Use basename() to extract just the filename

$referrer = $_SERVER['HTTP_REFERER'];
$self = basename($referrer);
$flag = $_POST['flag'];


if ($flag== null){
    header("Location: $self");
    

} 
else{
$qnum = $_POST['qnum'];
$id = $_SESSION['team_id'];

$result = Database::flag_checker($id,$qnum,$flag);

if ($result){
    print "\nFlag is correct ";
    header("Location: $self");
    
}  
else{
    header("Location: board/404.html");
    print("DUPLICATE VALUE");
}
}

?>
</pre>


  
