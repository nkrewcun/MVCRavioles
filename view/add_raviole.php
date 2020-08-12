<?php
/**
 * @var $raviole Raviole
 * @var $errors array
 */
$title = 'Ajouter une recette';
include_once 'parts/head.php';
?>

    <div class="container">
        <h2>Ajouter une recette : </h2>
        <a href="index.php" class="btn btn-secondary">Retour</a>
        <form method="post" action="index.php?controller=raviole&action=insert" enctype="multipart/form-data">
            <div class="form-group">
                <div class="form-group">
                    <label for="ingredient_principal">Ingrédient principal</label>
                    <input type="text" class="form-control" id="ingredient_principal" name="ingredient_principal"
                           value="<?php echo isset($raviole) ? $raviole->getIngredientPrincipal() : null; ?>" required/>
                </div>

                <div class="form-group">
                    <label for="titre">Titre</label>
                    <input type="text" class="form-control" id="titre" name="titre"
                           value="<?php echo isset($raviole) ? $raviole->getTitre() : null; ?>" required/>
                </div>

                <div class="form-group">
                    <label for="recette">Recette</label>
                    <textarea class="form-control" id="recette" name="recette"
                              rows="3"><?php echo isset($raviole) ? $raviole->getRecette() : null; ?></textarea>
                </div>

                <div class="form-group">
                    <label for="file">Ajouter une image</label>
                    <input type="file" class="form-control-file" id="file" name="file" accept="image/jpeg, image/png, image/gif">
                </div>
            </div>

            <input type="submit"/>
            <?php
            if (isset($errors)) {
                if (count($errors)) {
                    echo(' <h2>Erreurs lors de la soumission du formulaire : </h2>');
                    foreach ($errors as $error) {
                        echo('<div>' . $error . '</div>');
                    }
                }
            }
            ?>
        </form>
    </div>

<?php
include_once 'parts/foot.php';
