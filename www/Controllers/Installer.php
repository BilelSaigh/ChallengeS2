<?php 

namespace App\Controllers;

class Installer
{
    public function index()
    {
        $filePath = './ChallengeJs/index.html';
        echo $filePath;
        if (file_exists($filePath)) {
            header('Content-Type: text/html');
            readfile($filePath);
        } else {
            // Gérer l'erreur si le fichier n'est pas trouvé
            throw new \Exception("Le fichier index.html n'a pas été trouvé");
        }
    }
}
