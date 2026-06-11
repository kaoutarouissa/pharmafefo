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

        require dirname(__DIR__, 2) . "/templates/prepa/dashboard.php";
    }

    public function alerts()
    {
        // ❌ ما نعاودوش نصايبو repo هنا
        $expiring = $this->stockRepo->getExpiredAndExpiring();

        require   "../templates/alerts.php";
    }
}