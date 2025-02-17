<?php
	echo "Hello World";
	var_dump($_POST);
?>
<br>
<br>
<br>
<br>
<br>
<?php
		$servername = "localhost";
		$username = "root";
		$password = "";
		$database = "lorraine";
		
		// Create connection
		$conn = new mysqli($servername, $username, $password);

		// Check connection
		if ($conn->connect_error) {
		  die("Connection failed: " . $conn->connect_error);
		}
		echo "Connected successfully";
?>


<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "lorraine";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO MyGuests (id,lastname,first name)
VALUES ('', '$lastname', '$firstname')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>