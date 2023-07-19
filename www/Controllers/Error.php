<?php

namespace App\Controllers;

use App\Core\View;

class Error
{
    public  function errorRedirection($codeError): void
    {
        http_response_code($codeError);
        $view = new View("Error/".$codeError, "error");

    }
    public function error404(): void
    {
            $view = new View("Error/404", "error");
    }

}