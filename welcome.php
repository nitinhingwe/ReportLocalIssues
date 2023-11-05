<?php
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: sign_in_as_authority.php");
    exit;
}

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<style>
  
* {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
    font-family: "Mona Sans", "Helvetica Neue", Helvetica, Arial, sans-serif;
    color:rgb(107, 100, 100);
}
/* navigation design */
#nav_bar {
    background-color: rgba(8, 8, 8, 0.897); /* Background color for the navigation bar */
    color: #fff; /* Text color for links and buttons */
    padding: 10px; /* Add padding for spacing */
}
#nav_bar a{
    color:white;
}
#logo img {
    width: 150px;
    height: 150px;
    display: block;
    margin: 0 auto;
    border-radius: 50%;
}

nav {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

nav a {
    color: #fff;
    text-decoration: none;
    margin: 0 20px;
    font-size: 16px;
}

#but button {
    background-color: #4CAF50; /* Button background color */
    color: #fff;
    border: none;
    padding: 10px 20px;
    cursor: pointer;
    font-size: 16px;
    margin-left: 20px;
}

#but button:hover {
    background-color: #45a049; /* Button background color on hover */
}
#nav_bar{
    padding:0 20px;
    width:100%;
    height:80px;
    display: flex;
    align-items: center;
    color:white;
    font-size: medium;
}
#nav_bar a{
    margin:25px;
    text-decoration: none;
    color:white;
    font-family: "Mona Sans", "Helvetica Neue", Helvetica, Arial, sans-serif;

    float:left;

}
/* Style the sign-in and sign-up links */

  #signin a:hover, #signup a:hover {
    background-color: #20f7f7;
  }
  

.i1 {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    width: 200px;
    height: 50px;
    border-radius: 10px;
    color: white;
    background: darkblue;
    text-decoration: underline;
    font-weight: bold;
    text-align: center;
    transition: background-color 0.3s;
    margin:10px;
}




body {
    margin: 5px;
    padding: 5px;
    width: 100%;
}


.right_align {

    color:black;
    font-size: larger;
    float: right;
    margin:10px;

}

.section {
    display: flex;
    align-items: center;
    justify-content: center;
}
#issues{
    display:flex;
    flex-wrap: wrap;
    align-items: center;
    justify-content: center;
}

.issue{
    width:300px;
    height: 250px;
    margin:10px;

    border: 1px solid black;
    border-radius: 5px;
}
img{
    border-radius: 5px;
}

#intro{
    margin:20px;
    padding:10px;
    color:black;
}

#but{
    display:flex;
    position: relative;
    left:55vw;
   

}
#nav_bar button{
    width:100px;
    height: 30px;
    border-radius: 5px;
    background-color: rgb(66, 64, 64);
    margin:5px;
    padding:0 10px;
}
#signup{
    display:flex;
    align-items: center;
    justify-content: center;
    text-align: center;
}

#signup a{
    text-align: center;
    margin:10px;
    color:black;
    font-size: larger;
    text-decoration: none;
    
    height:35px;
    border:1px solid black;
    border-radius: 5px;
}
#signin{
    padding:0;
    display:flex;
    align-items: center;
    justify-content: center;
    text-align: center;
}
#signin a{
    padding:10px;
    text-align: center;
    margin:10px;
    color:rgb(245, 242, 242);
    font-size: larger;
    text-decoration: none;
    background-color: rgb(100, 90, 90);
    
    height:35px;
    border:1px solid black;
    border-radius: 5px;
}
#signup a{
    padding:10px;
    color:white;
    background-color:rgb(56, 52, 52);
}
#signin #submit{
    margin:10px;
    width:100px;
    height:30px;
    font-size: 20px;
    color:red;
}
#signinpage{
    width:400px;
    height:300px;
    font-size: 20px;
    padding :20px;
display:flex;
align-items: center;
text-align: center;
justify-content: center;
position:absolute;
top:30%;
left:30%;
border:1px solid black;
background-color:rgb(231, 220, 220) ;
border-radius: 5px;
    display:flex;
    align-items: center;
    justify-content: center;
    border:1px solid black;
}
/* home page css ends */
/* sign up as authority and citizen page */

/* sign up as authorities and citizen page ends */
/* footer css */
#footer {
    background: #0c012d;
    color: white;
    width: 100%;
    height: auto;
    margin: 0;
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
}

.foot {
    margin: 20px;
    width: 20%;
    color: #f1f1f1;

}

#footer h2 {
    margin: 10px 0;
    color: red;
}
#ac p,section{
    color:white;
}

   
#footer {
    background-color: #333;
    color: #fff;
    padding: 20px;
}
</style>
    <title>Welcome - <?php $_SESSION['name']?></title>
  </head>
  <body>
    <?php require '_nav.php' ?>
   

    <div id="nav_bar">
        <div id="logo"><img src="../images/site_logo.png" width="110px" height="110px"></div>
        <nav>

            <a href="../html files/index.html">Home</a>
            <a href="../html files/about.html">About</a>
            Welcome - <?php echo $_SESSION['name']?>
        </nav>
    </div>
    <div id="signin" style="display:none;">
        <a href="../php/sign_in_as_citizen.php">Sign In as Citizen</a>
        <a href="../php/sign_in_as_authority.php">Sign In as Authority</a>
    </div>
    <div id="signup" style="display:none;">
        <a href="../php/sign_up_as_citizen.php">Sign up as Citizen</a>
        <a href="../php/sign_up_as_authority.php">Sign up as Authority</a>
    </div>
    <div id="intro">
        <h1 id="welcome"></h1>
        <p></p>
    </div>

    <div id="wrapper">

        <div class="section">
            <a href="../php/report_issues.php" class="i1" id="i1">Report Issues</a><br>
            <a href="#" class="i1" id="i2" onclick="filterIssues('pending')">Pending Issues</a>
            <a href="#" class="i1" onclick="filterIssues('resolved')">Resolved Issues</a>

        </div>
        <div id="map"></div>
        <div id="issues">
            <div class="issue"><img width="300" height="150" src="../images/img1.jpg" alt="site_img">
                <p>Uploaded At:<span></span></p>
                <p>Description:<span></span></p>
                <p>Location:<span></span></p>
                <p>Status:<span class="status">resolved</span></p>
            </div>
            <div class="issue"><img width="300" height="150" src="../images/img2.jpg" alt="site_img">
                <p>Uploaded At:<span></span></p>
                <p>Description:<span></span></p>
                <p>Location:<span></span></p>
                <p>Status:<span class="status">pending</span></p>
            </div>
            <div class="issue"><img width="300" height="150" src="../images/img3.jpg" alt="site_img">
                <p>Uploaded At:<span></span></p>
                <p>Description:<span></span></p>
                <p>Location:<span></span></p>
                <p>Status:<span class="status">pending</span></p>
            </div>
            <div class="issue"><img width="300" height="150" src="../images/img4.jpg" alt="site_img">
                <p>Uploaded At:<span></span></p>
                <p>Description:<span></span></p>
                <p>Location:<span></span></p>
                <p>Status:<span class="status">resolved</span></p>
            </div>
            <div class="issue"><img width="300" height="150" src="../images/im5.jpg" alt="site_img">
                <p>Uploaded At:<span></span></p>
                <p>Description:<span></span></p>
                <p>Location:<span></span></p>
                <p>Status:<span class="status">pending</span></p>
            </div>
            <div class="issue"><img width="300" height="150" src="../images/img6.jpg" alt="site_img">
                <p>Uploaded At:<span></span></p>
                <p>Description:<span></span></p>
                <p>Location:<span></span></p>
                <p>Status:<span class="status">pending</span></p>
            </div>
            <div class="issue"><img width="300" height="150" src="../images/img3.jpg" alt="site_img">
                <p>Uploaded At:<span></span></p>
                <p>Description:<span></span></p>
                <p>Location:<span></span></p>
                <p>Status:<span class="status">resolved</span></p>
            </div>
            <div class="issue"><img width="300" height="150" src="../images/img4.jpg" alt="site_img">
                <p>Uploaded At:<span></span></p>
                <p>Description:<span></span></p>
                <p>Location:<span></span></p>
                <p>Status:<span class="status">pending</span></p>
            </div>

        </div>




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
    <!-- <div>
  
    <div role="alert">
      <h4 class="alert-heading">Welcome - <?php echo $_SESSION['name']?></h4>
      <p>Hey how are you doing? Welcome to iSecure. You are logged in as <?php echo $_SESSION['name']?>. Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.</p>
      <hr>
      <p class="mb-0">Whenever you need to, be sure to logout <a href="/loginsystem/logout.php"> using this link.</a></p>
    </div>
  </div> -->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>