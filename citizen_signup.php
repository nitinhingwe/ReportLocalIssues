<?php
    $insert = true;
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

   $name = $_POST['name'];
   $email = $_POST['email'];
   $residential_address = $_POST['residential_address'];
   $aadhar_no = $_POST['aadhar_no'];
   $mobile_no = $_POST['mobile_no'];
   $password = $_POST['password'];

   $sql = "INSERT INTO `project_r` . `citizen_signup` (`name`, `email`, `residential_address`, `aadhar_no`, `mobile_no`, `password`) VALUES ('$name', '$email', '$residential_address', '$aadhar_no', '$mobile_no', '$password');";
   // echo $sql;

   if($con->query($sql) == true){
      // echo "Success";
      $insert = false;
   }
   else{
      echo "ERROR: $sql <br> $con->error";
   }

   $con->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Citizen Sign up page</title>
    <link href="style.css" rel="stylesheet">
</head>
<body>
    
    <?php
    if($insert == false){
    echo "<p class='submitMsg'>Your profile has been created.</p>";
    }
    ?>
    <div id="sign_up">
    <form action="citizen_signup.php" method="post">
        <h3>Citizen Sign Up</h3>
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" placeholder="Enter your name"><br>

        <label for="email">Email:</label>
        <input type="text" name="email" id="email"><br>

        <label for="residential_address">Residential Address:</label>
        <input type="text" name="residential_address" id="residential_address"><br>

        <label for="aadhar_no">Aadhar Number:</label>
        <input type="number" name="aadhar_no" id="aadhar_no"><br>

        <label for="mobile_no">Mobile Number:</label>
        <input type="number" name="mobile_no" id="mobile_no"><br>

        <label for="password">Password:</label>
        <input type="password" name="password" id="password"><br>

        <input type="submit" value="Submit">
    </form>
    </div>
</body>
</html>
