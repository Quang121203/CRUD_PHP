<?php

require_once './core/Controller.php';
require_once './app/Models/UserModels.php';

class UserController extends Controller
{
    private $model;

    function __construct()
    {
        $this->model = new UserModel();
    }

    function index()
    {
        $users = $this->model->getAll();
        $this->view('users/user', ['users' => $users]);
    }

    function detail($id = '')
    {
        if (!empty($id)) {
            $user = $this->model->getByID($id);
            echo json_encode($user);
        }
    }

    function delete($id = '')
    {
        if (!empty($id)) {
            $result = $this->model->delete($id);
            echo json_encode($result);
        }
    }

    function update()
    {
        $result = $this->model->update($_POST);
        echo json_encode($result);
    }

    function add()
    {
        $result = $this->model->add($_POST);
        echo json_encode($result);
    }
}
