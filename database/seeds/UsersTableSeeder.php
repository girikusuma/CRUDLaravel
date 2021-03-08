<?php

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
        App\User::create([
            'role_id' => 1,
            'nim' => '1234567890',
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'username' => 'admin',
            'password' => 'admin'
        ]);

        App\User::create([
            'role_id' => 2,
            'nim' => '1708561005',
            'name' => 'Giri Kusuma',
            'email' => 'girikusuma7@gmail.com',
            'username' => 'girikusuma7',
            'password' => 'girikusuma7'
        ]);
    }
}
