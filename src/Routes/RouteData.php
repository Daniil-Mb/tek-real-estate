<?php

namespace Routes;

use Closure;

class RouteData
{
    public function __construct(
        public string $uri,
        public string $method,
        public string $controller,
        public ?string $middleware = null,
    ){}
}