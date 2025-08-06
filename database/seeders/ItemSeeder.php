<?php

namespace Database\Seeders;

use App\Models\Item;
use Illuminate\Database\Seeder;

class ItemSeeder extends Seeder
{
    public function run(): void
    {
        Item::insert([
            [
                'name' => 'Ichiraku Ramen',
                'description' => 'Bowl of authentic Japanese noodles with rich broth, tender toppings, and fresh ingredients, perfect for warming your day!',
                'price' => 25000.00,
                'category_id' => 1,
                'img' => 'https://images.unsplash.com/photo-1591325418441-ff678baf78ef',
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Sushi Platter',
                'description' => 'Delicious assortment of fresh sushi rolls and sashimi.',
                'price' => 50000.00,
                'category_id' => 1,
                'img' => 'https://images.unsplash.com/photo-1564489563601-c53cfc451e93?q=80&w=1974&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Grilled Steak',
                'description' => 'Juicy grilled steak with a side of vegetables.',
                'price' => 75000.00,
                'category_id' => 1,
                'img' => 'https://images.unsplash.com/photo-1683315446874-e6a629087ef8',
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Fresh Orange Juice',
                'description' => 'Refreshing orange juice made from freshly squeezed oranges.',
                'price' => 15000.00,
                'category_id' => 2,
                'img' => 'https://images.unsplash.com/photo-1650460069032-3c410224fe55?q=80&w=1931&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Strawberry Smoothie',
                'description' => 'Delicious strawberry smoothie made with fresh strawberries and yogurt.',
                'price' => 20000.00,
                'category_id' => 2,
                'img' => 'https://images.unsplash.com/photo-1579954115545-a95591f28bfc?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Chocolate Milkshake',
                'description' => 'Rich and creamy chocolate milkshake topped with whipped cream.',
                'price' => 25000.00,
                'category_id' => 2,
                'img' => 'https://images.unsplash.com/photo-1653852883277-c4b4b9e020e5?q=80&w=1974&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Chicken Salad',
                'description' => 'Fresh chicken salad with a variety of greens and dressing.',
                'price' => 30000.00,
                'category_id' => 1,
                'img' => 'https://images.unsplash.com/photo-1597130869926-224e85944619',
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Vegetable Stir Fry',
                'description' => 'Healthy vegetable stir fry with a mix of colorful veggies.',
                'price' => 20000.00,
                'category_id' => 1,
                'img' => 'https://images.unsplash.com/photo-1705088295613-f5e19e286a40',
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Spaghetti Carbonara',
                'description' => 'Creamy spaghetti carbonara with bacon and parmesan.',
                'price' => 35000.00,
                'category_id' => 1,
                'img' => 'https://images.unsplash.com/photo-1673442635965-34f1b36d8944?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Beef Burger',
                'description' => 'Classic beef burger with cheese, lettuce, and tomato.',
                'price' => 40000.00,
                'category_id' => 1,
                'img' => 'https://images.unsplash.com/photo-1543392765-620e968d2162?q=80&w=1987&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Chicken Wings',
                'description' => 'Spicy chicken wings with a side of ranch dressing.',
                'price' => 25000.00,
                'category_id' => 1,
                'img' => 'https://images.unsplash.com/photo-1614398750956-402891a7dce1?q=80&w=2071&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Vegetable Pizza',
                'description' => 'Delicious vegetable pizza with a variety of toppings.',
                'price' => 45000.00,
                'category_id' => 1,
                'img' => 'https://images.unsplash.com/photo-1617470702892-e01504297e84?q=80&w=2072&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
