<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\User::create(
            [
                'name'=>'Saadman Sayeed',
                'email'=>'saad@gmail.com',
                'password'=>bcrypt('11112222')
            ]
            );
    }
}
