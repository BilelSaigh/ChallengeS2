<?php

namespace App\Forms;

use App\Forms\Abstract\AForm;

class newPwd  extends AForm
{
    protected $method = "POST";
    public function getConfig(): array
    {
        return [
            "config"=>[
                "method"=>$this->getMethod(),
                "action"=>"editUser",
                "enctype"=>"",
                "id"=>"kt_signin_change_password",
                "class"=>"form flex-row-fluid d-none",
                "submit"=>[
                    "value"=>"Update Password",
                    "id"=>"kt_password_submit",
                    "class"=>"btn btn-primary me-2 px-6"
                ],
                "cancel"=>[
                    "value"=>"Cancel",
                    "id"=>"kt_password_cancel",
                    "class"=>"btn btn-color-gray-400 btn-active-light-primary px-6"
                ]
            ],
            "inputs" =>[
                "currentPwd"=>[
                    "type"=>"password",
                    "placeholder"=>"",
                    "class"=>"form-control form-control-lg form-control-solid",
                    "id"=>"currentpassword",
                    "value"=>$_SESSION["user"]["pwd"],
                    "label"=>"Current Password",
                    "error"=>"Votre mot de passe est incorrect"
                ],
                "pwd"=>[
                    "type"=>"password",
                    "placeholder"=>"",
                    "class"=>"form-control form-control-lg form-control-solid",
                    "id"=>"newpassword",
                    "label"=>"New Password",
                    "error"=>"Votre mot de passe est incorrect"
                ],
                "pwdConfirm"=>[
                    "type"=>"password",
                    "placeholder"=>"",
                    "class"=>"form-control form-control-lg form-control-solid",
                    "id"=>"confirmpassword",
                     "label"=>"Confirm Password",
                    "confirm"=>"pwd",
                    "error"=>"Mot de passe de confirmation incorrect"
                ]
            ]
        ];
    }
}