<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

         // please run php artisan db:seed --class=CategoriesTableSeeder
      // to seed this class
    public function run()
    {
        DB::table('categories')->insert([
            [
             'category'=>'Tech',
             'created_at' =>Carbon::now(),
             'updated_at' =>Carbon::now(),
            ],

            [
                'category'=>'Health',
                'created_at' =>Carbon::now(),
                'updated_at' =>Carbon::now(),
               ],

               [
                'category'=>'Hospitality',
                'created_at' =>Carbon::now(),
                'updated_at' =>Carbon::now(),
               ],

               [
                'category'=>'Custom Service',
                'created_at' =>Carbon::now(),
                'updated_at' =>Carbon::now(),
               ],

               [
                'category'=>'Marketing',
                'created_at' =>Carbon::now(),
                'updated_at' =>Carbon::now(),
               ],
        ]);
    }
}
