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
// var_dump($stock);
// exit;
        include __DIR__ . "/../templates/prepa/dashboard.php";
    }

    // ➕ Add product batch
   public function store()
{
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
//    if (empty(trim($_POST['lot_number']))) {
//             die('Le numéro de lot est obligatoire');
//         }
        $this->repo->addStock(
            $_POST['product_id'],
            $_POST['lot_number'],
            $_POST['quantity'],
            $_POST['expiry_date'],
            $_POST['status'],
        );

        header("Location: index.php?action=preparateur_dashboard");
exit;
        
require_once '../src/Repository/StockBatchRepository.php';
    }
}

}

// class DashboardController{
//     public function index()
//     {
//         $repo = new StockBatchRepository();


//         $batches = $repo->findAll();

//         foreach ($batches as &$batch) {

//             $today = new DateTime();
//             $expiry = new DateTime($batch['expiry_date']);

//             if ($expiry < $today) {

//                 $batch['status'] = 'EXPIRED';

//             } else {

//                 $days = $today->diff($expiry)->days;

//                 if ($days <= 30) {
//                     $batch['status'] = 'EXPIRING_30_DAYS';
//                 } elseif ($days <= 90) {
//                     $batch['status'] = 'EXPIRING_90_DAYS';
//                 } else {
//                     $batch['status'] = 'ACTIVE';
//                 }
//             }
//         }

//         require __DIR__ . '/../../templates/dashboard/index.php';
//     }
// }

    // ➖ Dispatch FEFO
    // public function dispatch()
    // {
    //     if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    //         $productId = $_POST['product_id'];
    //         $qty = $_POST['qty'];

    //         $this->repo->removeStockFEFO($productId, $qty);

    //        header("Location: index.php?action=preparateur_dashboard");
    //         exit;
    //     }
    // }
