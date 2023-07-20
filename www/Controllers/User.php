<?php
namespace App\Controllers;
use App\Core\Verificator;
use App\Core\View;
use App\Forms\AddAdmin;
use App\Forms\AddUser;
use App\Forms\newEmail;
use App\Forms\newPwd;
use App\Models\Mail;
use App\Models\Setting;
use App\Models\User as ModelUser;

class User
{
    public function home(): void
    {
        $connection = new Verificator();
        $website = new Setting();
        if($connection->isConnected($_SESSION['user']["token"])) {
            $website=$website->search(["id"=>1]);
            $website= $website->getWebsiteName();
            $title = "Profil";
            $view = new View("Dash/profil", "back");
            $view->assign('title', $title);
            $view->assign('user', $_SESSION['user']);
            $view->assign('websiteTitle', $website);
        }else{
            $error = new Error();
           $error->errorRedirection(404);
       }
    }
    public function setting(): void
    {
        $errors = [];
        $newPwd = new newPwd();
        $newEmail = new newEmail();
        $connection = new Verificator();
        $user = new ModelUser();
        $user->setId($_SESSION["user"]["id"]);
        $user->setFirstname($_SESSION["user"]["firstname"]);
        $user->setLastname($_SESSION["user"]["lastname"]);
        $user->setEmail($_SESSION["user"]["email"]);
        $user->setStatus($_SESSION["user"]["status"]);
        $user->setPassword($_SESSION["user"]["pwd"]);
        $user->setRole($_SESSION["user"]["role"]);
        if($connection->isConnected($_SESSION['user']["token"])) {
            $title = "Profil";
            $view = new View("Dash/editUser");
            $website = new Setting();
            $website=$website->search(["id"=>1]);
            $view->assign('title', $title);
            $view->assign('user', $_SESSION['user']);
            $view->assign('websiteTitle', $website->getWebsiteName());
            if(!empty($_POST["newpassword"]) && $_POST["newpassword"] === $_POST["confirmpassword"]){
                $pwdErrors = Verificator::checkPwd($_POST["newpassword"]);
                if (!empty($pwdErrors)){
                    $userPwd = $_POST["newpassword"];
                    $user->setPwd($userPwd);
                    $user->generateToken();
                    $user->save();
                    $userData = [
                        'id' => $user->getId(),
                        'pwd' => $user->getPwd(),
                        'firstname' => $user->getFirstname(),
                        'lastname' => $user->getLastname(),
                        'email' => $user->getEmail(),
                        'token' => $user->getToken(),
                        'status' => $user->getStatus(),
                        'role' => $user->getRole(),
                    ];
                    $_SESSION["user"] = $userData;
                    $view->assign("user",$userData);
                }else{
                    $errors[] = "Mot de passe invalide.";
                    $view->assign('errors', $errors);
                }
            } elseif (!empty($_POST["newEmail"]) && !empty($_POST["confirmemailpassword"])){
                if ($user->verifypassword($_POST["confirmemailpassword"])){
                    $user->setEmail($_POST["newEmail"]);
                    $verifiedUser = $user->verifMail(["email"=>$user->getEmail()]);
                    if (!empty($verifiedUser)) {
                        $user->setEmail($_POST["newEmail"]);
                        $user->generateToken();
                        $user->save();
                        $userData = [
                            'id' => $user->getId(),
                            'pwd' => $user->getPwd(),
                            'firstname' => $user->getFirstname(),
                            'lastname' => $user->getLastname(),
                            'email' => $user->getEmail(),
                            'token' => $user->getToken(),
                            'status' => $user->getStatus(),
                        ];
                        $_SESSION["user"] = $userData;
                        $view->assign("user",$userData);

                    }else{
                        $errors[] = "Email déjà utilisé.";
                        $view->assign('errors', $errors);
                    }
                }else {
                    $errors[] = "Mot de passe invalide.";
                    $view->assign('errors', $errors);
                }
            }
        }else{
            $error = new Error();
            $error->errorRedirection(404);
        }

    }

    public function dashboard(): void
    {
        $view = new View("Dash/pageBuilder","back");
    }

    public function showUsers(): void
    {
        $form = new AddAdmin();
        $users = new ModelUser();
        $view = new View("Dash/users", "back");
        $users = $users->showAllUsers();
        $view->assign("users",$users);
        $view->assign("title","List Users");
        $view->assign('form', $form->getConfig());
        if($form->isSubmit()){
            $user = new ModelUser;
            $errors = Verificator::form($form->getConfig(), $_POST);
            $verifUser = $user->verifMail(["email"=>$_POST["email"]]);
            if(empty($errors) && empty($verifUser)){
                if ($this->addUser($user)){
                    $confMail = new Mail();

                    $confMail->setName($_POST["firstname"]);
                    $confMail->setSubject("Mail de confirmation");
                    $confMail->setAddress($_POST["email"]);
                    $confMail->setMessage('
                                          <div class="card-body">
                                            <h5 class="card-title"> Adebc vous souhaite la bienvenue ! </h5>
                                            <p class="card-text">Une fois votre compte validé vous pourrez commenter autant que vous le souhaitez !.</p>
                                            <p class="card-text">Oublie pas le respect est OBLIGATOIRE chez nous ;)  .</p>
                                                <button><a class="btn btn-primary" href="http://localhost:81/confirmation?key='.$user->getToken().'"> Confirmer votre mail. </a></button>
                                           </div>');
                    $mail = $confMail->mail($confMail->initMail());
                }
            }else{
                $errors[] = "User already exist !";
                $view->assign('errors', $errors);
            }
        }
    }
    public function updateUsers(): void
    {
        $users = new ModelUser();
        $view = new View("Dash/users", "back");
        $users = $users->updateUser();
        $view->assign("users",$users);
        $view->assign("title","List Users");
    }
    public function addUser($user): bool
    {
        $user->setFirstname($_POST["firstname"]);
        $user->setLastname($_POST["lastname"]);
        $user->setEmail($_POST["email"]);
        $user->setPwd($_POST["pwd"]);
        $user->setRole($_POST["role"]??"3");
        $user->setDateInserted();
        $user->setDateUpdated();
        $user->generateToken();
        $user->save();
        return true;
    }
    public function deleteUsers(): void
    {
        $user = new ModelUser();
        if ($_POST["action"] == "deleteUser"){
            $user->setId($_POST["id"]);
            $user->deleteUser();
        }else if ($_POST["action"] == "deleteSelf"){
            $user->setId($_SESSION["user"]["id"]);
            $user->deleteUser();
            header('Location:/admin/login');
        }
    }

    public function theme():void
    {
        $view = new View("Dash/theme");
        $settings = new Setting();
        $settings = $settings->recupAll();
        $_SESSION["setting"] = $settings;
        $view->assign('title','Theme');
        $view->assign('setting',$_SESSION["setting"][0]);
    }

}