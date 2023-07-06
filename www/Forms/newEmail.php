<?php

namespace App\Forms;

class newEmail extends Abstract\AForm
{
    protected $method = "POST";
    public function getConfig(): array
    {
        return [
            "config"=>[
                "method"=>$this->getMethod(),
                "id"=>"kt_signin_change_email",
                "action"=>"editUser",
                "enctype"=>"",
                "submit"=>[
                    "value"=>"Update Email",
                    "id"=>"kt_signin_submit",
                    "class"=>"btn btn-primary me-2 px-6"
                ],
                "cancel"=>[
                    "value"=>"Cancel",
                    "id"=>"kt_signin_cancel",
                    "class"=>"btn btn-color-gray-400 btn-active-light-primary px-6"
                ]
            ],
                "inputs" =>[
                    "newEmail"=>[
                        "type"=>"email",
                        "placeholder"=>"Email Address",
                        "class"=>"form-control form-control-lg form-control-solid",
                        "id"=>"emailaddress",
                        "value"=>$_SESSION["user"]["email"],
                        "label"=>"Enter New Email Address",
                        "error"=>"Les identifiants incorrects"
                    ],
                    "pwd"=>[
                        "type"=>"password",
                        "class"=>"form-control form-control-lg form-control-solid",
                        "placeholder"=>"",
                        "id"=>"confirmemailpassword",
                        "value"=>"",
                        "label"=>"Confirm Password",
                        "error"=>"Les identifiants incorrects"
                    ],
                ]
        ];
    }
}