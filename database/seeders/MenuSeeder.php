<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Menu;

class MenuSeeder extends Seeder
{
    public function run(): void
    {

        Menu::create([
            'nama_makanan' => 'Ichiraku Ramen',
            'deskripsi' => 'Bowl of authentic Japanese noodles with rich broth, tender toppings, and fresh ingredients, perfect for warming your day!',
            'harga' => 25000,
            'gambar' => 'https://images.unsplash.com/photo-1591325418441-ff678baf78ef'
        ]);

        Menu::create([
            'nama_makanan' => 'Sushi Platter',
            'deskripsi' => 'Delicious assortment of fresh sushi rolls and sashimi.',
            'harga' => 50000,
            'gambar' => 'https://images.unsplash.com/photo-1564489563601-c53cfc451e93?q=80&w=1974&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'
        ]);

        Menu::create([
            'nama_makanan' => 'Grilled Steak',
            'deskripsi' => 'Juicy grilled steak with a side of vegetables.',
            'harga' => 75000,
            'gambar' => 'https://images.unsplash.com/photo-1683315446874-e6a629087ef8'
        ]);

        Menu::create([
            'nama_makanan' => 'Fresh Orange Juice',
            'deskripsi' => 'Refreshing orange juice made from freshly squeezed oranges.',
            'harga' => 15000,
            'gambar' => 'https://images.unsplash.com/photo-1650460069032-3c410224fe55?q=80&w=1931&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'
        ]);

        Menu::create([
            'nama_makanan' => 'Strawberry Smoothie',
            'deskripsi' => 'Delicious strawberry smoothie made with fresh strawberries and yogurt.',
            'harga' => 20000,
            'gambar' => 'https://images.unsplash.com/photo-1579954115545-a95591f28bfc?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'
        ]);

        Menu::create([
            'nama_makanan' => 'Chocolate Milkshake',
            'deskripsi' => 'Rich and creamy chocolate milkshake topped with whipped cream.',
            'harga' => 25000,
            'gambar' => 'https://images.unsplash.com/photo-1653852883277-c4b4b9e020e5?q=80&w=1974&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'
        ]);

        Menu::create([
            'nama_makanan' => 'Chicken Salad',
            'deskripsi' => 'Fresh chicken salad with a variety of greens and dressing.',
            'harga' => 30000,
            'gambar' => 'https://images.unsplash.com/photo-1597130869926-224e85944619'
        ]);

        Menu::create([
            'nama_makanan' => 'Vegetable Stir Fry',
            'deskripsi' => 'Healthy vegetable stir fry with a mix of colorful veggies.',
            'harga' => 20000,
            'gambar' => 'https://images.unsplash.com/photo-1705088295613-f5e19e286a40'
        ]);

        Menu::create([
            'nama_makanan' => 'Spaghetti Carbonara',
            'deskripsi' => 'Creamy spaghetti carbonara with bacon and parmesan.',
            'harga' => 35000,
            'gambar' => 'https://images.unsplash.com/photo-1673442635965-34f1b36d8944?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'
        ]);

        Menu::create([
            'nama_makanan' => 'Beef Burger',
            'deskripsi' => 'Classic beef burger with cheese, lettuce, and tomato.',
            'harga' => 40000,
            'gambar' => 'https://images.unsplash.com/photo-1543392765-620e968d2162?q=80&w=1987&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'
        ]);

        Menu::create([
            'nama_makanan' => 'Chicken Wings',
            'deskripsi' => 'Spicy chicken wings with a side of ranch dressing.',
            'harga' => 25000,
            'gambar' => 'https://images.unsplash.com/photo-1614398750956-402891a7dce1?q=80&w=2071&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'
        ]);

        Menu::create([
            'nama_makanan' => 'Vegetable Pizza',
            'deskripsi' => 'Delicious vegetable pizza with a variety of toppings.',
            'harga' => 45000,
            'gambar' => 'https://images.unsplash.com/photo-1617470702892-e01504297e84?q=80&w=2072&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'
        ]);
        // ...existing code...
    }
}
