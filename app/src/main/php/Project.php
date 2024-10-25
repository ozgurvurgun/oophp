<?php

class Project
{
    private Http $http;
    private Router $router;
    private EnvLoader $envLoader;

    public function main(): void
    {
        $this->initializeDependencies();
        $this->web();
    }

    private function initializeDependencies(): void
    {
        $this->envLoader = new EnvLoader();
        $this->router = new Router();
        $this->http = new Http($_SERVER['REQUEST_METHOD'], $this->router);
    }

    private function web(): void
    {
        $this->http->get('/', function () {
            $json_data = file_get_contents('./public/data/concepts.json');
            $conceptData = json_decode($json_data, true);
            require_once $_ENV['VIEW_PATH'] . 'homepage.php';
        });

        $this->http->get('/team', function () {
            $json_data = file_get_contents('./public/data/team.json');
            $teamData = json_decode($json_data, true);
            require_once $_ENV['VIEW_PATH'] . 'team.php';
        });


        $this->http->get('/research', function () {
            $json_data = file_get_contents('./public/data/research.json');
            $researchData = json_decode($json_data, true);
            require_once $_ENV['VIEW_PATH'] . 'research.php';
        });

        $this->http->get('/publications', function () {
            $json_data = file_get_contents('./public/data/publications.json');
            $publicationsData = json_decode($json_data, true);
            require_once $_ENV['VIEW_PATH'] . 'publications.php';
        });

        $this->http->get('/contact', function () {
            require_once $_ENV['VIEW_PATH'] . 'contact.php';
        });

        $this->http->get('/news', function () {
            require_once $_ENV['VIEW_PATH'] . 'news.php';
        });


        if (!$this->router->getHasRoute()) {
            echo "404";
        }
    }
}
