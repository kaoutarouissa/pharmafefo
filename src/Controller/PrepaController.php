<?php

// require_once '../src/Repository/StockBatchRepository.php';
require_once __DIR__ . '/../Repository/StockBatchRepository.php';

class PreparateurController
{
    private StockRepository $stockRepo;

    public function __construct(StockRepository $stockRepo)
    {
        $this->stockRepo = $stockRepo;
    }

    public function dashboard()
    {
        $stock = $this->stockRepo->getStock();

require dirname(__DIR__, 2) . "/templates/prepa/dashboard.php";    }
}