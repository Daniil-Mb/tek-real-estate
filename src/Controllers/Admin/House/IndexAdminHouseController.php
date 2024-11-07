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

        $houses = array_map(fn($i) => new HouseData(
            id: $i['id'],
            name: $i['name'],
            description: $i['description'],
            price: $i['price'],
            image: $i['image'],
        ), $data);

        $this->view('admin/house/index.php', ['houses' => $houses]);
    }
}