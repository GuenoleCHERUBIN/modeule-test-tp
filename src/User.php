<?php
namespace App;

use phpDocumentor\Reflection\Types\String_;

class  User
{
    /**
     * @var string $firstname
     */
    private $firstname;

    /**
     * @var string $lastname
     */
    private $lastname;

    /**
     * @var int $age
     */
    private $age;

    /**
     * @var string $email
     */
    private $email;

    public function __consruct(string $firstname, string $lastname,int  $age,string $email)
    {
        $this->setFirsname($firstname);
        $this->setLastname($lastname);
        $this->setAge($age);
        $this->setEmail($email);
    }

    /**
     * @return string
     */
    public function getFirstname(): string
    {
        return $this->firstname;
    }

    /**
     * @param $firstname
     * @return User
     */
    public function setFirsname($firstname): User
    {
        $this->firstname = $firstname;
        return $this;
    }

    /**
     * @return string
     */
    public function getLastname(): string
    {
        return $this->lastname;
    }

    /**
     * @param $lastname
     * @return User
     */
    public function setLastname($lastname): User
    {
        $this->lastname = $lastname;
        return $this;
    }

    /**
     * @return int
     */
    public function getAge(): int
    {
        return $this->age;
    }

    /**
     * @param $age
     * @return User
     */
    public function setAge($age): User
    {
        $this->age = $age;
        return $this;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @param string $email
     * @return User
     */
    public function setEmail(string $email): string
    {
        $this->email = $email;
        return $this;
    }

    public function isFirstnameValid(): bool
    {
        if (empty($this->firstname)) {
            return false;
        }
        return true;
    }

    public function isLastnameValid(): bool
    {
        if (empty($this->lastname)) {
            return false;
        }
        return true;
    }

    public function isAgeValid(): bool
    {
        if ($this->age < 13) {
            return false;
        }
        return true;
    }

    public function isEmailValid(): bool
    {
        if (!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
            return false;
        }
        return true;
    }

    public function isValid(): bool
    {
        $this->isFirstnameValid();

        $this->isLastnameValid();

        $this->isAgeValid();

        $this->isEmailValid();

        return true;
    }
}