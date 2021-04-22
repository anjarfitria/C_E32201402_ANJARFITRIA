<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder,
    App\Models\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::insert([
            'name' => 'Anjar',
            'email' => 'anjarfitria043@gmail.comp',
            'password' => bcrypt12345678,
        ]);
    }
}