<?php

namespace Controllers\Admin\Materials;

class StoreMaterialData
{
    public function __construct(
        public string $name,
        public string $description,
        public float $price,
        public string $image,
    ){}
}