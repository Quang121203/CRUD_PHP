<?php
require_once './core/Controller.php';

class PrivateController extends Controller
{
    public function __construct()
    {
        if (!isset($_SESSION['user'])) {
            header('Location: /' . FOLDER . '/login');
            exit;
        }
    }
}

?>