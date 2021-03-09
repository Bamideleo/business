<?php

namespace Database\Seeders;


use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Factories\Factory;


class guest_infosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      // please run php artisan db:seed --class=guest_infosTableSeeder
      // to seed this class

      
        //  use laravel faker to populate guest db
      $faker =  \Faker\Factory::create();

      // i loop through to get 100 record
      for($i=0; $i<100; $i++){

        DB::table('guest_infos')->insert([

            [
                'firstname'=> $faker->firstName,
                'lastname'=>$faker->lastName,
                'email'=>$faker->safeEmail,
                'phone'=>$faker->phoneNumber,
                'location'=>$faker->address,
                'cv'=>$faker->fileExtension,
                'job_id'=>rand(1,100),
                'created_at' =>Carbon::now(),
                'updated_at' =>Carbon::now(),
               ],
        ]);
      }
    }
}
