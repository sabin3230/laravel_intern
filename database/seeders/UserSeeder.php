<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB; 
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use app\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      



         DB::table('users')->insert(  
            ['name'=>'sabin', 'address'=>'hattigauda', 'phone_no' => '948444', 'email' =>'sabin@gmail.com' ]
      );

    }
}
