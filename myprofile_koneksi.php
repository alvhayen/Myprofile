<?php
$host   = "localhost";
$user   = "root";
$pass   = ""
$db     = "myprofile";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM profiles WHERE id = 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<p>Name: " . $row["name"]. "</p>";
        echo "<p>Email: " . $row["email"]. "</p>";
        echo "<p>Phone: " . $row["phone"]. "</p>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
