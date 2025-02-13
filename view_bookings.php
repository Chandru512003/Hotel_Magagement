<?php
include 'db_config.php';

$sql = "SELECT * FROM bookings";
$result = $conn->query($sql);

echo "<h2>Bookings</h2>";
while ($row = $result->fetch_assoc()) {
    echo "User: " . $row['user'] . " - Room: " . $row['room'] . " - Date: " . $row['date'] . "<br>";
}
?>
