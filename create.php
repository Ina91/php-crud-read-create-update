<?php
include __DIR__ . '/partials/template/header.php';

?>


<div class="container p-3">
    <form class="" action="partials/create/server.php" method="post">
        <div class="form-group">
            <label for="roomNumber">Numero della stanza</label>
            <input type="text" class="form-control" id="roomNumber" name="roomNumber" value="" placeholder="Inserisci il numero della stanza">
        </div>
        <div class="form-group">
            <label for="floor">Piano</label>
            <input type="text" class="form-control" id="floor" name="floor" value="" placeholder="Inserisci il piano">
        </div>
        <div class="form-group">
            <label for="beds">Numero di letti</label>
            <input type="text" class="form-control" id="beds" name="beds" value="" placeholder="Inserisci il numero di letti">
        </div>

        <div class="form-group">
            <input type="submit" class="form-control bg-warning"  value="Inserisci">
        </div>
    </form>
</div>

<?php
    include __DIR__ . '/partials/template/footer.php';
?>
