<?php
/**
 * @var $raviole Raviole
 */
$title = $raviole->getTitre();
include_once 'parts/head.php';
?>
    <div class="card mb-3">
        <?php echo $raviole->getFile() ? '<img src="assets/uploads/images/' . $raviole->getFile() . '" alt="' . $raviole->getTitre() . '">' : 'Pas d\'image' ?>
        <div class="card-body">
            <h5 class="card-title display-4"><?php echo $raviole->getTitre(); ?></h5>
            <p class="card-text lead">Ingrédient principal :
                <strong><?php echo $raviole->getIngredientPrincipal(); ?></strong></p>
            <p class="card-text mb-0">Recette : </p>
            <p class="card-text ml-2"><?php echo $raviole->getRecette() ? $raviole->getRecette() : 'Pas de recette pour le moment'; ?></p>
            <div class="actionButtons">
                <div class="leftButtons">
                    <a href="index.php" class="btn btn-secondary">Retour</a>
                </div>
                <div class="rightButtons">
                    <a href="index.php?controller=raviole&action=edit&id=<?php echo $raviole->getId(); ?>" role="button"
                       class="btn btn-secondary">Modifier</a>
                    <a href="index.php?controller=raviole&action=delete&id=<?php echo $raviole->getId(); ?>"
                       role="button"
                       class="btn btn-secondary">Supprimer</a>
                </div>
            </div>
        </div>
    </div>

<?php
include_once 'parts/foot.php';
