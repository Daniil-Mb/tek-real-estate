<?php

namespace Controllers\Admin\House;

use Controllers\AbstractController;

class IndexAdminHouseController extends AbstractController
{
    public function __invoke(): void
    {
        $data = $this->database->query(
            query: "SELECT * FROM `houses`"
        );
//        var_dump($data);
        $this->view('admin/house/index.php');
    }
}