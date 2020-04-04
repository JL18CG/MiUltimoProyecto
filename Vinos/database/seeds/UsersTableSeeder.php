<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        for($i = 1; $i<=20; $i++){
            User::create([
                'name' => "Usuario  $i",
                'email' => "Usuario$i@gmail.com",
                'password'=>Hash::make("a12345678b"),
                'apellido'=>"Apellido $i",
                'rol'=>'mortal'
            ]);
        }
    }
}
