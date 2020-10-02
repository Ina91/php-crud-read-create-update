<?php
    include __DIR__ . '/../database.php';

    $sql = "UPDATE stanze SET room_number = ?, floor = ? , beds = ? WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('iiii', $roomNumber, $floor, $beds, $id);


    $roomNumber = $_POST['roomNumber'];
    $floor = $_POST['floor'];
    $beds = $_POST['beds'];
    $id = $_POST['ID'];

    $stmt->execute();
    if ($stmt && $stmt->affected_rows > 0) {
         header("Location: $basepath/show.php?id=$id"); //ritorno alla pagina show
    }elseif ($stmt && $stmt->affected_rows == 0) {
        echo "Nessun dato modificato";
    } else {
        die('Errore! Hai inserito un dato non valido');
    }

    $stmt->close();
    $conn->close();

 ?>
