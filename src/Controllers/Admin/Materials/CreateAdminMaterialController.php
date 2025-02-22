<?php

namespace Controllers\Admin\Materials;

use Controllers\AbstractController;

class CreateAdminMaterialController extends AbstractController
{
    public function __invoke(): void
    {
        $this->view('admin/material/create.php');
    }
}