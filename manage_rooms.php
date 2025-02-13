<?php
include 'db_config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $room_no = $_POST['room_no'];
    $status = $_POST['status'];

    $sql = "UPDATE rooms SET status='$status' WHERE room_no='$room_no'";

    if ($conn->query($sql) === TRUE) {
        echo "Room updated successfully!";
    } else {
        echo "Error: " . $conn->error;
    }
}
?>

<form method="POST">
    <input type="text" name="room_no" placeholder="Room Number" required>
    <select name="status">
        <option value="available">Available</option>
        <option value="booked">Booked</option>
    </select>
    <button type="submit">Update Room</button>
</form>
