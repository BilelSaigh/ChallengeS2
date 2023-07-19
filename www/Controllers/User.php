<?php
namespace App\Controllers;
use App\Core\Verificator;
use App\Core\View;
use App\Forms\AddAdmin;
use App\Forms\AddUser;
use App\Models\User as ModelUser;

class User
{
    public function index()
    {
        $pseudo = "Prof";
        $view = new View("Main/index", "front");
        $view->assign("pseudo", $pseudo);
        
        // Vérifier le format de retour demandé
        $format = $this->getRequestFormat();
        
        // Adapter la réponse en fonction du format demandé
        if ($format === 'json') {
            header('Content-Type: application/json');
            echo json_encode(['pseudo' => $pseudo]);
        }else {
            // Afficher la vue par défaut pour les autres formats
            include "Main/index.view.php";
        }
    }

    public function contact()
{
    // Vérifier le format de retour demandé
    $format = $this->getRequestFormat();

    // Adapter la réponse en fonction du format demandé
    if ($format === 'json') {
        header('Content-Type: application/json');
        echo json_encode(['message' => 'Contact form submitted']);
    }else {
        // Afficher la vue par défaut pour les autres formats
        include "Main/contact.view.php";
    }
}

    public function dashboard(){
        $view = new View("Dash/pageBuilder","back");
    }

    public function showUsers(): void
    {
            $form = new AddAdmin();
            $users = new ModelUser();
            $view = new View("Dash/users", "back");
            $users = $users->showAllUsers();
            $view->assign("users",$users);
            $view->assign('form', $form->getConfig());
            if($form->isSubmit()){
                $user = new ModelUser;
                $errors = Verificator::form($form->getConfig(), $_POST);
                $user->verifMail($_POST["email"]);
                if(empty($errors)){
                    if ($this->addUser($user)){
                        echo "ok";
                    }
                }else{
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
    }
    public function addUser($user): bool
    {
        $user->setFirstname($_POST["firstname"]);
        $user->setLastname($_POST["lastname"]);
        $user->setEmail($_POST["email"]);
        $user->setPassword($_POST["pwd"]);
        $user->setStatus($_POST["status"]);
        $user->save();
        return true;
//        $view = new View("Dash/users", "back");
//        $view->assign("users",$users);
    }
    public function deleteUsers(): void
    {
        var_dump($_POST);
        $user = new ModelUser();
        $view = new View("Dash/users", "back");
        $users = $user->deleteUser();
        $view->assign("users",$user);
    }
}