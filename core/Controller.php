<?php

class Controller
{
    function view($name, $data=[])
    {
        extract($data);
        require_once './app/Views/' . $name . '.php';
    }
}
