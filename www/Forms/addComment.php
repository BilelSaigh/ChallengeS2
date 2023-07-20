<?php
namespace App\Forms;

use App\Forms\Abstract\AForm;

class AddComment extends AForm {

    protected $method = "POST";

    public function getConfig(): array
    {
        return [
            "config" => [
                "method" => $this->getMethod(),
                "action" => "", // Ajoutez l'URL d'action ici pour le traitement du formulaire
                "enctype" => "",
                "submit" => "Envoyer le commentaire", // Modifier le texte du bouton Soumettre
                "cancel" => "Annuler"
            ],
            "inputs" => [
                "email"=>[
                    "type"=>"email",
                    "placeholder"=>"Email Address",
                    "class"=>"form-control form-control-lg form-control-solid",
                    "id"=>"emailaddress",
                    "value"=>'',
                    "label"=>"Email",
                    "error"=>"Identifiant incorrect"
                ],
                "commentaire" => [
                    "type" => "textarea", // Utilisez un champ de texte multiligne pour le contenu du commentaire
                    "placeholder" => "Votre commentaire",
                    "min" => 2,
                    "max" => 1000, // Limitez la longueur du commentaire à 1000 caractères (à ajuster selon vos besoins)
                    "error" => "Votre commentaire doit faire entre 2 et 1000 caractères"
                ],
                
                // Vous pouvez ajouter d'autres champs ici si nécessaire pour le nom d'utilisateur, l'e-mail, etc.
            ]

        ];
    }
}
