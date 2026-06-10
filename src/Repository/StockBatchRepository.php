<?php

require_once '../config/Database.php';

class StockBatchRepository
{
    public function findAll(): array
    {
        $pdo = Database::getConnection();

        $stmt = $pdo->query("SELECT * FROM stock_batches");

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}