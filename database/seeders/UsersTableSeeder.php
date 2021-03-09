<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */


     // please run php artisan db:seed --class=UsersTableSeeder 
      // to seed this class
    public function run()
    {

        // tge password was hash so that it may be safer
        $password =bcrypt('password');

        DB::table('users')->insert([

            [
                'name'=>'Administrator',
                'email'=>'business@example.com',
                'password'=>  $password,
                'created_at' =>Carbon::now(),
                'updated_at' =>Carbon::now(),
               ],
        ]);
    }
}
