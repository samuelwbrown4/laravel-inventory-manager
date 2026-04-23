<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\Category;
use App\Models\Product;
use Tests\TestCase;

class ProductTest extends TestCase
{
    use RefreshDatabase;

    public function test_can_create_a_product()
    {
        $category = Category::create(['name' => 'Test Category']);

        $response = $this->post('/products', [
            'name' => 'Test Product',
            'description' => 'A test product',
            'price' => 9.99,
            'quantity' => 10,
            'category_id' => $category->id,
        ]);

        $response->assertRedirect('/products');
        $this->assertDatabaseHas('products', ['name' => 'Test Product']);
    }

    public function test_product_requires_a_name()
    {
        $category = Category::create(['name' => 'Test Category']);

        $response = $this->post('/products', [
            'name' => '',
            'price' => 9.99,
            'quantity' => 10,
            'category_id' => $category->id,
        ]);

        $response->assertSessionHasErrors('name');
        $this->assertDatabaseMissing('products', ['price' => 9.99]);
    }
}
