<?php

namespace Controllers\Home;

use Controllers\AbstractController;

class IndexHomeController extends AbstractController
{
    public function __invoke(): void
    {
        $this->view('home/index.php', ['data' => 'Hello World!!!']);
    }
}