<?php

namespace App\Core;

class Security
{
    public function isLoggedIn(): bool
    {
        return isset($_SESSION['user']['id']);
    }

    public function whoIAm($role): bool
    {
        if(empty($role)){
            $role = array("0","1","2","3");
        }
        return isset($_SESSION['user']['role']) && in_array($_SESSION['user']['role'],$role);
    }
}