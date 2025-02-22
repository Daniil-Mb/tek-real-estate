<?php

namespace Controllers\Admin\Materials;

class MaterialData
{
    public function __construct(
        public int $id,
        public string $name,
        public string $description,
        public float $price,
        public string $image,
    ){}
}