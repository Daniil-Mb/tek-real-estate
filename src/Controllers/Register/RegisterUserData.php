<?php

namespace Controllers\Register;

class RegisterUserData
{
    public function __construct(
        public string $name,
        public string $email,
        public string $password,
        public bool $isAdmin = false,
    ){}
}
