<?php

namespace Controllers\Home;

use Controllers\AbstractController;
use Controllers\Admin\Materials\MaterialData;

class IndexHomeController extends AbstractController
{
    public function __invoke(): void
    {
        $materialsArray = $this->database->query(
            query: "SELECT * FROM `materials`"
        );

        $materialsCollection = array_map(fn($i) => new MaterialData(
            id: $i['id'],
            name: $i['name'],
            description: $i['description'],
            price: $i['price'],
            image: $i['image'],
        ), $materialsArray);

        $this->view('material/index.php',
            ['materials' => $materialsCollection]
        );
    }
}