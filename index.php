<?php
session_start();
require_once "./common/model/User.php";

if (!isset($_SESSION['role'])) {
    header('Location: login.php');
    exit();
}

$controllerPath = $_SESSION['role'] === 'admin' ? 'admin/controller/adminController.php' : 'client/controller/clientController.php';

require_once $controllerPath;

$controllerClass = $_SESSION['role'] === 'admin' ? 'adminController' : 'clientController';

$controller = new $controllerClass();
$controller->handleRequest();
