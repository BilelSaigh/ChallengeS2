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
    public function increaseReportCount($commentId)
    {
        $query = "UPDATE comments SET report_count = report_count + 1 WHERE id = ?";
        $stmt = $this->getPdo()->prepare($query);
        $stmt->execute([$commentId]);
    }

    public function getReportCount($commentId)
    {
        $query = "SELECT report_count FROM comments WHERE id = ?";
        $stmt = $this->getPdo()->prepare($query);
        $stmt->execute([$commentId]);
        return $stmt->fetchColumn();
    }

    public function deleteComment($commentId)
    {
        $query = "DELETE FROM comments WHERE id = ?";
        $stmt = $this->getPdo()->prepare($query);
        $stmt->execute([$commentId]);
    }
}
