<?php

require_once './core/Controller.php';
require_once './app/Models/UserModels.php';

class LoginController extends Controller
{
    private $model;

    function __construct()
    {
        $this->model = new UserModel();
    }

    public function index()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $user = $this->model->getByEmail($_POST['email']);
            if ($user && $_POST['password'] == $user['password']) {
                $_SESSION['user'] = $user;
                echo json_encode([
                    'success' => true
                ]);
            } else {
                echo json_encode([
                    'success' => false
                ]);
            }
        } else {
            $this->view('login');
        }
    }


}
