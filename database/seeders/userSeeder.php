<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            'name'=>"Admin",
            'email'=>"admin@gmail.com",
            'password'=>Hash::make('admin@b9'),
        ];
        User::insert($data);
    }
}
