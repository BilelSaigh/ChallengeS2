<?php

namespace App\Models;

class PageMemento
{
    private $id;
    private $title;
    private $content;
    private $modificationDate;
    private $html;

    public function __construct($id, $title, $content, $modificationDate, $html)
    {
        $this->id = $id;
        $this->title = $title;
        $this->content = $content;
        $this->modificationDate = $modificationDate;
        $this->html = $html;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getContent()
    {
        return $this->content;
    }

    public function getModificationDate()
    {
        return $this->modificationDate;
    }

    public function getHTML()
    {
        return $this->html;
    }

    public function createMemento()
    {
        // Récupérer la connexion PDO depuis la classe parente
        $pdo = $this->pdo;

        // Récupérer les propriétés de la page
        $title = $this->getTitle();
        $content = $this->getContent();
        $modificationDate = date('Y-m-d H:i:s'); // Date actuelle
        $html = $this->getHTML();

        // Insérer les données dans la table page_mementos
        $query = "INSERT INTO page_mementos (page_id, title, content, modification_date, html)
                  VALUES (?, ?, ?, ?, ?)";
        $statement = $pdo->prepare($query);

        // Utiliser bindValue() pour lier les valeurs aux paramètres de la requête
        $statement->bindValue(1, $this->getId(), \PDO::PARAM_INT);
        $statement->bindValue(2, $title, \PDO::PARAM_STR);
        $statement->bindValue(3, $content, \PDO::PARAM_STR);
        $statement->bindValue(4, $modificationDate, \PDO::PARAM_STR);
        $statement->bindValue(5, $html, \PDO::PARAM_STR);

        // Exécuter la requête d'insertion
        $statement->execute();

        // Retourner un nouvel objet PageMemento avec les données insérées
        return new PageMemento($pdo->lastInsertId(), $title, $content, $modificationDate, $html);
    }


    public function restoreFromMemento(PageMemento $memento)
    {
        // Récupérer la connexion PDO depuis la classe parente
        $pdo = $this->pdo;

        // Récupérer les données du memento
        $id = $memento->getId();
        $title = $memento->getTitle();
        $content = $memento->getContent();
        $modificationDate = $memento->getModificationDate();
        $html = $memento->getHTML();

        // Mettre à jour les propriétés de la page
        $this->setId($id);
        $this->setTitle($title);
        $this->setContent($content);
        $this->setModificationDate($modificationDate);
        $this->setHTML($html);

        // Mettre à jour les données dans la table page_mementos
        $query = "UPDATE page_mementos SET title = ?, content = ?, modification_date = ?, html = ?
                  WHERE id = ?";
        $statement = $pdo->prepare($query);
        $statement->execute([$title, $content, $modificationDate, $html, $id]);
    }


    public function getMemento()
    {
        return  new PageMemento($this->getId(), $this->getTitle(), $this->getContent(), $this->getModificationDate());

    }
}
