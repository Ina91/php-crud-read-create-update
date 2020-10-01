<?php
include __DIR__ . '/partials/template/header.php';
include __DIR__ . '/partials/update/server.php';
?>


<div class="container">
    <form class="" action="" method="post">
        <div class="form-group">
            <label for="roomNumber">Numero della stanza</label>
            <input type="text" class="form-control" id="roomNumber" name="roomNumber" value="<?php  echo $row['room_number']; ?>">
        </div>
        <div class="form-group">
            <label for="floor">Piano</label>
            <input type="text" class="form-control" id="floor" name="floor" value="<?php echo $row['floor']; ?>">
        </div>
        <div class="form-group">
            <label for="beds">Numero di letti</label>
            <input type="text" class="form-control" id="beds" name="beds" value="<?php echo $row['beds']; ?>">
        </div>
        <div class="form-group">
            <input type="submit" class="form-control bg-warning"  value="Modifica">
        </div>
    </form>
</div>


<?php
include __DIR__ . '/partials/template/footer.php';
 ?>
