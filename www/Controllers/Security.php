<?php
namespace App\Controllers;
use App\Core\View;
use App\Forms\AddUser;
use App\Forms\ConnectUser;
use App\Models\Mail;
use App\Models\User;
use App\Core\Verificator;
use App\Controllers\Error;



class Security
{

    public function login(): void
    {
        $connect = new ConnectUser();
        $user = new User();
        $view = new View("Auth/login", "front");
        $view->assign('form', $connect->getConfig());

        $view->assign('title', "login");
        if ($connect->isSubmit()) {
            $errors = Verificator::form($connect->getConfig(), $_POST);
            if (empty($errors)) {
                $user->setEmail($_POST["email"]);
                $userPwd = $_POST["pwd"];
                $verifiedUser = $user->verifMail(["email"=>$user->getEmail()]);
                if ($verifiedUser && $verifiedUser->verifypassword($userPwd)) {
                    $verifiedUser->generateToken();
                    $userData = [
                        'id' => $verifiedUser->getId(),
                        'firstname' => $verifiedUser->getFirstname(),
                        'lastname'  => $verifiedUser->getLastname(),
                        'pwd'       => $verifiedUser->getPwd(),
                        'email'     => $verifiedUser->getEmail(),
                        'token'     => $verifiedUser->getToken(),
                        'status'    => $verifiedUser->getStatus(),
                        'logo'    => $verifiedUser->getLogo(),
                        'role'    => $verifiedUser->getRole(),
                    ];
                    $_SESSION["user"] = $userData;
                    echo '<script>window.location.href="/admin/profil";</script>';
                    exit;
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
        $view->assign('title', "register");
        $view->assign('form', $form->getConfig());
        if($form->isSubmit()){
            $errors = Verificator::form($form->getConfig(), $_POST);
            $user = new User;
            $alreadyRegistered = $user->verifMail(["email"=>$_POST["email"]]);
            if(empty($errors) && empty($alreadyRegistered)){
                $confMail = new Mail();
                $confMail->setName($_POST["firstname"]);
                $confMail->setSubject("Mail de confirmation");
                $confMail->setAddress($_POST["email"]);
                $user->generateToken();
                $token = $user->getToken();
                $user->setRole($_POST["role"]??"3");
                $user->setEmail($_POST["email"]);
                $user->setFirstname($_POST["firstname"]);
                $user->setLastname($_POST["lastname"]);
                $user->setPwd($_POST["pwd"]);
                $user->save();
                $confMail->setMessage('
                                            <div class="card-body">
                                            <h5 class="card-title"> Adebc vous souhaite la bienvenue ! </h5>
                                            <p class="card-text">Une fois votre compte validé vous pourrez commenter autant que vous le souhaitez !.</p>
                                            <p class="card-text">Oublie pas le respect est OBLIGATOIRE chez nous ;)  .</p>
                                                <button><a class="btn btn-primary" href="http://193.70.2.69:81/admin/confirmation?key='.$token.'"> Confirmer votre mail. </a></button>
                                           </div>');
                $mail = $confMail->mail($confMail->initMail());
                echo '<script>window.location.href="/admin/login";</script>';
                exit;
            }else{
                ($alreadyRegistered) ? $view->assign('errors', "Inscription incorrect") :  $view->assign('errors', $errors);
            }
        }
    }
    /**
     * @return void
     */
    public function confirmation():void
    {
        if (isset($_GET['key']) && !empty(($_GET['key']))){
            $user = new User;
            $connect = new ConnectUser();
            $newUser = $user->verifMail(["token" =>$_GET['key']]);
            if (!empty($newUser)){
                $newUser->setStatus(1);
                $newUser->save();
                $this->login();
            }else{
                echo '<div class="alert-error" style="text-align: center; padding: 1em ;">
                        <span> Compte innexistant, veuillez verifier que la durée du mail n est pas expirée </span>
                    </div>';
            }
        }
    }

    public function logout(): void
    {
        $connection = new Verificator();
        $user = new User();
        if($connection->isConnected($_SESSION['user']["token"])) {
            $user->setId($_SESSION["user"]["id"]);
            $user->setToken();
            $user->save();
            session_destroy();
            echo '<script>window.location.href="/admin/login";</script>';
            exit;
        }else{
            $error = new Error();
            $error->errorRedirection(404);
        }
    }

}