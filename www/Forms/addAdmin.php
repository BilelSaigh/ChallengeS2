<?php

namespace App\Forms;

use App\Forms\Abstract\AForm;

class AddAdmin extends AForm
{
    protected $method = "POST";

    public function getConfig(): array
    {
        return [
            "config"=>[
                "method"=>$this->getMethod(),
                "action"=>"users",
                "id"=> "kt_modal_add_user_form",
                "enctype"=>"",
                "submit"=>"S'inscrire",
                "cancel"=>"Annuler"
            ],
            "inputs" =>[
                "firstname"=>[
                    "class"=>"form-control form-control-solid mb-3 mb-lg-0",
                    "type"=>"text",
                    "placeholder"=>"Votre prénom",
                    "min"=>2,
                    "max"=>60,
                    "error"=>"Votre prénom doit faire entre 2 et 60 caractères"
                ],
                "lastname"=>[
                    "class"=>"form-control form-control-solid mb-3 mb-lg-0",
                    "type"=>"text",
                    "placeholder"=>"Votre nom",
                    "min"=>2,
                    "max"=>120,
                    "error"=>"Votre nom doit faire entre 2 et 120 caractères"
                ],
                "email"=>[
                    "class"=>"form-control form-control-solid mb-3 mb-lg-0",
                    "type"=>"email",
                    "placeholder"=>"Votre email",
                    "error"=>"Le format de votre email est incorrect"
                ],
                "pwd"=>[
                    "class"=>"form-control form-control-solid mb-3 mb-lg-0",
                    "type"=>"text",
                    "placeholder"=>"Votre mot de passe",
                    "error"=>"Votre mot de passe est incorrect",
                    "value"=> uniqid()
                ],
                "role"=>[
                    "type"=>"select",
                    "class"=>"form-select",
                    "options"=>["Choose user role ","0"=>"abonné/e", "1"=>"admin","3"=>"editor","4"=>"moderator"],
                    "error"=>"Aucun role n'a été séléctionné"
                ],
//                "role"=>[
//                    "type"=>"radio",
//                    "class"=>"form-check-input me-3",
//                    "error"=>"Aucun role n'a été séléctionné",
//                    "value" => ["0"=>"user","1"=>"admin","3"=>"editor","4"=>"moderator"]
//                ]
            ]
        ];
    }

}