<?php
namespace App\Controllers;
use App\Core;

class ApiUser
{

    function checkUser()
    {
        $rawData = file_get_contents("php://input");
        $formData = json_decode($rawData, true);
        $result = $this->saveFormData($formData);

        if ($result == 1) {
            http_response_code(202);
            echo json_encode(['status' => 'verif', 'message' => 'Data saved successfully']);
        } else {
            http_response_code(500);
            echo json_encode(['status' => 'error', 'message' => 'An error occurred while saving data']);
        }
    }

    function saveFormData($formData) {
        // verification si présence user en bdd avec un fetchall() depuis App/core/sql


        // Remplacez par votre propre logique
        return 1; // renvoie vrai si l'opération réussi, faux sinon
    }
}