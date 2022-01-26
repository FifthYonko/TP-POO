
<?php

include(__DIR__ . '/../components/header.php');




foreach ($this->ligne as $annonce) {

?>

    <div class="card m-2" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title"> <span> <?= $annonce['id'] ?></span> <?= $annonce['title'] ?></h5>
            <p class="card-text"><?= $annonce['introduction']  ?></p>

            <a href="index.php?controller=Favoris&task=retirefavori&id=<?= $annonce['id'] ?>" class="btn btn-warning">Retirer</a>
            
        </div>
    </div>

<?php } ?>
</div>

<?php
include(__DIR__ . '/../components/footer.php');
?>