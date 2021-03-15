<html>
<head>
<title>
</title></head>
<body>

<?php


echo "DATE: " . date("Y.m.d") . "<br>";

$studentslist = array("mymoon", "rohini", "vignesh");
echo "NUMBER OF STUDENTS:".count($studentslist)."</br>";


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mymoon";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, firstname, lastname FROM studentslist";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: ";
    ?> <b> <?php echo $row["id"]; ?> </b> <?php echo " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();


?>
</body></html>


