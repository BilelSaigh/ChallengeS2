<?php
namespace App\Core;

class Verificator{

    public static function form(array $config, array $data): array
    {
        $listOfErrors = [];
        if(count($config["inputs"]) != count($data)-1){
            die("Tentative de Hack");
        }

        foreach ($config["inputs"] as $name=>$input){

            if(!empty($input["required"]) || empty($data[$name]) ){
                $listOfErrors[]=$name ." ne peut pas être vide";
            }
            if($input["type"]=="email" && !self::checkEmail($data[$name])){
                $listOfErrors[]=$input["error"];
            }
            if($input["type"]=="password" && $data[$name] != $data["pwdConfirm"] && !self::checkPwd($data[$name]) && empty($input["confirm"])) {
                $listOfErrors[]=$input["error"];
            }

            if( !empty($input["confirm"]) && $data[$name]!=$data[$input["confirm"]]  ){
                $listOfErrors[]=$input["error"];
            }

        }

        return $listOfErrors;
    }

    public static function checkEmail($email): bool
    {
        return filter_var($email, FILTER_VALIDATE_EMAIL);
    }
    public static function checkPwd($pwd): bool
    {
        return strlen($pwd)>=8
            && preg_match("/[0-9]/",$pwd, $result )
            && preg_match("/[A-Z]/",$pwd, $result );
    }


}