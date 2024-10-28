<?php

namespace App\DTO;

class userDTO
{
    public $id;
    public $email;
    public $roles;

    public function __construct(int $id, string $email, array $roles)
    {
        $this->id = $id;
        $this->email = $email;
        $this->roles = $roles;
    }
}?>
    