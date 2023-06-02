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
        $user = new User;
        $view = new View("Auth/login", "front");
        $view->assign('form', $connect->getConfig());

        if($connect->isSubmit()){
            $errors = Verificator::form($connect->getConfig(), $_POST);
            if (!empty($user->verifMail($_POST["email"]))){
                if ($user->verifypassword($_POST["pwd"])){
                    $user->generateToken();
//                    $user->save();
                $home = new View("Dashboard","back");
                $home->assign('user',$user);
                }
            };
            if(empty($errors)){
                print_r($user);
                echo "Verification en BDD";
            }else{
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