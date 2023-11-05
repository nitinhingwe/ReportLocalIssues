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
        echo $name = $_POST["name"];
        echo $password = $_POST["password"]; 
        
         
        // $sql = "Select * from users where username='$username' AND password='$password'";
        $sql = "SELECT * FROM authority_signup WHERE name='$name'";
        $result = mysqli_query($con, $sql);
        $num = mysqli_num_rows($result);
        if ($num == 1){
            $row=mysqli_fetch_assoc($result);
                if ($password == $row['password']){ 
                    $login = true;
                    session_start();
                    $_SESSION['loggedin'] = true;
                    $_SESSION['name'] = $name;
                    header("location: welcome_authority.php");
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
    <title>Authority Sign In</title>
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

<div id="nav_bar">
        <div id="logo"><img src="../images/site_logo.png" width="110px" height="110px"></div>
        <nav>

            <a href="../html files/index.html">Home</a>
            <a href="../html files/about.html">About</a>
            <div id="but">
               
                <button onclick="signup()">Sign up</button>
            </div>
        </nav>
    </div>
    <div id="signin" style="display:none;">
        <a href="sign_in_as_authority.php">Sign In as Citizen</a>
        <a href="sign_in_as_authority.php">Sign In as Authority</a>
    </div>
    <div id="signup" style="display:none;">
        <a href="sign_up_as_citizen.php">Sign up as Citizen</a>
        <a href="sign_up_as_authority.php">Sign up as Authority</a>
    </div>
    <div id="signinpage">
        <h3 style="color:white;text-align:center">Sign In as Authority</h3>
        <form action="sign_in_as_authority.php" method="post">

            <label for="name" id="name">Name:</label>
            <input type="text" name="name"><br>
            <label for="password" id="password">Password:</label>
            <input type="password" name="password"><br>
            <input type="submit" value="Sign In" id="submit">

            <span style="color:rgb(252, 95, 95)">Do not have account?</span><a href="sign_up_as_citizen.html"
                style="color:rgb(62, 199, 253)">Create account</a>
        </form>
    </div>
    <div id="footer">
        <div class="foot" id="ac">
            <h2>About company</h2>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Animi consequuntur dolores natus corrupti autem
                repellat aspernatur, illum cumque aperiam aut.</p>
        </div>
        <div class="foot" id="os">
            <section>
                <h2>contact us-</h2>
                Mobile no : 1234567890<br>
                Email address : avcdefg123@gmail.com
            </section>
        </div>



    </div>
    <script src="../java script/my_script.js"></script>

  </body>
</html>