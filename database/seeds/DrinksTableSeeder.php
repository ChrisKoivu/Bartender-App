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
            'drink_name' => 'Tom Collins',
            'description' => 'This classic cocktail is made with gin, lemon juice, sugar, and carbonated water.',
            'amount' => 7.99,
            'img_link' => '/images/tom-collins.jpg',
        ]);

        DB::table('drinks')->insert([
            'drink_name' => 'Mojito',
            'description' => 'The Mojito is a cocktail made with white rum, sugar, lime juice, soda water, and mint',
            'amount' => 8.99,
            'img_link' => '/images/mojito.jpg',
        ]);
        
        DB::table('drinks')->insert([
            'drink_name' => 'Mudslide',
            'description' => 'This cocktail is made with a decadent mix of vodka, Kahlua and Bailey’s Irish Cream.',
            'amount' => 8.99,
            'img_link' => '/images/mudslide.jpg',
        ]);
        
        DB::table('drinks')->insert([
            'drink_name' => 'Martini',
            'description' => 'This cocktail is made with gin and vermouth, and garnished with an olive.',
            'amount' => 8.99,
            'img_link' => '/images/martini.jpg',
        ]);
    }
}
