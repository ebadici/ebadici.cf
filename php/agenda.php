<html>
<body>

<link rel="stylesheet" href="styleagenda.css">
<div id="php">
<?php
$servername = "localhost";
$username = "user";
$password = "password";
$dbname = "exemplu";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT id, firstname, lastname, phone FROM MyGuests";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. " - Phone: " . $row["phone"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>

<br><a href="contactnou.html">Contact nou</a>
</div>
</body>
</html>
