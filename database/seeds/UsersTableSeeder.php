<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      User::create([
        'name'	=> str_random(20),
        'email'	=> str_random(10) . 'achmad.heri@gmail.com',
        'password'	=> bcrypt('secret')
      ]);
    }
}
