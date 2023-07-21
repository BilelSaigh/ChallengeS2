<?php
namespace App\Controllers;

use App\Core\Sql;
use App\Models\CommentModel;
use App\Models\Comment;
class CommentController extends Sql
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
        var_dump($_POST);
        $comment = new Comment();
        if (isset($_POST['commentId'])) {
            $commentId = $_POST['commentId'];
            $comment = $comment->search(["id"=> $commentId]);
            if ($comment->getReport() < 5) {
                $report = $comment->getReport();
                $comment->setReport($report) ;
                var_dump($comment);
                $comment->save();
            } else{
            $comment->delete($_POST['commentId']);
            }

        }
//        // Rediriger vers la page précédente ou afficher un message de confirmation
//        header("Location: /article/view");
//        exit();
    }
}
