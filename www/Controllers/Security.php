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
            $errors = Verificator::form($form->getConfig(), $_POST);
            $user = new User;
            $alreadyRegistered = $user->verifMail(["email"=>$_POST["email"]]);
            
            if(empty($errors) && empty($alreadyRegistered)){
                
                $user->setEmail($_POST["email"]);
                $user->setFirstname($_POST["firstname"]);
                $user->setLastname($_POST["lastname"]);
                $user->setPwd($_POST["pwd"]);
                $user->save();
            }else{
                ($alreadyRegistered) ? $view->assign('errors', "Inscription incorrect") :  $view->assign('errors', $errors);
               
            }
        }
    }

    public function logout(): void
    {
        echo "Logout";
    }

}