<?php

class Router
{
    private bool $hasRoute = false;
    private string $location;

    public function __construct()
    {
        $splitUrl = explode('/', rtrim($_ENV['BASE_URL'], '/'));
        $basePath = '/' . end($splitUrl);
        $request_uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        $request_uri = str_replace($basePath, '', $request_uri);
        if ($request_uri !== '/') {
            $request_uri = rtrim($request_uri, '/');
        }
        $this->location = $request_uri;
    }

    public function location(): string
    {
        return $this->location;
    }

    protected function run(string $path, callable $func): void
    {
        if ($this->location === $path) {
            $this->hasRoute = true;
            call_user_func($func);
        }
    }

    public function getHasRoute(): bool
    {   
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            return true;
        } else {
            return $this->hasRoute;
        }
    }
}
