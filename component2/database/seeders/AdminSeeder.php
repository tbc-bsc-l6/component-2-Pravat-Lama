<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::create([
            'name' => 'admin',
            'email' => 'admin@root.com',
            'email_verified_at' => now(),
            'password' => bcrypt('root'), //'root' password is encrypted using crypt function
            'is_admin' => true,
        ]);
        User::create([
            'name' => 'test',
            'email' => 'test@root.com',
            'email_verified_at' => now(),
            'password' => bcrypt('test'), //'root' password is encrypted using crypt function
            'is_admin' => false,
        ]);
    }
}
