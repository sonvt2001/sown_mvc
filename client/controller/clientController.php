<?php
class clientController
{
    public function handleRequest()
    {
        $action = isset($_GET['action']) ? $_GET['action'] : 'home';
        switch ($action) {
            case 'home':
                $this->home();
                break;
            default:
                $this->home();
                break;
        }
    }

    public function home()
    {
        header('Location: client/view/home.php');
    }
}
