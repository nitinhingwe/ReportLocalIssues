<?php
if(isset($_POST['name'])){
   
   $server = "localhost";
   $username = "root";  
   $password = "";
   $database = "project_r";

   $con = mysqli_connect($server, $username, $password, $database);

   if(!$con){
    die("connection to this database failed due to" . mysqli_connect_error());
   }
   // echo "Success connecting to the db"

   $con->close();
}
?>