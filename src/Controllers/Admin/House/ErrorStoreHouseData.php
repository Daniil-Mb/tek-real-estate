<?php

namespace Controllers\Admin\House;

class ErrorStoreHouseData
{
    public function __construct(
        public ?string $name = null,
        public ?string $description = null,
        public ?float $price = null,
        public ?string $image = null,
    ){}
}