<?php

namespace Controllers\Admin;

use Controllers\AbstractController;

class AdminHouseController extends AbstractController
{
    public function __invoke(): void
    {
        echo 'admin';
    }
}