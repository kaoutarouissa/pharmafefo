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

function role()
{
    return $_SESSION['user']['role'] ?? null;
}

if (!isset($_SESSION['user']) && $action !== 'login') {
    header("Location: index.php?action=login");
    exit;
}

switch ($action) {

    case 'login':
        $authController->login();
        break;

    case 'logout':
        $authController->logout();
        break;

     case 'admin_dashboard':
        if (role() === 'admin') {
            $adminController->dashboard();
        } else {
            echo "Access denied";
        }
        break;

   case 'pharmacien_dashboard':
        if (role() === 'pharmacien' || role() === 'admin') {
            $pharmacienController->dashboard();
        } else {
            echo "Access denied";
        }
        break;
// case 'store_stock':
//     $stockController->store();
//     break;
    case 'store_stock':
    $stockController->store();
    break;
      case 'preparateur_dashboard':
        if (role() === 'preparateur' || role() === 'admin') {
            $preparateurController->dashboard();
        } else {
            echo "Access denied";
        }
        break;
        case 'alerts':
    if (in_array(role(), ['admin', 'pharmacien', 'preparateur'])) {
        $preparateurController->alerts();
    } else {
        echo "Accessff denied";
    }
    break;

    default:
        echo "404 - Page introuvable";
}