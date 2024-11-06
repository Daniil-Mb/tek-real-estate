<?php

namespace Controllers\Catalog;

use Controllers\AbstractController;

class IndexCatalogController extends AbstractController
{
    public function __invoke(): void
    {
        //TODO поменяй на catalog
        $this->view('home/index.php', ['data' => 'Hello World!!!']);
    }
}