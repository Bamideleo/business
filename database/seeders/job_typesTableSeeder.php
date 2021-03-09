<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class job_typesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */


         // please run php artisan db:seed --class=job_typesTableSeeder
      // to seed this class
    public function run()
    {
        DB::table('job_types')->insert([

            [
                'jb_type'=>'Full-time',
                'created_at' =>Carbon::now(),
                'updated_at' =>Carbon::now(),
               ],
            

               [
                'jb_type'=>'Temporary',
                'created_at' =>Carbon::now(),
                'updated_at' =>Carbon::now(),
               ],

               [
                'jb_type'=>'Contract',
                'created_at' =>Carbon::now(),
                'updated_at' =>Carbon::now(),
               ],

               [
                'jb_type'=>'Permanent',
                'created_at' =>Carbon::now(),
                'updated_at' =>Carbon::now(),
               ],

               [
                'jb_type'=>'Internship',
                'created_at' =>Carbon::now(),
                'updated_at' =>Carbon::now(),
               ],

               [
                'jb_type'=>'Volunteer',
                'created_at' =>Carbon::now(),
                'updated_at' =>Carbon::now(),
               ],

            ]);
    }
}
