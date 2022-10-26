<?php 
    $title = "Contact Us";
    require 'config.php';
    require 'func.php';
    $creneaux = creneaux_html(CRENEAUX);
    require "header.php";
?>
<div class="row">
    <div class="col-md-8">
        <h2>
            Nous contacter
        </h2>
        < dolor sit, amet consectetur adipisicing elit. Possimus molestiae tempora quod provident nisi, aperiam rerum,
            praesentium ratione sunt hic quidem! Quam consectetur excepturi dolorem recusandae magnam, sed ex suscipit.
            </p>
    </div>
    <div class="col-md-4">
        <?= $creneaux ?>
    </div>
</div>

<?php require "footer.php";?>