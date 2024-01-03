<?php
// Connection parameters
$host = "localhost";
$username = "root";
$password = "";
$database = "hotel";

// Attempt to connect to MySQL
$con = mysqli_connect($host, $username, $password, $database);

// Check the connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

// The rest of your code goes here

// Close the connection when you're done with it
//mysqli_close($con);
?>


<?php
//$con = mysqli_connect("localhost","root","","hotel") or die(mysql_error());

?>
