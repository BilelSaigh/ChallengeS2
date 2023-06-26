<?php

class CommentModel
{
    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function getComments()
    {
        $query = "SELECT * FROM comments";
        $result = $this->db->query($query);
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }

    public function addComment($author, $content)
    {
        $query = "INSERT INTO comments (author, content, created_at) VALUES (?, ?, NOW())";
        $stmt = $this->db->prepare($query);
        $stmt->execute([$author, $content]);
        return $stmt->rowCount() > 0;
    }

    public function getCommentById($id)
    {
        $query = "SELECT * FROM comments WHERE id = ?";
        $stmt = $this->db->prepare($query);
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function updateComment($id, $content)
    {
        $query = "UPDATE comments SET content = ? WHERE id = ?";
        $stmt = $this->db->prepare($query);
        $stmt->execute([$content, $id]);
        return $stmt->rowCount() > 0;
    }

    public function deleteComment($id)
    {
        $query = "DELETE FROM comments WHERE id = ?";
        $stmt = $this->db->prepare($query);
        $stmt->execute([$id]);
        return $stmt->rowCount() > 0;
    }
}
