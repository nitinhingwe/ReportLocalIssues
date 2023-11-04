<?php
    $insert = false;
if(isset($_POST['name'])){
   
   $server = "localhost";
   $username = "root";  
   $password = "";
   $database = "project_r";

   $con = mysqli_connect($server, $username, $password, $database);

   if(!$con){
    die("connection to this database failed due to" . mysqli_connect_error());
   }
   echo "Success connecting to the db";

   $issue = $_POST['issue'];
   $media = $_POST['media'];
   $desc_issue = $_POST['desc_issue'];
   $location = $_POST['location'];
   $date_time = $_POST['date_time'];

   $sql = "INSERT INTO `project_r` . `reported_issues` (`issue`, `media`, `desc_issue`, `location`, `date_time`) VALUES ('$issue', '$media', '$desc_issue', '$location', current_timestamp());";
   echo $sql;

   if($con->query($sql) == true){
      // echo "Success";
      $insert = true;
   }
   else{
      echo "ERROR: $sql <br> $con->error";
   }

    // Check if a file was uploaded
   if(isset($_FILES['media']) && !empty($_FILES['media']['name'])) {
    $file_name = $_FILES['media']['name'];
    $file_tmp = $_FILES['media']['tmp_name'];
    $file_type = $_FILES['media']['type'];

    $upload_directory = "uploads/"; 

    // Define the path where the file will be saved on the server
    $file_path = $upload_directory . $file_name;

    // Move the uploaded file to the specified directory
    if (move_uploaded_file($file_tmp, $file_path)) {
        echo "File uploaded successfully.";
        // You can store $file_path in your database to reference the uploaded file later.
    } else {
        echo "Error uploading file.";
    }
    }

   $con->close();
   
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Report Issues</title>
    <link href="style.css" rel="stylesheet">
</head>
<body>

    <?php
    if($insert == false){
    echo "<p class='submitMsg'>Great! Issue has been reported to the authority. Now relax we'll fix it soon.</p>";
    }
    ?>
    <div id="sign_up">
    <h3>Report your Issue and We will fix it.</h3>
    <form action="report_issues.php" method="post">
        <label for="issue">Issue:</label>
        <input type="text" name="issue" id="issue" placeholder="Enter your Issue"><br>

        <label for="media">Upload Image or Video:</label>
        <input type="file" name="media" id="media"><br>

        <label for="desc_issue">Describe Issue:</label>
        <input type="text" name="desc_issue" id="desc_issue"><br>

        <label for="location">Location of Issue:</label>
        <input type="text" name="location" id="location" placeholder="Enter the location of the issue"><br>

        <input type="submit" value="Submit">
    </form>
    </div>

</body>
</html>
