<?php

namespace App\Services;

use App\Models\Category;

class CategoryService
{
    public function hasProducts(Category $category): bool
    {
        return $category->products()->count() > 0;
    }

    
}