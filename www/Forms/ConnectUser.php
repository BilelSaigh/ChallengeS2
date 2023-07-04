<?php

namespace App\Forms;

use App\Forms\Abstract\AForm;

class ConnectUser extends AForm
{
    protected $method = "POST";
    public function getConfig(): array
    {
        return [
            "config"=>[
                "method"=>$this->getMethod(),
                "action"=>"login",
                "enctype"=>"",
                "submit"=>"Se connecter",
                "cancel"=>"Annuler"
            ],
            "inputs" =>[
                "email"=>[
                    "type"=>"email",
                    "placeholder"=>"Votre email",
                    "error"=>"Les identifiants incorrects"
                ],
                "pwd"=>[
                    "type"=>"password",
                    "placeholder"=>"Votre mot de passe",
                    "error"=>"Les identifiants incorrects"
                ],
            ]
        ];
    }
}