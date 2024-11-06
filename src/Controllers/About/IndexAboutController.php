<?php

namespace Controllers\About;

use Controllers\AbstractController;

class IndexAboutController extends AbstractController
{
    public function __invoke(): void
    {
        //TODO поменяй на about
        $this->view('home/index.php', ['data' => 'Hello World!!!']);
    }
}