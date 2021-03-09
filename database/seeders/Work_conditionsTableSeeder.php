<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Work_conditionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */


     // please run php artisan db:seed --class=Work_conditionsTableSeeder
      // to seed this class
    public function run()
    {
        DB::table('work_conditions')->insert([

            [
                'condition'=>'Remote',
                'created_at' =>Carbon::now(),
                'updated_at' =>Carbon::now(),
               ],
            
               [
                'condition'=>'Part Remote',
                'created_at' =>Carbon::now(),
                'updated_at' =>Carbon::now(),
               ],

               [
                'condition'=>'On-Premise',
                'created_at' =>Carbon::now(),
                'updated_at' =>Carbon::now(),
               ],
        ]);
    }
}
