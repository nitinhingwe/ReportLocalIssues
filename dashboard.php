<!DOCTYPE html>
<html>

<head>
    <title>Display Data in Table</title>
    <link href="../css files/issue.css" rel="stylesheet">
</head>
<body>
    <?php
    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "project_r";

    $con = mysqli_connect($server, $username, $password, $database);

    if (!$con) {
        die("Connection to the database failed due to " . mysqli_connect_error());
    }

    $sql = "SELECT * FROM reported_issues";
    $result = mysqli_query($con, $sql);
    ?>

    <table>
        <thead>
            <tr>
                <th>Sr</th>
                <th>Issue</th>
                <th>Image</th>
                <th>Issue Desc.</th>
                <th>Location</th>
                <th>Date</th>
                <th>Status</th>
                <!-- Add more table headers for other columns -->
            </tr>
        </thead>
        <tbody>
            <h3 style="text-align:centre">Reported Issues</h3>
            <?php
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . $row['sno'] . "</td>";
                echo "<td>" . $row['issue'] . "</td>";
                echo "<td>" . $row['media'] . "</td>";
                echo "<td>" . $row['desc_issue'] . "</td>";
                echo "<td>" . $row['location'] . "</td>";
                echo "<td>" . $row['date_time'] . "</td>";
                // Add more table cells for other columns
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>

    <?php
    $con->close();
    ?>
</body>
</html>
