<?php
include __DIR__ .'/../database.php';

if (empty($_POST['roomNumber'])) {
    die('Numero stanza non inserito');
}

if (empty($_POST['floor'])) {
    die('Piano non inserito');
}

if (empty($_POST['beds'])) {
    die('numero letti non inserito');
}

$sql = "INSERT INTO stanze (room_number, floor, beds, created_at, updated_at) VALUES(?,?,?,NOW(),NOW())";

$stmt =$conn->prepare($sql);
$stmt->bind_param("iii", $room_Number, $floor, $beds);

$room_Number = $_POST['roomNumber'];
$floor = $_POST['floor'];
$beds = $_POST['beds'];

$stmt->execute();

if ($stmt && $stmt->affected_rows > 0) {
    header("Location: $basepath/show.php?id=$stmt->insert_id");
} elseif ($stmt) {
    die('Nessun inserimento effettuato');
} else {
    die('Error');
}

$stmt -> close();
$conn->close();

?>
