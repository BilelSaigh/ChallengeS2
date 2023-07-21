<?php
namespace App\Controllers;
use App\Core;

class ApiDb
{

    function checkDb()
    {
        $rawData = file_get_contents("php://input");
        $formData = json_decode($rawData, true);
        $result = $this->saveFormData($formData);

        if ($result == 1) {
            http_response_code(201);
            echo json_encode(['status' => 'verif', 'message' => 'Data saved successfully']);
        } else {
            http_response_code(500);
            echo json_encode(['status' => 'error', 'message' => 'An error occurred while saving data']);
        }
    }

    function saveFormData($formData) {

        // Remplacez par votre propre logique
        return 1; // renvoie vrai si l'opération réussi, faux sinon
    }
}