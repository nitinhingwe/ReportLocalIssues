<?php
$login = false;
$showError = false;
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
 
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        // include '_dbconnect.php';
        $name = $_POST["name"];
        $password = $_POST["password"]; 
        
         
        // $sql = "Select * from users where username='$username' AND password='$password'";
        $sql = "SELECT * FROM citizen_signup WHERE name='$name'";
        $result = mysqli_query($con, $sql);
        $num = mysqli_num_rows($result);
        if ($num == 1){
            $row=mysqli_fetch_assoc($result);
                if ($password == $row['password']){ 
                    $login = true;
                    session_start();
                    $_SESSION['loggedin'] = true;
                    $_SESSION['name'] = $name;
                    header("location: welcome.php");
                } 
                else{
                    $showError = "Invalid Credentials i";
                }
            
        } 
        else{
            $showError = "Invalid Credentials";
        }
    }
    $con->close();
 }

    
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Citizen Sign In</title>
    <link href="../css files/sign_in_as_authority.css" rel="stylesheet">
  </head>
  <body>

    <?php require '_nav.php' ?>
    <?php
    if($login){
    echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> You are logged in
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div> ';
    }
    if($showError){
    echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error!</strong> '. $showError.'
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div> ';
    }
    ?>

    <div id="signinpage">
     <h1 class="text-center">Sign In Citizen</h1>
     <form action="sign_in_as_citizen.php" method="post">

            <label for="name">Your Name</label>
            <input type="text" class="form-control" id="name" name="name" aria-describedby="emailHelp">

            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password">

            <input type="submit" value="Sign In" id="submit">
     </form>
    </div>

  </body>
</html>