<?php

session_start();

require_once '../src/Controller/AuthController.php';
require_once '../src/Controller/AdminControler.php';
require_once '../src/Controller/pharmaController.php';
require_once '../src/Controller/PrepaController.php';
$pdo = require '../config/database.php';
$authController = new AuthController($pdo);
$adminController = new AdminController();
$pharmacienController = new PharmacienController();
$preparateurController = new PreparateurController();

$action = $_GET['action'] ?? 'login';

switch ($action) {

    case 'login':
        $authController->login();
        break;

    case 'logout':
        $authController->logout();
        break;

    case 'admin_dashboard':
        $adminController->dashboard();
        break;

    case 'pharmacien_dashboard':
        $pharmacienController->dashboard();
        break;

    case 'preparateur_dashboard':
        $preparateurController->dashboard();
        break;

    default:
        echo "404 - Page introuvable";
}