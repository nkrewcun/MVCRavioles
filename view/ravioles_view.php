<?php
$title = 'Accueil';
include_once 'parts/head.php';
?>

    <div class="jumbotron jumbotron-fluid">
        <div class="container text-white text-center">
            <h2>Bienvenue sur <u>Recettes de ravioles</u></h2>
            <h3 class="display-4">Vos ravioles seront délicieuses !</h3>
            <p>Nous listons pour vous un ensemble de recettes de ravioles. Vous pouvez également rajouter votre propre recette originale et délicieuse !</p>
        </div>
    </div>
    <div class="container">
        <h1>Recettes de ravioles</h1>
        <a href="index.php?controller=raviole&action=add" class="btn btn-secondary">Ajouter une recette</a>
        <?php include_once 'parts/tab_ravioles.php'; ?>
    </div>

<?php
include_once 'parts/foot.php';
