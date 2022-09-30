<?php
    $aDeviner = 150;
    require "header.php";

    $values = filter_input_array(INPUT_GET);
    if ($values !== null) {
        extract($values);
        if ($chiffre > $aDeviner) {
            $html = '<div class="text-danger w-25 m-3">Votre chiffre est trop grand !!!</div>';
        }elseif ($chiffre < $aDeviner) {
            $html = '<div class="text-danger w-25 m-3">Votre chiffre est trop petit !!!</div>';
        } else {
            $html = '<div class="text-success w-25 m-3">Bien Joué !!!</div>'; 
        } 
    } 
?>
<?= $html; ?>
<form class="form-inline d-flex w-25 justify-content-between" action="/jeu.php" method="GET">
    <div class="form-group">
        <input type="number" class="form-control mx-3 w-75" name="chiffre" id="aDeviner" placeholder="Entre 0 et 500">
    </div>
    <button type="submit" class="btn btn-primary mx-1">Deviner</button>
</form>

<?php require "footer.php"; ?>