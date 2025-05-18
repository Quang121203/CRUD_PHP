<?php

class App
{
    private $controller_name, $controller_action, $controller_parrams;

    function __construct()
    {
        $this->controller_name = ROUTE_CONTROLLER;
        $this->controller_action = ROUTE_ACTION;
        $this->handleURL();
        $this->callController();
    }

    function getURL()
    {
        if (!empty(trim($_SERVER['REQUEST_URI']))) {
            return trim($_SERVER['REQUEST_URI']);
        } else {
            return '/';
        }
    }

    function handleURL()
    {
        $url = $this->getURL();
        $urlArr = array_filter(explode('/', $url));
        unset($urlArr[1]);
        $urlArr = array_values($urlArr);

        //handle Controller
        if (!empty($urlArr[0])) {
            
            $this->controller_name = ucfirst($urlArr[0]) . 'Controller';
            if (file_exists('app/Controllers/' . $this->controller_name . '.php')) {
                require_once('Controllers/' . $this->controller_name . '.php');
                unset($urlArr[0]);
            }
        } else {
            require_once('Controllers/' . $this->controller_name . '.php');
        }


        //handle Action
        if (!empty($urlArr[1])) {
            $this->controller_action = $urlArr[1];
            unset($urlArr[1]);
        }

        //hande Parrams
        $this->controller_parrams = $urlArr;
    }

    function loadError()
    {
        require_once('Views/errors/404.php');
    }

    function callController()
    {
        if (
            class_exists($this->controller_name) &&
            method_exists($controller = new $this->controller_name(), $this->controller_action)
        ) {
            $controller->{$this->controller_action}(...$this->controller_parrams);
        } else {
            $this->loadError();
        }
    }
}
