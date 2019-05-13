<?php
$servername = "sql108.epizy.com";
$username = "epiz_23895109";
$password = "46H0J0Bz";
$dbname = "epiz_23895109_ycdys";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// sql to delete a record
$id_post = $_GET["id_post"];
$sql = "DELETE FROM post_ WHERE id_post=$id_post";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
    header('Location: home.php');
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>