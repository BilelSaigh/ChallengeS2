<?php

namespace App\Models;

use App\Core\Sql;
require_once 'Core/Sql.php';
require_once 'PageMemento.php';

class Page extends Sql
{
    protected Int $id = 0;
    protected String $name = "New website";
    protected String $content;
    protected $updated_at;
    protected $created_at;
    protected Int $user_id;

    /**
     * @return String
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param String $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getUpdatedAt()
    {
        return $this->updated_at;
    }

    /**
     * @param mixed $updated_at
     */
    public function setUpdatedAt($updated_at): void
    {
        $this->updated_at = $updated_at;
    }

    /**
     * @return mixed
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }

    /**
     * @param mixed $created_at
     */
    public function setCreatedAt(): void
    {
        $this->created_at = date('d-m-Y-H-i-s');
    }
    protected $html;

    public function setId($id): void
    {
        $this->id = $id;
    }

    public function getId(): Int
    {
        return $this->id;
    }


    /**
     * @return Int
     */
    public function getUserId(): int
    {
        return $this->user_id;
    }

    /**
     * @param Int $user_id
     */
    public function setUserId(int $user_id): void
    {
        $this->user_id = $user_id;
    }

    // Ajoutez les méthodes pour le Memento

    public function getContent()
    {
        return $this->content;
    }

    public function setContent($content)
    {
        $this->content = $content;
    }

    public function getModificationDate()
    {
        return $this->modificationDate;
    }

    public function setModificationDate()
    {
        $this->modificationDate = date('d-m-Y-H-i-s');
    }

    public function getHTML()
    {
        return $this->html;
    }

    public function setHTML($html)
    {
        $this->html = $html;
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
