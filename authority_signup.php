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
   $organisation = $_POST['organisation'];
   $employee_id = $_POST['employee_id'];
   $mobile_no = $_POST['mobile_no'];
   $password = $_POST['password'];

   $sql = "INSERT INTO `project_r` . `authority_signup` (`name`, `email`, `organisation`, `employee_id`, `mobile_no`, `password`) VALUES ('$name', '$email', '$organisation', '$employee_id', '$mobile_no', '$password');";
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
    <title>Authority Sign Up page</title>
    <link href="style.css" rel="stylesheet">
</head>
<body>

    
    <?php
    if($insert == false){
    echo "<p class='submitMsg'>Your profile has been created.</p>";
    }
    ?>
    <div id="sign_up">
    <h3>Authority Sign Up</h3>
    <form action="authority_signup.php" method="post">
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" placeholder="Enter your name"><br>

        <label for="email">Email:</label>
        <input type="text" name="email" id="email"><br>

        <label for="organisation">Organisation Name:</label>
        <input type="text" name="organisation" id="organisation"><br>

        <label for="employee_id">Employee Id:</label>
        <input type="number" name="employee_id" id="employee_id"><br>

        <label for="mobile_no">Mobile Number:</label>
        <input type="number" name="mobile_no" id="mobile_no"><br>

        <label for="password">Password:</label>
        <input type="password" name="password" id="password"><br>

        <input type="submit" value="Submit">
    </form>
    </div>

</body>
</html>
