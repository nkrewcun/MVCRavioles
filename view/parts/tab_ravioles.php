<table class="table table-striped">
    <thead class="thead-dark">
    <tr>
        <th>Image</th>
        <th>Ingredient principal</th>
        <th>Titre</th>
        <th>Actions</th>
    </tr>
    </thead>

    <tbody>
    <?php
    /**
     * @var $ravioles array
     * @var $raviole Raviole
     */
    foreach ($ravioles as $raviole) {
        ?>
        <tr>
            <td><?php echo $raviole->getFile() ? '<img src="assets/uploads/images/' . $raviole->getFile() .'" alt="' . $raviole->getTitre() . '">' : 'Pas d\'image' ?></td>
            <td><?php echo $raviole->getIngredientPrincipal(); ?></td>
            <td><?php echo $raviole->getTitre(); ?></td>
            <td>
                <a href="index.php?controller=raviole&action=get&id=<?php echo $raviole->getId(); ?>" role="button"
                   class="btn btn-secondary">Détails</a>
                <a href="index.php?controller=raviole&action=edit&id=<?php echo $raviole->getId(); ?>" role="button"
                   class="btn btn-secondary">Modifier</a>
                <a href="index.php?controller=raviole&action=delete&id=<?php echo $raviole->getId(); ?>" role="button"
                   class="btn btn-secondary">Supprimer</a>
            </td>
        </tr>
        <?php
    }
    ?>
    </tbody>
</table>
