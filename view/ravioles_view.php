<?php
$title = 'Accueil';
include_once 'parts/head.php';
?>

    <div class="jumbotron jumbotron-fluid">
        <div class="container text-white text-center">
            <h1>Bienvenue sur <u>Recettes de ravioles</u></h1>
            <h2 class="display-4">Vos ravioles seront délicieuses !</h2>
            <p>Nous listons pour vous un ensemble de recettes de ravioles. Vous pouvez également rajouter votre propre recette originale et délicieuse !</p>
        </div>
    </div>
    <div class="container">
        <h2>Nos recettes</h2>
        <a href="index.php?controller=raviole&action=add" class="btn btn-secondary mb-2">Ajouter une recette</a>
        <?php include_once 'parts/tab_ravioles.php'; ?>
    </div>

<?php
include_once 'parts/foot.php';
