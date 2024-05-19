<?php

class Project
{
    private string $html = './app/src/main/web/';
    private RequestHandler $request;

    public function main(): void
    {
        new EnvLoader();
        $this->request = new RequestHandler($_SERVER['REQUEST_METHOD']);
        $this->web();
        $this->api();
    }

    private function api(): void
    {
        $this->request->post('/login', function () {
            echo 'You came here via the POST method.';
            //You can process post requests here
            //You can add put, delete methods as methods just like get and post.
            //Create your api classes and methods under the apis directory and call and run them from this api method.
        });
    }

    private function web(): void
    {
        $this->request->get('/', function () {
            require_once $this->html . 'home.php';
        });

        $this->request->get('/hello', function () {
            $name = 'Özgür';
            require_once $this->html . 'hello.php';
        });

        if (!$this->request->getHasRoute()) {
            require_once $this->html . '404.php';
        }
    }
}
