<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('users')->insert([
            [
                'id' => '1',
                'role_id' => '1',
                'name' => 'Admin',
                'username' => 'admin',
                'no_hp' => '0',
                'jk' => null,
                'alamat' => '-',
                'email' => 'admin@mail.com',
                'password' => Hash::make('admin')
            ],
            [
                'id' => '2',
                'role_id' => '2',
                'name' => 'Riska',
                'username' => 'riska',
                'no_hp' => '08980102061',
                'jk' => 'P',
                'alamat' => 'Kp. Tipar Timur',
                'email' => 'pmulyanariska@gmail.com',
                'password' => Hash::make('12345678')
            ]
        ]);
    }
}
