<?php

namespace App\Models;

use App\Core\Sql;

class Front extends Sql
{
    protected int $id =0;
    protected String $polices;
    protected String $text_color;
    protected String $text_size;
    protected String $btn_color;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return String
     */
    public function getPolices(): string
    {
        return $this->polices;
    }

    /**
     * @param String $polices
     */
    public function setPolices(string $polices): void
    {
        $this->polices = $polices;
    }

    /**
     * @return String
     */
    public function getTextColor(): string
    {
        return $this->text_color;
    }

    /**
     * @param String $text_color
     */
    public function setTextColor(string $text_color): void
    {
        $this->text_color = $text_color;
    }

    /**
     * @return String
     */
    public function getTextSize(): string
    {
        return $this->text_size;
    }

    /**
     * @param String $text_size
     */
    public function setTextSize(string $text_size): void
    {
        $this->text_size = $text_size;
    }

    /**
     * @return String
     */
    public function getBtnColor(): string
    {
        return $this->btn_color;
    }

    /**
     * @param String $btn_color
     */
    public function setBtnColor(string $btn_color): void
    {
        $this->btn_color = $btn_color;
    }



}