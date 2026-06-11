<?php

require_once '../src/Repository/StockBatchRepository.php';

class DashboardController
{
    public function index()
    {
        $repo = new StockBatchRepository();

        $batches = $repo->findAll();

     var_dump($batches);
    die();
        // require 'templates/dashboard/index.php';
require __DIR__ . '/../../templates/dashboard/index.php';
   }
}