<?php

namespace Database\Seeders;


use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Factories\Factory;

class jobsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */



    // please run php artisan db:seed --class=jobsTableSeeder
      // to seed this class
    public function run()
    {
        //  use laravel faker to populate guest db
      $faker =  \Faker\Factory::create();
      $sourceDir='image.png';
      for($i=0; $i < 100; $i++){

        DB::table('jobs')->insert([

            [
               
                'title'=>$faker->text($maxNbChars = 15),
                'company'=>$faker->text($maxNbChars =10 ),
                'company_logo'=>  $sourceDir,
                'salary'=>'150000 per month',
                'category'=>'Tech',
                'location'=>$faker->address,
                'description'=>$faker->paragraph,
                'benefit'=>$faker->sentence($nb = 6, $asText= false),
                'job_type'=>'Full-time',
                'conditions'=>'Remote',
                'created_at' =>Carbon::now(),
                'updated_at' =>Carbon::now(),
               ],
        ]);
      }
    }
}
