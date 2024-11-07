<?php

namespace Controllers\Login;

class LoginErrorData
{
    public function __construct(
        public ?string $email = null,
        public ?string $password = null
    ){}
}