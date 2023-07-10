<?php
namespace App\Controllers;

use App\Models\ArticleModel;
use App\Models\CommentModel;

class ArticleController
{
    private $articleModel;
    private $commentModel;

    public function __construct()
    {
        $this->articleModel = new ArticleModel();
        $this->commentModel = new CommentModel();
    }
    
    public function create()
{
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $title = isset($_POST['title']) && !empty($_POST['title']) ? $_POST['title'] : '';
        $userId = isset($_POST['user_id']) && !empty($_POST['user_id']) ? $_POST['user_id'] : '';
        $content = isset($_POST['content']) && !empty($_POST['content']) ? $_POST['content'] : '';
        
        if (!empty($title) && !empty($userId) && !empty($content)) {
            $this->articleModel->createArticle($title, $userId, $content);
        }
    }

    // Affichage du formulaire de création d'article
    include 'Views/Main/create_article.view.php';
}



public function list(): void
{
    $sort = isset($_GET['sort']) ? $_GET['sort'] : 'desc';
    $search = isset($_GET['search']) ? $_GET['search'] : '';

    // Nettoyer et valider les données de recherche
    $search = trim($search); // Supprimer les espaces vides au début et à la fin
    $search = htmlspecialchars($search); // Échapper les caractères spéciaux

    // Valider et limiter la longueur de la recherche
    $search = substr($search, 0, 20); // Limiter à 20 caractères

    // Récupérer tous les articles
$articles = $this->articleModel->getAllArticles($sort, $search);

// Créer un tableau pour stocker les commentaires par article
$commentsByArticle = [];

// Récupérer les commentaires pour chaque article
foreach ($articles as $article) {
    $comments = $this->commentModel->getCommentsByArticleId($article['id']);
    $commentsByArticle[$article['id']] = $comments;
}

// Passer à la vue les articles et les commentaires associés
include 'Views/Main/view_article.view.php';

}


    public function addComment()
{
    if (isset($_POST['article_id'], $_POST['comment'])) {
        $articleId = $_POST['article_id'];
        $comment = $_POST['comment'];

        // Appel à la méthode createComment() du modèle CommentModel
        $this->commentModel->createComment($articleId, $comment);

    }
}
    public function showComments()
    {
        $articleId = $_POST['article_id'];
        $comments = $this->commentModel->getCommentsByArticleId($articleId);
        // Affichage des commentaires
        include 'Views/Main/view_comments.view.php';
    }
}
