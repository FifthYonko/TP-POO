<?php

include(__DIR__ . '/../components/header.php');
?>



<h1>Liste annonces</h1>

<div class="d-flex flex-wrap">


<?php
foreach ($resultat as $annonce) {

?>

    <div class="card m-2" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title"> <span> <?= $annonce['id'] ?></span> <?= $annonce['title'] ?></h5>
            <p class="card-text"><?= $annonce['introduction']  ?></p>

            <a href="index.php?controller=Annonces&task=addfavori&id=<?= $annonce['id'] ?>" class="btn btn-success">Favoris</a>
            <a href="index.php?controller=Annonces&task=deleteByID&id=<?= $annonce['id'] ?>" class="btn btn-danger">Supprimer</a>
        </div>
    </div>

<?php } ?>
</div>



<?php
include(__DIR__ . '/../components/footer.php');
?>