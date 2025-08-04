<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Menu;

class MenuSeeder extends Seeder
{
    public function run(): void
    {

        // ...existing code...
        Menu::create([
            'nama_makanan' => 'Ichiraku Ramen',
            'deskripsi' => 'Bowl of authentic Japanese noodles with rich broth, tender toppings, and fresh ingredients, perfect for warming your day!',
            'harga' => 25000
        ]);

        Menu::create([
            'nama_makanan' => 'Sushi Platter',
            'deskripsi' => 'Delicious assortment of fresh sushi rolls and sashimi.',
            'harga' => 50000
        ]);

        Menu::create([
            'nama_makanan' => 'Grilled Steak',
            'deskripsi' => 'Juicy grilled steak with a side of vegetables.',
            'harga' => 75000
        ]);

        Menu::create([
            'nama_makanan' => 'Fresh Orange Juice',
            'deskripsi' => 'Refreshing orange juice made from freshly squeezed oranges.',
            'harga' => 15000
        ]);

        Menu::create([
            'nama_makanan' => 'Strawberry Smoothie',
            'deskripsi' => 'Delicious strawberry smoothie made with fresh strawberries and yogurt.',
            'harga' => 20000
        ]);

        Menu::create([
            'nama_makanan' => 'Chocolate Milkshake',
            'deskripsi' => 'Rich and creamy chocolate milkshake topped with whipped cream.',
            'harga' => 25000
        ]);

        Menu::create([
            'nama_makanan' => 'Chicken Salad',
            'deskripsi' => 'Fresh chicken salad with a variety of greens and dressing.',
            'harga' => 30000
        ]);

        Menu::create([
            'nama_makanan' => 'Vegetable Stir Fry',
            'deskripsi' => 'Healthy vegetable stir fry with a mix of colorful veggies.',
            'harga' => 20000
        ]);

        Menu::create([
            'nama_makanan' => 'Spaghetti Carbonara',
            'deskripsi' => 'Creamy spaghetti carbonara with bacon and parmesan.',
            'harga' => 35000
        ]);

        Menu::create([
            'nama_makanan' => 'Beef Burger',
            'deskripsi' => 'Classic beef burger with cheese, lettuce, and tomato.',
            'harga' => 40000
        ]);

        Menu::create([
            'nama_makanan' => 'Chicken Wings',
            'deskripsi' => 'Spicy chicken wings with a side of ranch dressing.',
            'harga' => 25000
        ]);

        Menu::create([
            'nama_makanan' => 'Vegetable Pizza',
            'deskripsi' => 'Delicious vegetable pizza with a variety of toppings.',
            'harga' => 45000
        ]);
        // ...existing code...
    }
}
