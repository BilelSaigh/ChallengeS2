<?php
namespace App\Controllers;

use App\Models\CommentModel;

class CommentController
{
    private $commentModel;

    public function __construct()
    {
        $this->commentModel = new CommentModel();
    }

    public function create()
    {
        $articleId = $_POST['article_id'];
        $comment = $_POST['comment'];
        $this->commentModel->createComment($articleId, $comment);
    }


    public function addComment()
    {
        if (isset($_POST['article_id'], $_POST['comment'])) {
            $articleId = $_POST['article_id'];
            $comment = $_POST['comment'];
    
            // Appel à la méthode createComment() du modèle CommentModel
            $this->commentModel->createComment($articleId, $comment);
    
        }
        header("Location: /article/view");
        exit();
    }
        public function showComments()
        {
            $articleId = $_POST['article_id'];
            $comments = $this->commentModel->getCommentsByArticleId($articleId);
            // Affichage des commentaires
            include 'Views/Main/view_comments.view.php';
        }
    
        public function reportComment()
    {
        if (isset($_POST['comment_id'])) {
            $commentId = $_POST['comment_id'];
            
            // Augmenter le compteur de signalement dans la base de données
            $this->commentModel->increaseReportCount($commentId);
    
            // Vérifier si le nombre de signalements atteint le seuil
            $reportCount = $this->commentModel->getReportCount($commentId);
            if ($reportCount >= 5) {
                // Supprimer le commentaire
                $this->commentModel->deleteComment($commentId);
            }
        }
        // Rediriger vers la page précédente ou afficher un message de confirmation
        header("Location: /article/view");
        exit();
    }
}
