<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "project_r";

$con = mysqli_connect($server, $username, $password, $database);

if (!$con) {
    die("Connection to the database failed due to " . mysqli_connect_error());
}

// Query to retrieve data from the reported_issues table
$sql = "SELECT * FROM reported_issues";
$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $image = $row['media'];
        $uploadedAt = $row['date_time'];
        $description = $row['desc_issue'];
        $location = $row['location'];
        $status = $row['status'];

        // Output the HTML structure with the retrieved data
        echo '<div class="issue">';
        echo '<img width="300" height="150" src="../images/' . $image . '" alt="site_img">';
        echo '<p>Uploaded At:<span>' . $uploadedAt . '</span></p>';
        echo '<p>Description:<span>' . $description . '</span></p>';
        echo '<p>Location:<span>' . $location . '</span></p>';
        echo '<p>Status:<span class="status">' . $status . '</span></p>';
        echo '</div>';
    }
} else {
    echo "No issues found.";
}

mysqli_close($con);
?>
