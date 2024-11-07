<?php

namespace Controllers\Register;

class RegisterUserErrorsData
{
    public function __construct(
        public ?string $name = null,
        public ?string $email = null,
        public ?string $password = null,
    ){}
}
