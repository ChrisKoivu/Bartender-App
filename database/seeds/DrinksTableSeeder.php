<?php

use Illuminate\Database\Seeder;

class DrinksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('drinks')->insert([
            'name' => 'Tom Collins',
            'description' => 'This classic cocktail is made with gin, lemon juice, sugar, and carbonated water.',
            'amount' => 7.99,
            'img_link' => '/images/tom-collins.jpg',
        ]);

        DB::table('drinks')->insert([
            'name' => 'Mojito',
            'description' => 'mojito is a cocktail made with white rum, sugar, lime juice, soda water, and mint',
            'amount' => 8.99,
            'img_link' => '/images/tom-collins.jpg',
        ]);
        
        DB::table('drinks')->insert([
            'name' => 'Mudslid',
            'description' => 'mojito is a cocktail made with white rum, sugar, lime juice, soda water, and mint',
            'amount' => 8.99,
            'img_link' => '/images/tom-collins.jpg',
        ]);
    }
}
