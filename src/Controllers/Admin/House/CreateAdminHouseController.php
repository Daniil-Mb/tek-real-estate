<?php

namespace Controllers\Admin\House;

use Controllers\AbstractController;

class CreateAdminHouseController extends AbstractController
{
    public function __invoke(): void
    {
        $this->view('admin/house/create.php');
    }
}