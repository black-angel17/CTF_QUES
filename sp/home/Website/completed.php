<?php 
include_once '../login/Register_database.php'; 
include_once '../db/database.class.php';
include_once '../db/session.class.php';
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
    <title>PICT - CTF</title>

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
              <a href="../index.php" class="pl-md-0 p-3 text-light">Home</a>
              <a href="../Website/scoreboard.php" class="p-3 text-decoration-none text-light active">Leaderboard</a>
              <a href="../help.php" class="p-3 text-decoration-none text-light active">Help</a>
              <!-- <a href="../Website/scoreboard.php" class="p-3 text-decoration-none text-light active">Completed Challenges</a> -->
            </div>
          </div>
        </nav>
  
      </div>
    </div>
     
    <section class="particles-js-canvas-el" >
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center mb-5">
                    <br><br><br>
                    <a style="font-size: xx-large;color:gold" ><?php print ($tname)?> </a>
                </div>
            </div>
            <div class="particles-js-canvas-el">
                
                        <table class="table" style="background-color: transparent;">
                            <thead class="particles-js-canvas-el">
                                <tr>
                                    <th>S_No</th>
                                    <th>Level_Completed</th>
                                    <th>Points</th>
                                    <th>Completed_Time</th>
                                    <th>&nbsp;</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php //if ($result->num_rows > 0 ) ?> 
						  <?php $result = Database::Completed($_SESSION['team_id']);
						  $count = 1; 
						  while ($row = $result->fetch_assoc()) {

						  ?>
						  <tr class="lead mb-3 text-mono text-success" style="color: chartreuse;" role="alert">
						      <th scope="row "  class="alert"  style="font-size: large;"><?php print $count ;?></th>
						      <td><?php print $row['finish_lvl']?></td>
						      <td style="font-size: xx-large;color:gold"><?php print $row['point']?></td>
                              <td><?php print $row['time']?></td>
						    </tr> <?php $count++; } ?>>
                            </tbody>
                        </table>
            </div>
        </div>
    </section>
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

