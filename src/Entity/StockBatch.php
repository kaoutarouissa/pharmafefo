<?php

class StockBatch
{
    public function __construct(
        private int $id,
        private string $lotNumber,
        private string $expiryDate
    ) {}

    public function getLotNumber(): string
    {
        return $this->lotNumber;
    }

    public function getExpiryDate(): string
    {
        return $this->expiryDate;
    }
}