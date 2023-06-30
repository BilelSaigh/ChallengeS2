<?php

namespace App\Models;

use App\Core\Sql;
require_once 'Core/Sql.php';
require_once 'PageMemento.php';

class Page extends Sql
{
    protected Int $id = 0;
    protected String $element;
    protected float $x;
    protected float $y;
    protected Int $user_id;

    // Ajoutez les propriétés pour le Memento
    private $title;
    private $content;
    private $modificationDate;
    private $html;

    public function setId($id): void
    {
        $this->id = $id;
    }

    public function getId(): Int
    {
        return $this->id;
    }

    /**
     * @return String
     */
    public function getElement(): string
    {
        return $this->element;
    }

    /**
     * @param String $element
     */
    public function setElement(string $element): void
    {
        $this->element = $element;
    }

    /**
     * @return float
     */
    public function getX(): float
    {
        return $this->x;
    }

    /**
     * @param float $x
     */
    public function setX(float $x): void
    {
        $this->x = $x;
    }

    /**
     * @return float
     */
    public function getY(): float
    {
        return $this->y;
    }

    /**
     * @param float $y
     */
    public function setY(float $y): void
    {
        $this->y = $y;
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

    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }

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

    public function setModificationDate($modificationDate)
    {
        $this->modificationDate = $modificationDate;
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
}
