<?php

namespace Controllers\Admin\House;

class StoreHouseData
{
    public function __construct(
        public string $name,
        public string $description,
        public float $price,
        public string $image,
    ){}
}