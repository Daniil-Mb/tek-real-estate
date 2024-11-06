<?php

namespace Controllers\Login;

class LoginData
{
    public function __construct(
        public string $email,
        public string $password
    ){}
}