<?php

namespace Controllers\Admin;

use Controllers\AbstractController;

class IndexAdminController extends AbstractController
{
    public function __invoke(): void
    {
        $this->view('admin/index.php');
    }
}