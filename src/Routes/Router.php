<?php

namespace Routes;

class Router extends AbstractRouter
{
    public function route(string $uri, string $method): callable
    {
        foreach ($this->routes as $route) {
            if ($route->uri === $uri && $route->method === strtoupper($method)) {
                //TODO вынести проверку в сервис middleware
                if (!empty($route->middleware) && $route->middleware == 'admin') {
                    if (empty($_SESSION['user']['is_admin'])) {
                        $this->abort(403);
                    }
                }

                return (new $route->controller());
            }
        }

        $this->abort();
        die();
    }

    private function abort($code = 404): void
    {
        //TODO
        http_response_code($code);
        die();
    }
}