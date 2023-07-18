<?php

namespace App\Models;

use App\Core\Sql;
use App\Models\PageMemento;

class Pages extends Sql
{
    protected Int $id = 0;
    protected String $title;
    protected String $slug;
    protected String $description;
    protected Int $status = 0;
    protected $updated_at;

    /**
     * @return String
     */
    public function getSlug(): string
    {
        return $this->slug;
    }

    /**
     * @param String $slug
     */
    public function setSlug(): void
    {
        $this->slug = strtolower(trim(str_replace(' ', '-', $this->getTitle())));
    }

    /**
     * @return String
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param String $description
     */
    public function setDescription(string $description): void
    {
        (empty($description))? $this->description ="Ceci est ma super page" :$this->description = $description;
    }

    /**
     * @param Int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return Int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return Int
     */
    public function getStatus(): int
    {
        return $this->status;
    }

    /**
     * @param Int $status
     */
    public function setStatus(int $status): void
    {
        $this->status = $status;
    }

    /**
     * @return String
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param String $title
     */
    public function setTitle(string $title): void
    {
        $this->title = strtolower($title);
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
    public function setUpdatedAt(): void
    {
        $this->updated_at = date('Y-m-d H:i:s');
    }

    public function showAllPages():array
    {
        return parent::recupAll();
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
