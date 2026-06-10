<?php

class StockController
{
    private StockRepository $repo;

    public function __construct(StockRepository $repo)
    {
        $this->repo = $repo;
    }

    // 📊 Dashboard stock
    public function index()
    {
        $stock = $this->repo->getStock();
var_dump($stock);
exit;
        include __DIR__ . "/../templates/prepa/dashboard.php";
    }

    // ➕ Add product batch
   public function store()
{
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        $this->repo->addStock(
            $_POST['product_id'],
            $_POST['lot_number'],
            $_POST['quantity'],
            $_POST['expiry_date']
        );

        header("Location: index.php?action=preparateur_dashboard");
exit;
        exit;
    }
}

    // ➖ Dispatch FEFO
    public function dispatch()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $productId = $_POST['product_id'];
            $qty = $_POST['qty'];

            $this->repo->removeStockFEFO($productId, $qty);

           header("Location: index.php?action=preparateur_dashboard");
            exit;
        }
    }
}