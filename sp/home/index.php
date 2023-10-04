<?php 
include_once '../home/login/Register_database.php'; 
include_once '../home/db/database.class.php';
include_once '../home/db/session.class.php';
session::start();
Database::make_conn();
$score =Database::get_score($_SESSION['team_id']);
$tname =Database::get_tname($_SESSION['team_id']);
?>
<!DOCTYPE html> 
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Byte Busters - CTF</title>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/flipclock.css">
    <link rel="stylesheet" href="assets/css/bootstrap4-neon-glow.min.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/particles.css">
    
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/font-hack/2.020/css/hack.min.css">
    <style>
        .countdown {
            font-size: 5em;
            text-align: center;
        }
    </style>
  </head>
  <body>

  <div id="particles-js"></div>
    <div class="navbar-dark text-white">
      <div class="container">
        <nav class="navbar px-0 navbar-expand-lg navbar-dark">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
              <a href="index.php" class="pl-md-0 p-3 text-light">Home</a>
              <a href="/Website/completed.php" class="p-3 text-decoration-none text-light active">Dashboard</a>
              <a href="web.php" class="p-3 text-decoration-none text-light active">Web-Exploits</a>
             
               <a href="os.php" class="p-3 text-decoration-none text-light  active">OS-quests</a>
               <a href="/challenges/ssh.html" class="p-3 text-decoration-none text-light active">Ssh</a>
              <a href="crypto.php" class="p-3 text-decoration-none text-light active">Cryptography</a>
              <a href="stegno.php" class="p-3 text-decoration-none text-light active">Stegnography</a>
              <a href="linux.php" class="p-3 text-decoration-none text-light active">Linux</a>
              <a href="network.php" class="p-3 text-decoration-none text-light active">Networks</a>
              <a href="pyth.php" class="p-3 text-decoration-none text-light active">Python</a> 
              <a class="btn btn-danger btn-shadow px-3 my-2 ml-0 ml-sm-1 text-left" href="../login/logout.php">Logout</a>
              
            </div>
          </div>
        </nav>
  
      </div>
    </div>
    
    <div class="jumbotron bg-transparent mb-0 radius-0">
      <div class="container">
          <div class="row">
            <div class="col-xl-6">
              <h1 class="display-3">TEAM_NAME:<span class="vim-caret">͏͏&nbsp;</span></h1>
              <div class="lead mb-3 text-mono text-success" style="font-size: 5em;"> <br><?php print($tname) ?>
              </div>      
            <div class="text-darkgrey text-mono my-2">Hey Team <?php print($tname) ?> together, We never let anyone else take the top spot!</div>

            <p class="mt-5 text-grey text-spacey">
                
            </p>
      </div>
            
            
          <div class="col-xl-6" >
            <h1 class="display-3" style="margin-left: 100px;" >SCORES!:<span class="vim-caret" >͏͏&nbsp;</span></h1>
            <div class="lead mb-3 text-mono text-success" style="font-size: 8em; margin-top: 100px;margin-left: 100px;"> <?php print($score)?>
            </div>
              

            <!-- <div class="col-xl-6">
              <img class="canvas_img" src="assets/img/canvas.png" alt="">
            </div> -->
          </div>
          <div class="container py-5">
          <br><br><br>
          <div class="col-xl-6">
              <h1 class="display-3">TIME Remaining:<span class="vim-caret">͏͏&nbsp;</span></h1><br><br>
              <div class="lead mb-3 text-mono text-success"  class="countdown" id="demo" style="font-size: 5em;"> <br><br> 
              </div>
          </div>
      </div>
    </div>

    <script>
function sendAndReceiveData() {

  var fname = "Jodhn";
  var lname = "Doe";
  var url = "countdown.php?fname=" + fname + "&lname=" + lname;

  const xhttp = new XMLHttpRequest();
  xhttp.onload = function() {
    document.getElementById("demo").innerHTML = this.responseText;
  }
  xhttp.open("GET", url);
  xhttp.send();
}
setInterval(sendAndReceiveData, 1000);

</script>
    
  
   


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    <script src="assets/js/flipclock.min.js"></script>
    
    <script src="assets/js/particles.js"></script>
    <script src="assets/js/app.js"></script>
   
  </body>
</html>

