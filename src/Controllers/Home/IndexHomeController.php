<?php

namespace Controllers\Home;

use Controllers\AbstractController;
use Controllers\Admin\House\HouseData;

class IndexHomeController extends AbstractController
{
    public function __invoke(): void
    {
        $housesArray = $this->database->query(
            query: "SELECT * FROM `houses`"
        );

        $housesCollection = array_map(fn($i) => new HouseData(
            id: $i['id'],
            name: $i['name'],
            description: $i['description'],
            price: $i['price'],
            image: $i['image'],
        ), $housesArray);

        $this->view('home/index.php',
            ['houses' => $housesCollection]
        );
    }
}