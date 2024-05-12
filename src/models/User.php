<?php

class User
{
    private $email;
    private $password;
    private $name;
    private $surname;

    public function __construct(string $email, string $password)
    {
        $this->email = $email;
        $this->password = $password;

    }

    public function setEmail(string $email)
    {
        $this->email = $email;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setPassword(string $password)
    {
        $this->password = $password;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setSurname(string $surname)
    {
        $this->surname = $surname;
    }

    public function getSurname(): string
    {
        return $this->surname;
    }
}
