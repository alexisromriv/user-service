<?php 

namespace MyApp\User\Domain; 

class User
{
    private $firstName;
    private $lastName;
    private $email;
    private $address;

    public function __construct($firstName, $lastName, $email, $address)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->email = $email;
        $this->address = $address;
    }

    public function getFirstName()
    {
        return $this->firstName;
    }

    public function getLastName()
    {
        return $this->lastName;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getAddress()
    {
        return $this->address;
    }
}
