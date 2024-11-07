<?php

namespace Controllers\Login;

use Controllers\AbstractController;
use Validator;

class IndexLoginController extends AbstractController
{
    public function __invoke(): void
    {
        $this->view('login/index.php');
    }
}