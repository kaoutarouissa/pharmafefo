<?php

require_once '../config/Database.php';


class StockRepository
{
    private PDO $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function addStock($productId, $lot, $qty, $expiry,$status)
    {
        $stmt = $this->pdo->prepare("
            INSERT INTO stock_batches (product_id, lot_number, quantity, expiry_date, status)
            VALUES (?, ?, ?, ?, ?)
        ");

        return $stmt->execute([$productId, $lot, $qty, $expiry, $status]);
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

public function getExpiredAndExpiring()
{
    $sql = "SELECT sb.*, p.name
            FROM stock_batches sb
            JOIN products p ON p.id = sb.product_id
            WHERE sb.quantity > 0
            AND (
                sb.expiry_date < CURDATE()
                OR sb.expiry_date BETWEEN CURDATE()
                AND DATE_ADD(CURDATE(), INTERVAL 30 DAY)
            )
            ORDER BY sb.expiry_date ASC";

    return $this->pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
}
}