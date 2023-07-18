<?php

namespace App\Models;
use App\Core\Sql;

class Page extends Sql
{
    protected Int $id = 0;
    protected Int $page_id;

    protected  $content;
    protected  $updated_at;
    protected Int $user_id;

    /**
     * @return Int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param Int $version_id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return Int
     */
    public function getPageId(): int
    {
        return $this->page_id;
    }

    /**
     * @param Int $page_id
     */
    public function setPageId(int $page_id): void
    {
        $this->page_id = $page_id;
    }

    /**
     * @return String
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @param String $content
     */
    public function setContent( $content): void
    {
        $this->content = $content;
    }

    /**
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updated_at;
    }


    public function setUpdatedAt(): void
    {
        $this->updated_at = date('d-m-Y-H-i-s');
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