<?php

use App\User;
use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;


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

        $password = Hash::make('admin');

        User::create([
            'name' => 'Administrator',
            'email' => 'admin@gmail.com',
            'password' => $password
        ]);

        $faker = Factory::create();

        for($i = 0; $i < 10; $i++)
        {
            User::create([
                'name' => $faker->name,
                'email' => $faker->email,
                'password' => $password
            ]);
        }
    }
}
