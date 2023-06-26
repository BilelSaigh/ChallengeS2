<?php
namespace App\Models;
use App\Core\Sql;

class Page extends Sql{
    protected Int $id = 0;
    protected String $element;
    protected float $x ;
    protected float $y;
    protected Int $user_id;


    public function setId($id): void
    {
        $this->id = $id;
    }
    public function getId():Int
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


}