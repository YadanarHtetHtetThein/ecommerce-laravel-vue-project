<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'=>'Admin',
            'email'=>'admin@gmail.com',
            'password'=>Hash::make('admin'),
            'role' => 'admin',
            'image'=> 'images/admin.png'
        ]);

        User::create([
            'name'=>'User',
            'email'=>'user@gmail.com',
            'password'=>Hash::make('user'),
            'image'=> 'images/user.png',
            'role' => 'user'
        ]);

        Category::create([
            'name' => 'Shoe',
            'slug' => 'shoe'
        ]);

        Category::create([
            'name' => 'Shoe',
            'slug' => 'shoe'
        ]);

        Category::create([
            'name' => 'Shirt',
            'slug' => 'shirt'
        ]);

        Category::create([
            'name' => 'Phone',
            'slug' => 'pone'
        ]);

        Category::create([
            'name' => 'Computer',
            'slug' => 'computer'
        ]);

        Category::create([
            'name' => 'Clothes',
            'slug' => 'clother'
        ]);

        Product::factory(50)->create();
        // \App\Models\User::factory(10)->create();
    }
}
