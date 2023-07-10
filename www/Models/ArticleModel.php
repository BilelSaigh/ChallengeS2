<?php

namespace App\Models;
use App\Core\Sql;


class ArticleModel extends Sql
{

    public function createArticle($title, $userId, $content)
    {
        $query = "INSERT INTO articles (title, user_id, content, created_at) VALUES (?, ?, ?, NOW())";
        $stmt = $this->getPdo()->prepare($query);
        $stmt->execute([$title, $userId, $content]);
        echo "Les données ont été insérées";
    }
   public function getAllArticles($sort = 'desc', $search = '')
    {
        $sql = "SELECT articles.id, articles.title, articles.content, articles.created_at, users.firstname, users.lastname 
                FROM articles 
                JOIN esgi_user AS users ON articles.user_id = users.id ";

        if (!empty($search)) {
            $sql .= "WHERE articles.title LIKE '%$search%' OR articles.content LIKE '%$search%' ";
        }

        $sql .= "ORDER BY articles.created_at $sort";

        $queryPrepared = $this->getPdo()->query($sql);
        return $queryPrepared->fetchAll();
    }



}
