<?php
namespace App\Controllers;
use App\Core\View;
use App\Forms\AddUser;
use App\Forms\ConnectUser;
use App\Models\User;
use App\Core\Verificator;

class Security{

    public function login(): void
{
    echo "Login";
    $connect = new ConnectUser();
    $user = new User();
    $view = new View("Auth/login", "front");
    $view->assign('form', $connect->getConfig());

    if ($connect->isSubmit()) {
        $errors = Verificator::form($connect->getConfig(), $_POST);
        if (empty($errors)) {
            $email = $_POST["email"];
            $password = $_POST["pwd"];

            if ($user->verifMail($email) && $user->verifypassword($password)) {
                $user->generateToken();
                echo "ça marche";
                exit();
            } else {
                $errors[] = "Email ou mot de passe invalide.";
                $view->assign('errors', $errors);
            }
        } else {
            $view->assign('errors', $errors);
        }
    }
}



    public function register(): void
    {
        $form = new AddUser();
        $view = new View("Auth/register", "front");
        $view->assign('form', $form->getConfig());

        if($form->isSubmit()){
            $user = new User;
            $errors = Verificator::form($form->getConfig(), $_POST);
            $user->verifMail($_POST["email"]);
            if(empty($errors)){
                echo "Insertion en BDD";
            }else{
                $view->assign('errors', $errors);
            }
        }
        /*
        $user = new User();
        $user->setId(2);
        $user->setEmail("test@gmail.com");
        $user->save();
        */
    }

    public function logout(): void
    {
        echo "Logout";
    }

}