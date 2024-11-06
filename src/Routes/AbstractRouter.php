<?php

namespace Routes;

abstract class AbstractRouter
{
    /** @var array<int, RouteData> */
    protected array $routes;

    public function get($uri, $callback): AbstractRouter
    {
        $this->add($uri, 'GET', $callback);
        return $this;
    }

    public function post($uri, $callback): AbstractRouter
    {
        $this->add($uri, 'POST', $callback);
        return $this;
    }

    public function patch($uri, $callback): AbstractRouter
    {
        $this->add($uri, 'PATCH', $callback);
        return $this;
    }

    public function delete($uri, $callback): AbstractRouter
    {
        $this->add($uri, 'DELETE', $callback);
        return $this;
    }

    public function only(string $key): Router
    {
        $this->routes[array_key_last($this->routes)]->middleware = $key;
        return $this;
    }

    protected function add($uri, $method, $callback): void
    {
        $this->routes[] = new RouteData(
            uri: $uri,
            method: $method,
            controller: $callback
        );
    }
}