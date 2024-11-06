<?php

namespace Controllers;

use database\Database;

class AbstractController
{
    public Database $database;

    public function __construct()
    {
        //TODO Выпилить
        $config = require __DIR__ . "/../../config.php";
        $this->database = new Database($config['database']);
    }

    protected function view(string $view, array $data = []): void
    {
        extract($data);
        require __DIR__ . '/../../resource/views/' . $view;
    }
}