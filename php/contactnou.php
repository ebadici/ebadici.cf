<html>
<body>


<?php

$servername = "localhost";
$username = "emil";
$password = "1234";
$dbname = "exemplu";

$firstname=$_POST["firstname"];
$lastname=$_POST["lastname"];
$phone=$_POST["phone"];
 

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO MyGuests (firstname, lastname, phone)
VALUES  ('$firstname', '$lastname', '$phone')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully!. <br>";
    echo $sql;
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

<br><a href="agenda.php"><---Înapoi la agendă</a>

</body>
</html>