<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datas = [
            [

                'nama' => 'Machine Learning Street Talk',
                'tanggal_lahir' => '1990-01-01',
                'gender' => 'Male',
                'email' => 'ml@talk.com',
                'password' => bcrypt('123456'),
                'photo' => config('app.url') . '/file/user/1.png',
            ],
            [

                'nama' => 'Juliana Chahayed',
                'tanggal_lahir' => '1995-05-10',
                'gender' => 'Female',
                'email' => 'juliana@example.com',
                'password' => bcrypt('password123'),
                'photo' => config('app.url') . '/file/user/2.png',
            ],
            [

                'nama' => 'Neo Urban',
                'tanggal_lahir' => '1988-08-20',
                'gender' => 'Male',
                'email' => 'neo@urban.com',
                'password' => bcrypt('secure123'),
                'photo' => config('app.url') . '/file/user/3.png',
            ],
            [

                'nama' => 'Alpha Tech',
                'tanggal_lahir' => '1992-02-28',
                'gender' => 'Other',
                'email' => 'alpha@tech.com',
                'password' => bcrypt('alpha456'),
                'photo' => config('app.url') . '/file/user/4.png',
            ],
            [

                'nama' => 'ArtMix Vision',
                'tanggal_lahir' => '1997-11-11',
                'gender' => 'Female',
                'email' => 'artmix@vision.com',
                'password' => bcrypt('vision789'),
                'photo' => config('app.url') . '/file/user/5.png',
            ],
            [

                'nama' => 'Romano Geopolitics',
                'tanggal_lahir' => '1980-07-07',
                'gender' => 'Male',
                'email' => 'romano@geo.com',
                'password' => bcrypt('romano321'),
                'photo' => config('app.url') . '/file/user/6.png',
            ],
        ];

        foreach ($datas as $data) {
            User::create($data);
        }
    }
}