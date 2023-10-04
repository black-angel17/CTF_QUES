<?php include '../Register/Register_database.php'; 


	Database::make_conn();
		


?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <!-- Style -->
    <link rel="stylesheet" href="css/style.css">

    <title>Table #8</title>
  </head>
  <body>
  

  <div class="content">
    
    <div class="container">
      <h2 class="mb-5">Table #8</h2>
      

      <div class="table-responsive custom-table-responsive">

        <table class="table custom-table">
          <thead>
            <tr>  

              <th scope="col">
                <label class="control control--checkbox">
                  <input type="checkbox"  class="js-check-all"/>
                  <div class="control__indicator"></div>
                </label>
              </th>
              <th scope="col">COUNT</th>
              <th scope="col">TEAM ID</th>
              <th scope="col">TEAM Name</th>
              <th scope="col">TEAM MEMBERS</th>
              <th scope="col">DEPARTMENT</th>
              <th scope="col">YEAR</th>
              <th scope="col">SCORES</th>
              <th scope="col">RANK</th>
            </tr>
          </thead>
          <tbody>
          <?php //if ($result->num_rows > 0 ) ?> 
						  <?php $result = Database::update_db();
              $COUNT = 1; 
						  while ($row = $result->fetch_assoc()) { ?>
          <tr scope="row">
              <th scope="row">
                <label class="control control--checkbox">
                  <input type="checkbox"/>
                  <div class="control__indicator"></div>
                </label>
              </th>
              <td>
              <?php print $COUNT?>
              </td>
              <td>
              <?php print $row['team_id']?>
              </td>
              <td><a href="#"><?php print $row['team_name']?></a></td>
              <td>
              <?php print $row['member1']?>
                <small class="d-block"><?php print $row['member2']?></small>
                <small class="d-block"><?php print $row['member3']?></small>
              </td>
              <td><?php print $row['department']?></td>
              <td><?php print $row['year']?></td>
              <td><?php print $row['scores']?></td>
              <td><?php print $row['rank']?></td>
            </tr>
            <tr class="spacer"><td colspan="100"></td></tr> <?php $COUNT ++; } ?>
            
            
           
           
            
          </tbody>
        </table>
      </div>


    </div>

  </div>
    
    

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>