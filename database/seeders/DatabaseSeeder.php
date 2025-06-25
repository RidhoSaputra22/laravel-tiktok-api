<?php

namespace Database\Seeders;

use App\Models\Komentar;
use App\Models\User;
use App\Models\Video;
use Database\Seeders\VideoSeeder;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        User::factory()->create([
            'nama' => '1',
            'email' => '1',
            'phone' => '1',
            'password' => Hash::make('1'),
            'photo' => config('app.url') . '/file/user/1.png',
        ]);

        // $this->call(UserSeeder::class);
        $this->call(VideoSeeder::class);
        // $this->call(KomentarSeeder::class);
    }
}