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
                "action"=>"",
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
                    "error"=>"Your firstname must contain at least 2 letters"
                ],
                "lastname"=>[
                    "class"=>"form-control form-control-solid mb-3 mb-lg-0",
                    "type"=>"text",
                    "placeholder"=>"Votre nom",
                    "min"=>2,
                    "max"=>120,
                    "error"=>"Your lastname must contain at least 2 letters"
                ],
                "email"=>[
                    "class"=>"form-control form-control-solid mb-3 mb-lg-0",
                    "type"=>"email",
                    "placeholder"=>"Votre email",
                    "error"=>"Your email is incorrect"
                ],
                "pwd"=>[
                    "class"=>"form-control form-control-solid mb-3 mb-lg-0",
                    "type"=>"password",
                    "placeholder"=>"Votre mot de passe",
                    "error"=>"Your password is incorrect",
                    "value"=> uniqid()
                ],
                "role"=>[
                    "type"=>"select",
                    "class"=>"form-select",
                    "options"=>["Choose user role ","0"=>"admin", "1"=>"editor","2"=>"moderator","3"=>"user"],
                    "error"=>"No role has been selected"
                ],
            ]
        ];
    }

}