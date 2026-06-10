<?php

require_once '../config/Database.php';


class StockRepository
{
    private PDO $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function addStock($productId, $lot, $qty, $expiry)
    {
        $stmt = $this->pdo->prepare("
            INSERT INTO stock_batches (product_id, lot_number, quantity, expiry_date)
            VALUES (?, ?, ?, ?)
        ");

        return $stmt->execute([$productId, $lot, $qty, $expiry]);
    }

    public function getStock()
    {
        $stmt = $this->pdo->query("
            SELECT b.*, p.name, p.code
            FROM stock_batches b
            JOIN products p ON p.id = b.product_id
            ORDER BY b.expiry_date ASC
        ");

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}