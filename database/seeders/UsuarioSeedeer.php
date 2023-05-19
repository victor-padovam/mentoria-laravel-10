<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsuarioSeedeer extends Seeder
{

    public function run(): void
    {
        User::create(
            [
                'name' => 'Victor',
                'email' => 'v@gmail.com',
                'password' => Hash::make('senha123'),
            ]
        );
    }
}
