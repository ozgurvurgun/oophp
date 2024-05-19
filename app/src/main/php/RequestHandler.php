<?php

class RequestHandler extends Router
{
    private string $requestMethod;

    public function __construct(string $requestMethod)
    {
        parent::__construct();
        $this->requestMethod = $requestMethod;
    }

    public function post(string $path, callable $func): void
    {
        $this->handleRequest('POST', $path, $func);
    }

    public function get(string $path, callable $func): void
    {
        $this->handleRequest('GET', $path, $func);
    }

    private function handleRequest(string $method, string $path, callable $func): void
    {
        if ($this->requestMethod === $method) {
            parent::run($path, $func);
        }
    }
}
