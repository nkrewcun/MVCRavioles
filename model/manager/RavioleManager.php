<?php


class RavioleManager extends DbManager
{
    /**
     * RavioleManager constructor.
     */
    public function __construct()
    {
        parent::__construct();
    }

    public function selectAll()
    {
        $ravioles = [];
        $query = $this->pdo->prepare('SELECT * FROM raviole;');
        $query->execute();
        foreach ($query->fetchAll() as $row) {
            $ravioles[] = new Raviole($row['ingredient_principal'], $row['titre'], $row['recette'], $row['file'], $row['id']);
        }
        return $ravioles;
    }

    public function select($id)
    {
        $query = $this->pdo->prepare('SELECT * FROM raviole WHERE id = :id;');
        $query->execute(['id' => $id]);
        $result = $query->fetch();
        return new Raviole($result['ingredient_principal'], $result['titre'], $result['recette'], $result['file'], $result['id']);
    }

    public function insert(Raviole $raviole)
    {
        $query = $this->pdo->prepare('INSERT INTO raviole (ingredient_principal, titre, recette, file) VALUES (:ingredient_principal, :titre, :recette, :file);');
        $query->execute([
            'ingredient_principal' => $raviole->getIngredientPrincipal(),
            'titre' => $raviole->getTitre(),
            'recette' => $raviole->getRecette(),
            'file' => $raviole->getFile()
        ]);
        $raviole->setId($this->pdo->lastInsertId());
    }

    public function update(Raviole $raviole)
    {
        $query = $this->pdo->prepare('UPDATE raviole SET ingredient_principal  = :ingredient_principal, titre = :titre, recette = :recette, file = :file WHERE id = :id;');
        $query->execute([
            'ingredient_principal' => $raviole->getIngredientPrincipal(),
            'titre' => $raviole->getTitre(),
            'recette' => $raviole->getRecette(),
            'file' => $raviole->getFile(),
            'id' => $raviole->getId()
        ]);
    }

    public function delete($id) {
        $query = $this->pdo->prepare('DELETE FROM raviole WHERE id = :id');
        $query->execute(['id' => $id]);
    }
}
