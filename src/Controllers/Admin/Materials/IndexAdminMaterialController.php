<?php

namespace Controllers\Admin\Materials;

use Controllers\AbstractController;

class IndexAdminMaterialController extends AbstractController
{
    public function __invoke(): void
    {
        $materialArray = $this->database->query(
            query: "SELECT * FROM `materials`"
        );

        $materialCollection = array_map(fn($i) => new MaterialData(
            id: $i['id'],
            name: $i['name'],
            description: $i['description'],
            price: $i['price'],
            image: $i['image'],
        ), $materialArray);

        $this->view('admin/material/index.php',
            ['materials' => $materialCollection]
        );
    }
}