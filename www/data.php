<?php
// Database connection details
$servername = "";
$username = "root";
$password = "UhavXAKyJAdEUvdRaUHbWygfdXzpshwUKzb";
$dbname = "poros";
$tableName = "week1";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL query to select all data from the table
$sql = "SELECT * FROM $$tableName$$";
$result = $conn->query($sql);

// Check if there are results and display them in an HTML table
if ($result->num_rows > 0) {
    echo "<table border='1' style='width:100%; border-collapse: collapse;'>";
    echo "<tr>";
    // Output the column headers
    while($fieldinfo = $result->fetch_field()) {
        echo "<th style='padding: 8px; text-align: left; background-color: #f2f2f2;'>$$fieldinfo->name$$</th>";
    }
    echo "</tr>";

    // Output the data rows
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        foreach($row as $cell) {
            echo "<td style='padding: 8px; text-align: left;'>$$cell$$</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

// Close the connection
$conn->close();
?>
