<?php 

namespace MyApp\User\Domain;

class UserDto
{
    public $firstName;
    public $lastName;
    public $email;
    public $address;
    public $password;

    public function __construct($firstName, $lastName, $email, $address, $password)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->email = $email;
        $this->address = $address;
        $this->password = $password;
    }
}
