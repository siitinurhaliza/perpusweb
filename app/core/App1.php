<?php

class App
{
    protected $controller = 'Home';
    protected $method = 'index';
    protected $params = [];

    public function __construct()
    {
        $url = $this->parseURL();

        //Tentukan direktori berdasarkan url
        $controllerDir ='../app/controllers/';
        if (isset($url[0]) && ($url[0] === 'backsite')){
            $controllerDir .= 'backsite/';
            unset($url[0]);
            }else{
                $controllerDir .= 'frontsite';
        }


        //controller
        if (file_exists('../app/controllers/' . $url[1] . '.php')) {
            $this->controller = $url[1];
            unset($url[1]);
        }

        require_once '../app/controllers/' . $this->controller . '.php';
        $this->controller = new $this->controller;

        //method1
        if (isset($url[2])) {
            if (method_exists($this->controller, $url[2])) {
                $this->method = $url[2];
                unset($this[2]);
            }
        }

        //parameter
        if (!empty($url)) {
            $this->params = array_values($url);
        }

        //jalankan controller &method, serta kirimkan params
        call_user_func_array([$this->controller, $this->method], $this->params);

    }

    public function parseURL()
    {
        if (isset($_GET['url'])) {
            $url = rtrim($_GET['url'], '/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/', $url);
            return $url;
        }
    }
}