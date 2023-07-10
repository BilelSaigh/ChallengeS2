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
}
