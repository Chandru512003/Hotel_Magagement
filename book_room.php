<?php
include 'db_config.php';
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $_SESSION['username'];
    $room = $_POST['room'];
    $date = $_POST['date'];

    $sql = "INSERT INTO bookings (user, room, date) VALUES ('$user', '$room', '$date')";
    
    if ($conn->query($sql) === TRUE) {
        echo "Room booked successfully!";
    } else {
        echo "Error: " . $conn->error;
    }
}
?>

<form method="POST">
    <input type="text" name="room" placeholder="Room Number" required>
    <input type="date" name="date" required>
    <button type="submit">Book Now</button>
</form>
