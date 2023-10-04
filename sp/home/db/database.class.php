
<?php



class Database{

    public static $connection;


// public function __construct(){
//     print "constructing Datasbase-->";
//     Database::make_conn();
//    }
   

  public static function make_conn(){
        
   $servername = "127.0.0.1:4400";
   $username = "kali";
   $passwor = "kali";
   $dbname = "test";

  $conn = new mysqli($servername, $username, $passwor, $dbname);
  
    // print('connection has been returned');
    Database::$connection = $conn;
    return Database::$connection = $conn;
  
}
   
    
   

    public static function insert_data($email,$pass){

       
        $sql = "INSERT INTO `register` (`email`,`password`)
        VALUES ('$email','$pass');";
        
        if (Database::$connection->query($sql) === TRUE) {
         echo "\n\nNew record created successfully";
         return True;

       } else {
          return "Error: " . $sql . "<br>" . Database::$connection->error;
          
        }
        

    }
    
    public static function login($name,$pass){
        
        if (Database::$connection->connect_error) {
            die("Connection failed: ". Database::$connection->connect_error);
          } 
          else{
          $sql ="SELECT * FROM `register` WHERE `team_id` = '$name'";
          $result = Database::$connection->query($sql);
         
          if ($result->num_rows == 1 ) {
            // output data of each row
           
            $row = $result->fetch_assoc();
              
              //it retunr a row 

              if ($row["team_id"]== $name and $row['team_id'] == $pass ) {
                echo print("\t\t\tUSER IS FOUND\t\t\t\t");
                $cookie_name = "team_id";
                $cookie_value = $row['team_id'];
                setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
                return true;
              }
              else{
                print("PASSWORD Mismatched");
              }  

            }
            
            
           else {
            echo "USER NOT FOUND";
          }
          //Database::$connection->close();
          }

    }

    public static function get_score($id){
      if (Database::$connection->connect_error) {
          die("Connection failed: ". Database::$connection->connect_error);
        } 
        else{
        $sql ="SELECT * FROM `register` WHERE `team_id` = '$id'";
        $result = Database::$connection->query($sql);
       
        if ($result->num_rows == 1 ) {
          // output data of each row
      
          $row = $result->fetch_assoc();

            //it retunr a row 
           return  $row["scores"] ;

  }
}
    }


    public static function get_tname($id){
      if (Database::$connection->connect_error) {
          die("Connection failed: ". Database::$connection->connect_error);
        } 
        else{
        $sql ="SELECT * FROM `register` WHERE `team_id` = '$id'";
        $result = Database::$connection->query($sql);
       
        if ($result->num_rows == 1 ) {
          // output data of each row
      
          $row = $result->fetch_assoc();

            //it retunr a row 
           return  $row["team_name"] ;

  }
}
    }


    public static function flag_checker($id,$qnum,$flag){
        
      if (Database::$connection->connect_error) {
          die("Connection failed: ". Database::$connection->connect_error);
        } 
        else{
        $sql ="SELECT * FROM `flags` WHERE `flag` = '$flag'";
        $result = Database::$connection->query($sql);
       
        if ($result->num_rows == 1 ) {
          // output data of each row
         
          $row = $result->fetch_assoc();

            //it retunr a row 
            if ($row["flag"]== $flag and $row['level'] == $qnum ) {
              $point  = $row['point'];

              $sql ="SELECT * FROM `updater` WHERE `team_id` = '$id' AND `finish_lvl` = '$qnum'";
              $resu = Database::$connection->query($sql);
              if ($resu->num_rows == 1 ) {
                print("FlAG ALREADY ENTERED\n");
                return false;
              }
              else{
              $sql ="UPDATE `register` SET `scores` = `scores` + $point WHERE `register`.`team_id` = $id";
              Database::$connection->query($sql);
              print("score Updated");



              $update = "INSERT INTO `updater`( `finish_lvl`, `team_id`, `point`,`time`) VALUES ('$qnum','$id','$point',CURRENT_TIME());";
              Database::$connection->query($update);
              return true;
              }
            }
            else{
              print("FLAG is WRONG");
            }  

          }
         else {
          echo "FLAG NOT FOUND";
        }
        Database::$connection->close();
        }
      }


public static function Completed($id){
        
  if (Database::$connection->connect_error) {
      die("Connection failed: ". Database::$connection->connect_error);
    } 
    else{
    $sql ="SELECT * FROM `updater` WHERE team_id = '$id' ";
    $result = Database::$connection->query($sql);
     
    return $result;
    
       
    }
}

public static function Checker($id,$qnum){
        
  if (Database::$connection->connect_error) {
      die("Connection failed: ". Database::$connection->connect_error);
    } 
    else{
      $sql ="SELECT * FROM `updater` WHERE `team_id` = '$id' AND `finish_lvl` = '$qnum'";
      $resu = Database::$connection->query($sql);
      if ($resu->num_rows == 1 ) {
        return True;
       
    }else{
      return false;
    }
}

}








  



















  }
