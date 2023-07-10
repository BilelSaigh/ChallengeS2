<?php
namespace App\Models;

use App\Core\Sql;

class CommentModel extends Sql
{
    public function createComment($articleId, $comment)
    {
        $query = "INSERT INTO comments (article_id, comment, created_at) VALUES (?, ?, NOW())";
        $stmt = $this->getPdo()->prepare($query);
        $stmt->execute([$articleId, $comment]);
        echo "Le commentaire a été ajouté avec succès.";
    }

    public function getCommentsByArticleId($articleId)
    {
        $query = "SELECT * FROM comments WHERE article_id = ?";
        $stmt = $this->getPdo()->prepare($query);
        $stmt->execute([$articleId]);
        return $stmt->fetchAll();
    }
}
