<?php
namespace App\Models;
use App\Core\Sql;

class User extends Sql 
{

    protected Int $id = 0;
    protected String $firstname;
    protected String $lastname;
    protected String $email;
    protected String $pwd;
    protected String $logo;
    protected  $token = null;
    protected Int $role ;
    protected Int $status =0;

    protected $date_inserted;

    /**
     * @param mixed $date_inserted
     */
    public function setDateInserted(): void
    {
        date_default_timezone_set('Europe/Paris');
        $this->date_inserted = date('d-m-y h:i:s');
    }

    /**
     * @param mixed $date_updated
     */
    public function setDateUpdated(): void
    {
        date_default_timezone_set('Europe/Paris');
        $this->date_updated = date('d-m-y h:i:s');
    }
    protected $date_updated;
    // private ?string $pwd = null;

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
    public function getLogo(): string
    {
        return $this->logo;
    }

    /**
     * @param String $logo
     */
    public function setLogo(string $logo): void
    {
        $this->logo = $logo;
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
     * @param String $email
     */
    public function setEmail(string $email): void
    {
        $this->email = strtolower(trim($email));
    }
    /**
     * @return String
     */
    public function getEmail(): string
    {
        return $this->email;
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
    
    
     public function setPassword(string $pwd): void {
         $this->pwd = $pwd;
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
    public function getRole(): int
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
        $bytes = random_bytes(128);
        $this->token = substr(str_shuffle(bin2hex($bytes)), 0, 10);
    }
    public function setToken()
    {
        $this->token = " ";
    }

    /**
     * @return mixed
     */
    public function getDateUpdated()
    {
        return $this->date_updated;
    }

    public function verifypassword($pwdverif): bool
    {
        return password_verify($pwdverif, $this->pwd);
    }

    public function verifMail($toSearch)
    {
       return parent::search($toSearch);
    }

    public function showAllUsers():array
    {
        return parent::recupAll();
    }

    public function deleteUser():void
    {
        parent::delete();
    }

}