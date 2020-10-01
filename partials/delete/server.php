<?php
include __DIR__ . '/../database.php';

if (empty($_POST['id'])) {
    die('nessun id');
}

$id =$_POST['id']; // posso metterla anche dopo al bind_param
$sql = "DELETE FROM stanze  WHERE id = ?" ;
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id);
$stmt -> execute();

if ($stmt && $stmt->affected_rows >0) {
    header("Location: $basepath/index.php?roomId=$id");
}else{
    echo "errore durante la cancellazione";
}

$conn->close();
?>
