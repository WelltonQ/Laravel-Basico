<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Wellton Quirino',
            'email' => 'welltonq@outlook.com',
            'password' => bcrypt('123456')
        ]);
    }
}
