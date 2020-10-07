<?php
include __DIR__ . '/../database.php';

include __DIR__ .'/../functions.php';


if (empty($_POST['id'])) {
    die('nessun id');
}

$id = $_POST['id'];

removeId($conn, 'stanze', $id, $basepath);

//senza fz:

// if (empty($_GET['id'])) {          //controllo se è vuoto muore e non mi fa vedere nulla
//     die('nessun id');
// }
//
// $id =$_GET['id'];
// $sql = "SELECT id,room_number, floor,beds FROM stanze  WHERE id=$id" ;
// $result = $conn->query($sql);
//
// if ($result && $result->num_rows > 0) {
//     $row =$result->fetch_assoc();
//
// } elseif ($result) {
//     echo "0 results";
// } else {
//     echo "query error";
// }
// $conn->close();
?>
