<?php
/**
 * @var $raviole Raviole
 */
$title = $raviole->getTitre();
include_once 'parts/head.php';
?>

    <a href="index.php" class="btn btn-secondary">Revenir en arrière</a>
    <div class="card mb-3 mx-lg-5 mt-lg-5">
        <div class="row no-gutters">
            <div class="col-md-4">
                <img src="assets/uploads/images/<?php echo $raviole->getFile(); ?>"
                     alt="<?php echo $raviole->getTitre(); ?>"
                     class="card-img"/>
            </div>
            <div class="col-md-8 pl-2">
                <h3 class="card-title"><?php echo $raviole->getTitre(); ?></h3>
                <p class="card-text"><strong>Ingrédient principal : </strong><?php echo $raviole->getIngredientPrincipal(); ?></p>
                <p class="card-text"><strong>Recette : </strong><?php echo $raviole->getRecette() ? $raviole->getRecette() :'Pas de recette pour le moment'; ?></p>
                <a href="index.php?controller=raviole&action=edit&id=<?php echo $raviole->getId(); ?>" role="button"
                   class="btn btn-secondary">Modifier</a>
                <a href="index.php?controller=raviole&action=delete&id=<?php echo $raviole->getId(); ?>" role="button"
                   class="btn btn-secondary">Supprimer</a>
            </div>
        </div>
    </div>
    <div class="card mb-3">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
    </div>

<?php
include_once 'parts/foot.php';
