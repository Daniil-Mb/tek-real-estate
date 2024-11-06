<?php

namespace Controllers\Register;

use Controllers\AbstractController;

class IndexRegisterController extends AbstractController
{
    public function __invoke(): void
    {
        $this->view('register/index.php', ['data' => 'Hello World!!!']);
    }
}