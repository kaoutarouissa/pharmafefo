<?php

session_start();

require_once '../src/Controller/AuthController.php';
require_once '../src/Controller/AdminControler.php';
require_once '../src/Controller/pharmaController.php';
require_once '../src/Controller/PrepaController.php';
require_once '../src/Controller/StockController.php';
require_once '../src/Repository/StockBatchRepository.php';
$pdo = require '../config/database.php';
$authController = new AuthController($pdo);
$adminController = new AdminController();
$pharmacienController = new PharmacienController();
$stockRepo = new StockRepository($pdo);
$preparateurController = new PreparateurController($stockRepo);
$stockRepository = new StockRepository($pdo);
$stockController = new StockController($stockRepository);
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
// case 'store_stock':
//     $stockController->store();
//     break;
    case 'store_stock':
    $stockController->store();
    break;
    case 'preparateur_dashboard':
        $preparateurController->dashboard();
        break;

    default:
        echo "404 - Page introuvable";
}