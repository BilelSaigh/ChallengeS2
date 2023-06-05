<?php
namespace App\Models;
use App\Core\Sql;

class User extends Sql {

    protected Int $id = 0;
    protected String $firstname;
    protected String $lastname;
    protected String $email;
    protected String $pwd;
    protected  $token = null;
    protected int $role = 0;
    protected Int $status = 0;
    protected $date_inserted;
    protected $date_updated;

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
    public function getFirstname(): string
    {
        return $this->firstname;
    }

    /**
     * @param String $firstname
     */
    public function setFirstname(string $firstname): void
    {
        $this->firstname = ucwords(strtolower(trim($firstname)));
    }

    /**
     * @return String
     */
    public function getLastname(): string
    {
        return $this->lastname;
    }

    /**
     * @param String $lastname
     */
    public function setLastname(string $lastname): void
    {
        $this->lastname = strtoupper(trim($lastname));
    }

    /**
     * @return String
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @param String $email
     */
    public function setEmail(string $email): void
    {
        $this->email = strtolower(trim($email));
    }

    /**
     * @return String
     */
    public function getPwd(): string
    {
        return $this->pwd;
    }

    /**
     * @param String $pwd
     */
    public function setPwd(string $pwd): void
    {
        $this->pwd = password_hash($pwd, PASSWORD_DEFAULT);
    }

    /**
     * @return int
     */
    public function getStatus(): int
    {
        return $this->status;
    }

    /**
     * @param int $status
     */
    public function setStatus(int $status): void
    {
        $this->status = $status;
    }
    /**
     * @param int $role
     */
    public function setRole($role): void
    {
        $this->role = $role;
    }
    /**
     * @return int $role
     */
    public function getRole($role): int
    {
        return $this->role;
    }


    /**
     * @return mixed
     */
    public function getDateInserted()
    {
        return $this->date_inserted;
    }
    /**
     * @return null
     */
    public function getToken(): ?string
    {
        return $this->token;
    }

    /**
     * @param null
     * Token char 32
     */
    public function generateToken(): void
    {
        $this->token = str_shuffle(md5(uniqid()));
    }


    /**
     * @return mixed
     */
    public function getDateUpdated()
    {
        return $this->date_updated;
    }

    public function verifypassword($pwdverif)
    {
        if (password_verify($pwdverif, $this->pwd)) {
            return true;
        } else {
            return false;
        }
    }



    public function verifMail(array $toSearch)
    {
       var_dump( parent::search($toSearch) ) ;
       return parent::search($toSearch);
    }

}