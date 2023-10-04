<?php 

include_once '../home/db/database.class.php';
include_once '../home/db/session.class.php';
session::start();
Database::make_conn();
$q1= '0x03';
$q2 = '0x04';
$q3 = '0x05';
$result1 = Database::Checker($_SESSION['team_id'],$q1);
$result2 = Database::Checker($_SESSION['team_id'],$q2);
$result3 = Database::Checker($_SESSION['team_id'],$q3);


?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Capture The Flag - Feedback</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/bootstrap4-neon-glow.min.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/particles.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/font-hack/2.020/css/hack.min.css'>
    
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
              <a href="../Website/completed.php" class="p-3 text-decoration-none text-light active">Dashboard</a>
              <a href="os.php" class="p-3 text-decoration-none text-light active">OS-quests</a>
              <a href="web.php" class="p-3 text-decoration-none text-light active">Web-Exploits</a>
              <a href="crypto.php" class="p-3 text-decoration-none text-light active">Cryptography</a>
              <a href="stegno.php" class="p-3 text-decoration-none text-light active">Stegnography</a>
              <a href="linux.php" class="p-3 text-decoration-none text-light active">Linux</a>
              <a href="network.php" class="p-3 text-decoration-none text-light active">Networks</a>
              <a href="pyth.php" class="p-3 text-decoration-none text-light active">Python</a>              
            </div>
          </div>
        </nav>
  
      </div>
    </div><br><br><br><br><br><br><br>
    
    <h1 class="display-3" style="text-align: center"><b>NETWORKS-QUESTS</b><span class="vim-caret">͏͏&nbsp;</span></h1>
    <div class="lead mb-3 text-mono text-success"style="text-align: center">
        Are you ready to solve the quests?
       
    </div>
    <div class="jumbotron bg-transparent mb-0 radius-0">
      <div class="container">
          
          <div class="row">
            <div class="col-xl-12">
              
              <div class="panel-group" id="accordion" is-disabled="true">
                

                <div class="row justify-content-center">
                  <div class="col-xl-4">
                      <div id="chal2" class="panel panel-default mb-10 text-center">
                          <div class="container">
                            <div class="panel-heading">
                              <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
                                <h4 class="panel-title">
                                  0x--
                                </h4>
                                <h4 class="panel-title">
                                    -- points 
                                  </h4>
                                
                              </a>
                             
                            </div>
                            <div id="collapse1" class="panel-collapse collapse in">
                              <div class="panel-body">----------------
                                <br>
                                <br>
                                <?php if($result1){ ?>
                                
                                <?php echo '<a title="Download Theme"class="btn btn-success btn-shadow px-3 my-2 ml-0 text-left">COMPLETED_SUCCESSFULLY</a>'
                                ?><?php } 
                                else{?>
                                <?php echo '<a class="btn btn-danger btn-shadow px-3 my-2 ml-0 ml-sm-1 text-left">NOT_COMPLETED_YET</a>'
                                ?><?php }?>
                                <br>
                                <br>
                                <div class="row justify-content-between">

                                  <div class="col-xl-12 align-self-center">
                                      <a href="#!" class="btn btn-shadow text-mono btn-outline-success">Download</a>
                                      <button type="button" class="btn btn-shadow btn-outline-success" data-toggle="modal" data-target="#hint1"><span class="far fa-lightbulb mr-2"></span>Get HINT</button>
                                  </div>
                                  <br>
                                <br>
                                <form action="test.php" method="post">
                                  <div class="input-group mt-3">
                                  
                                      <input type="text" style="margin-left: 40px;" class="form-control" placeholder="Enter Flag" aria-label="Enter Flag"aria-describedby="basic-addon2" name="flag">
                                      <input type="hidden" name="qnum" value="0x03">
                                      <div class="input-group-append">
                                        <button class="btn btn-outline-success" type="button">GO!</button>
                                       
                                      </div> 
                                    </div>  </form>
                                  <div class="col-xl-12 align-self-center">
                                    
    
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                    </div>
                  </div>
                  <div class="col-xl-4">
                      <div id="chal3" class="panel panel-default mb-10 text-center">
                          <div class="container">
                            <div class="panel-heading">
                              <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">
                                <h4 class="panel-title">
                                  0x--
                                </h4>
                                <h4 class="panel-title">
                                    --- points 
                                </h4>
                              </a>
                            </div>
                            <div id="collapse3" class="panel-collapse collapse in">
                              <div class="panel-body">------------------ 
                                <br>
                                <br>
                                <?php if($result2){ ?>
                                
                                <?php echo '<a title="Download Theme"class="btn btn-success btn-shadow px-3 my-2 ml-0 text-left">COMPLETED_SUCCESSFULLY</a>'
                                ?><?php } 
                                else{?>
                                <?php echo '<a class="btn btn-danger btn-shadow px-3 my-2 ml-0 ml-sm-1 text-left">NOT_COMPLETED_YET</a>'
                                ?><?php }?>


                                <br>
                                <br>
                                <div class="row justify-content-between">
                                  <div class="col-xl-12 align-self-center">
                                      <a href="#" class="btn btn-shadow text-mono btn-outline-success">Go There</a>
                                      
                                      <button type="button" class="btn btn-shadow btn-outline-success" data-toggle="modal" data-target="#hint2"><span class="far fa-lightbulb mr-2"></span>Get HINT</button>
                                     
                                    </div>
                                    <br>
                                <br>
                                <form action="test.php" method="post">
                                  <div class="input-group mt-3">
                                      <input type="text" style="margin-left: 40px;" class="form-control" placeholder="Enter Flag" aria-label="Enter Flag" aria-describedby="basic-addon2" name = "flag">
                                      <input type="hidden" name="qnum" value="0x04">
                                      <div class="input-group-append">
                                        <button class="btn btn-outline-success" type="submit">GO!</button>
                                      </div>

                                    </div>  
                                </form>
                                  <div class="col-xl-12 align-self-center">
                                    
                                    
                                    
    
                                  </div>
                                </div>
                              </div>
                            </div>
                            
                          </div>
                          
                    </div>

                    
                  </div>

                  <div class="col-xl-4">
                      <div id="chal2" class="panel panel-default mb-10 text-center">
                          <div class="container">
                            <div class="panel-heading">
                              <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
                                <h4 class="panel-title">
                                  0x--
                                </h4>
                                <h4 class="panel-title">
                                    -- points 
                                  </h4>
                                
                              </a>
                             
                            </div>
                            <div id="collapse2" class="panel-collapse collapse in">
                              <div class="panel-body">-----------
                                <br>
                                <br>
                                <?php if($result1){ ?>
                                
                                <?php echo '<a title="Download Theme"class="btn btn-success btn-shadow px-3 my-2 ml-0 text-left">COMPLETED_SUCCESSFULLY</a>'
                                ?><?php } 
                                else{?>
                                <?php echo '<a class="btn btn-danger btn-shadow px-3 my-2 ml-0 ml-sm-1 text-left">NOT_COMPLETED_YET</a>'
                                ?><?php }?>
                                <br>
                                <br>
                                <div class="row justify-content-between">

                                  <div class="col-xl-12 align-self-center">
                                      <a href="#!" class="btn btn-shadow text-mono btn-outline-success">Download</a>
                                      <button type="button" class="btn btn-shadow btn-outline-success" data-toggle="modal" data-target="#hint3"><span class="far fa-lightbulb mr-2"></span>Get HINT</button>
                                  </div>
                                  <br>
                                <br>
                                <form action="test.php" method="post">
                                  <div class="input-group mt-3">
                                  
                                      <input type="text" style="margin-left: 40px;" class="form-control" placeholder="Enter Flag" aria-label="Enter Flag"aria-describedby="basic-addon2" name="flag">
                                      <input type="hidden" name="qnum" value="0x05">
                                      <div class="input-group-append">
                                        <button class="btn btn-outline-success" type="button">GO!</button>
                                       
                                      </div> 
                                    </div>  </form>
                                  <div class="col-xl-12 align-self-center">
                                    
    
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                    </div>
                    
                  </div>
                  
                </div>
                <a href="javascript:history.back()" class="mt-5 btn btn-shadow btn-success btn-block">GO BACK</a>
               
              </div>
            </div>
          </div>
      </div>
    </div>
    



    <div class="modal fade" id="hint1" tabindex="-1" role="dialog" aria-labelledby="hint label" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-body">
            HINT 1 GOES HERE 
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="hint2" tabindex="-1" role="dialog" aria-labelledby="hint label" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-body">
            HINT 2 GOES HERE 
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="hint3" tabindex="-1" role="dialog" aria-labelledby="hint label" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-body">
            HINT 3 GOES HERE 
          </div>
        </div>
        
      </div>
      
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
  $(document).ready(function() {
    // Trigger the collapse action on page load for each panel
    $('#collapse1').collapse('show');
    $('#collapse2').collapse('show');
    $('#collapse3').collapse('show');
  });
</script>
<script>
  function sendAndReceiveData() {
  
    var fname = "Jodhn";
    var lname = "Doe";
    var url = "countdown.php?fname=" + fname + "&lname=" + lname;
    const xhttp = new XMLHttpRequest();
    xhttp.open("GET", url);
    xhttp.send();
  }
  setInterval(sendAndReceiveData, 1000);
  </script>
    


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    <script src="assets/js/particles.js"></script>
    <script src="assets/js/app.js"></script>
  </body>
</html>
    
