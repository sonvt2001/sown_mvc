<?php

class adminController
{
    public function handleRequest()
    {
        $action = isset($_GET['action']) ? $_GET['action'] : 'dashboard';
        switch ($action) {
            case 'dashboard':
                $this->showDashboard();
                break;
            default:
                $this->showDashboard();
                break;
        }
    }

    public function showDashboard()
    {
        header('Location: admin/view/admin_dashboard.php ');
    }
}
