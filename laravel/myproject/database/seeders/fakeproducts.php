<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use DB;
class fakeproducts extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {  
         for ($i=0; $i < 15; $i++) { 
             
             DB::table('products')->insert([
                 'title' => $faker->name,
                 'description' => $faker->address,
                 'price' =>rand(10, 1000),
                 'quntity' => rand(10,1000),
                 
                         ] );
         }
    }
}
