<?php
namespace App\Controllers;

use App\Core\View;

class User
{
    public function index()
    {
        $pseudo = "Prof";
        $view = new View("Main/index", "front");
        $view->assign("pseudo", $pseudo);
        
        // Vérifier le format de retour demandé
        $format = $this->getRequestFormat();
        
        // Adapter la réponse en fonction du format demandé
        if ($format === 'json') {
            header('Content-Type: application/json');
            echo json_encode(['pseudo' => $pseudo]);
        }else {
            // Afficher la vue par défaut pour les autres formats
            include "Main/index.view.php";
        }
    }

    public function contact()
{
    // Vérifier le format de retour demandé
    $format = $this->getRequestFormat();

    // Adapter la réponse en fonction du format demandé
    if ($format === 'json') {
        header('Content-Type: application/json');
        echo json_encode(['message' => 'Contact form submitted']);
    }else {
        // Afficher la vue par défaut pour les autres formats
        include "Main/contact.view.php";
    }
}

    private function getRequestFormat()
    {
        // Logique pour récupérer le format de retour demandé
        // Cela peut être basé sur des en-têtes HTTP ou des paramètres de requête
        // Dans cet exemple, je suppose que le format est spécifié via un paramètre "format" dans l'URL
    
        $format = 'html'; // Format par défaut
    
        if (isset($_GET['format'])) {
            $format = strtolower($_GET['format']);
        }
    
        return $format;
    }
}