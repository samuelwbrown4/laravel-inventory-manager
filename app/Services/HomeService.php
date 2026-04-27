<?php

namespace App\Services;

use App\Models\Category;
use App\Models\Product;

class HomeService
{
    public function getCategoryCount(): int
    {
        return Category::count();
    }

    public function getProductCount(): int {
        return Product::count();
    }
}
