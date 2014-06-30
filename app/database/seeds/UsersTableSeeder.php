<?php

class UsersTableSeeder extends Seeder {

    public function run()
    {
        User::truncate();

        User::create([
            'email' => 'arzinoviev@gmail.com',
            'password' => Hash::make('secret')
        ]);
    }
} 