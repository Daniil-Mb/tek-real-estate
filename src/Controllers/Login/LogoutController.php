<?php

namespace Controllers\Login;

use Controllers\AbstractController;

class LogoutController extends AbstractController
{
    public function __invoke(): void
    {
        session_destroy();

        header('Location: /');
    }
}