<?php


class RavioleController
{
    private $ravioleManager;

    /**
     * RavioleController constructor.
     * @param $ravioleManager
     */
    public function __construct()
    {
        $this->ravioleManager = new RavioleManager();
    }

    public function getAll()
    {
        $ravioles = $this->ravioleManager->selectAll();

        require 'view/ravioles_view.php';
    }

    public function get($id)
    {
        $raviole = $this->ravioleManager->select($id);

        require 'view/raviole_view.php';
    }

    public function displayAddForm()
    {
        require 'view/add_raviole.php';
    }

    public function insert()
    {
        $raviole = new Raviole($_POST['ingredient_principal'], $_POST['titre'], $_POST['recette']);
        $image = $_FILES['file'];
        $errors = $this->validForm($raviole, $image);
        if (!count($errors)) {
            if ($image['error'] === 0) {
                $raviole->setFile($this->uploadImage($image, null));
            }
            $this->ravioleManager->insert($raviole);
            header('Location: index.php');
        } else {
            require 'view/add_raviole.php';
        }
    }

    public function displayEditForm($id)
    {
        $raviole = $this->ravioleManager->select($id);

        require 'view/edit_raviole.php';
    }

    public function update($id)
    {
        $raviole = $this->ravioleManager->select($id);
        $raviole->setIngredientPrincipal($_POST['ingredient_principal']);
        $raviole->setTitre($_POST['titre']);
        $raviole->setRecette($_POST['recette']);
        $image = $_FILES['file'];
        $errors = $this->validForm($raviole, $image);
        if (!count($errors)) {
            if ($image['error'] === 0) {
                $raviole->setFile($this->uploadImage($image, $raviole->getFile()));
            }
            $this->ravioleManager->update($raviole);
            header('Location: index.php?controller=raviole&action=get&id=' . $raviole->getId());
        } else {
            require 'view/edit_raviole.php';
        }
    }

    public function delete($id)
    {
        $raviole = $this->ravioleManager->select($id);
        $this->ravioleManager->delete($id);
        unlink('assets/uploads/images/' . $raviole->getFile());
        header('Location: index.php');
    }

    private function validForm(Raviole $raviole, $image)
    {
        $errors = [];
        if (empty($raviole->getIngredientPrincipal())) {
            $errors[] = 'L\'ingrédient principal est requis.';
        } else if (preg_match("/\d/i", $raviole->getIngredientPrincipal())) {
            $errors[] = 'L\'ingrédient principal ne peut pas contenir de chiffres';
        }
        if (empty($raviole->getTitre())) {
            $errors[] = 'Le titre est requis';
        } else if (preg_match("/\d/i", $raviole->getTitre())) {
            $errors[] = 'Le titre ne peut pas contenir de chiffres';
        }
        if (empty($raviole->getRecette())) {
            $raviole->setRecette(null);
        }
        $imageError = $this->validImage($image);
        if ($imageError) {
            $errors[] = $imageError;
        }
        return $errors;
    }

    private function validImage($image)
    {
        $error = '';
        if (isset($image) && $image['error'] === 0) {
            if ($image['size'] <= 1000000) {
                $extensionFile = $image['type'];
                $authorizedExtensions = ['image/jpeg', 'image/png', 'image/gif'];
                if (!in_array($extensionFile, $authorizedExtensions)) {
                    $error = 'Je n\'accepte que des images';
                }
            } else {
                $error = 'le fichier est trop lourd pour un petit serveur ... ';
            }
        }
        return $error;
    }

    private function uploadImage($image, $ravioleFile)
    {
        if (!$ravioleFile) {
            $ravioleFile = uniqid() . '.' . pathinfo($image['name'])['extension'];
        }
        move_uploaded_file($image['tmp_name'], 'assets/uploads/images/' . $ravioleFile);
        return $ravioleFile;
    }
}
