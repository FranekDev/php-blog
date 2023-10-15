<?php

namespace Core;

use Core\Middleware\Middleware;

class Router
{
    protected array $routes = [];

    public function add(string $method, string $uri, string $controller, string $middleware = null): static
    {
        $this->routes[] = compact('method', 'uri', 'controller', 'middleware');

        return $this;
    }

    public function get(string $uri, string $controller): static
    {
        return $this->add('GET',$uri, $controller);
    }

    public function post(string $uri, string $controller): static
    {
        return $this->add('POST', $uri, $controller);
    }

    public function delete(string $uri, string $controller): static
    {
        return $this->add('DELETE', $uri, $controller);
    }

    public function patch(string $uri, string $controller): static
    {
        return $this->add('PATCH', $uri, $controller);
    }

    public function put(string $uri, string $controller): static
    {
        return $this->add('PUT', $uri, $controller);
    }

    public function only(string $key): static
    {
        $this->routes[array_key_last($this->routes)]['middleware'] = $key;

        return $this;
    }

    public function route(string $uri, string $method): mixed
    {
        foreach ($this->routes as $route) {
            if ($route['uri'] === $uri && $route['method'] === strtoupper($method)) {
                Middleware::resolve($route['middleware']);

                return require base_path('Http/controllers/' . $route['controller']);
            }
        }

        $this->abort();
    }

    public function previousUrl(): mixed
    {
        return $_SERVER['HTTP_REFERER'];
    }

    protected function abort(int $code = 404): never {
        http_response_code($code);

        require base_path("views/{$code}.php");

        die();
    }

    public function routes(): array
    {
        return $this->routes;
    }
}