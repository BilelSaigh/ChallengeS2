<?php

namespace App\Controllers;

class Comment
{
    private $commentModel;

    public function __construct($commentModel)
    {
        $this->commentModel = $commentModel;
    }

    public function index()
    {
        $comments = $this->commentModel->getComments();
        include 'views/comment.view.php';
    }

    public function create()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $author = $_POST['author'];
            $content = $_POST['content'];

            $success = $this->commentModel->addComment($author, $content);

            if ($success) {
                header('Location: index.php');
                exit;
            } else {
                $error = "Erreur lors de l'ajout du commentaire.";
            }
        }

        include 'views/comment.create.view.php';
    }

    public function edit($id)
    {
        $comment = $this->commentModel->getCommentById($id);

        if (!$comment) {
            header('Location: index.php');
            exit;
        }

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $content = $_POST['content'];

            $success = $this->commentModel->updateComment($id, $content);

            if ($success) {
                header('Location: index.php');
                exit;
            } else {
                $error = "Erreur lors de la modification du commentaire.";
            }
        }

        include 'views/comment.edit.view.php';
    }

    public function delete($id)
    {
        $comment = $this->commentModel->getCommentById($id);

        if (!$comment) {
            header('Location: index.php');
            exit;
        }

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $success = $this->commentModel->deleteComment($id);

            if ($success) {
                header('Location: index.php');
                exit;
            } else {
                $error = "Erreur lors de la suppression du commentaire.";
            }
        }

        include 'views/comment.delete.view.php';
    }
}
