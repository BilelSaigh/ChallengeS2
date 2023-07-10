<?php

require_once 'Models/Page.php';
require_once 'Models/PageMemento.php';

// Créez une instance de Page
$page = new App\Models\Page();

// Effectuez des modifications sur la page
$page->setTitle('Nouveau titre');
$page->setContent('Nouveau contenu');
$page->setModificationDate(date('Y-m-d H:i:s'));
$page->setHTML('<html><body><h1>Contenu HTML</h1><h2>Sous-titre</h2></body></html>');

// Créez une instance de PageMemento
$memento = $page->createMemento();

// Restaurez la page à partir du memento
$page->restoreFromMemento($memento);

// Vérifiez si la restauration a été effectuée avec succès
echo 'Titre restauré : ' . $page->getTitle() . '<br>';
echo 'Contenu restauré : ' . $page->getContent() . '<br>';
echo 'Date de modification restaurée : ' . $page->getModificationDate() . '<br>';
echo 'Contenu HTML restauré : ' . $page->getHTML() . '<br>';
