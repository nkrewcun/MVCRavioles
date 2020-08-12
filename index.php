<?php

require_once 'includes.php';

$ravioleController = new RavioleController();
if (empty($_GET)) {
    $ravioleController->getAll();
} else if ($_GET['controller'] === 'raviole') {
    if ($_GET['action'] === 'get' && isset($_GET['id'])) {
        $ravioleController->get($_GET['id']);
    } else if ($_GET['action'] === 'add') {
        $ravioleController->displayAddForm();
    } else if ($_GET['action'] === 'insert') {
        $ravioleController->insert();
    } else if ($_GET['action'] === 'edit' && isset($_GET['id'])) {
        $ravioleController->displayEditForm($_GET['id']);
    } else if ($_GET['action'] === 'update' && isset($_GET['id'])) {
        $ravioleController->update($_GET['id']);
    } else if ($_GET['action'] === 'delete' && isset($_GET['id'])) {
        $ravioleController->delete($_GET['id']);
    }

} else {
    throw new Exception('La page demandée n\'existe pas', 404);
}
