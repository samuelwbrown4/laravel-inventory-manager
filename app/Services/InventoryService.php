<?php

namespace App\Services;

use App\Models\Product;

class InventoryService
{
    public function isLowStock(Product $product): bool
    {
        return $product->quantity < 10;
    }

    public function updateStock(Product $product, int $quantity): void
    {
        $product->quantity += $quantity;
        $product->save();
    }
}