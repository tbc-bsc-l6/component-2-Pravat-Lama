<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // admin
        User::create([
            'name' => 'admin',
            'email' => 'admin@root.com',
            'email_verified_at' => now(),
            'password' => crypt('root'), //'root' password is encrypted using crypt function
            'is_admin' => true,
        ]);

        User::create([
            'name' => 'test',
            'email' => 'test@gmail.com',
        ]);
    }
}
