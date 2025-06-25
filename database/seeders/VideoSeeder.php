<?php

namespace Database\Seeders;

use App\Models\Video;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VideoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $datas = [
            [
                // 'title' => '' ,
                // 'thumbnailUrl' => config('app.url') . '/file/video/thumbnail/1.png',
                'videoUrl' => config('app.url') . '/file/video/video1.mp4',
                'datePosted' => '2025-05-15',
                'views' => '46K',
                'likes' => '1,7 rb',
                // 'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor ',
                // 'user_id' => '1',
            ],
            [
                // 'title' => 'lain sings u duvet',
                // 'thumbnailUrl' => config('app.url') . '/file/video/thumbnail/2.png',
                'videoUrl' => config('app.url') . '/file/video/video2.mp4',
                'datePosted' => '2023-05-15',
                'views' => '1.1M',
                'likes' => '',
                // 'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor ',
                // 'user_id' => '2',
            ],
            [
                // 'title' => 'New maths discoveries! All announced at once!',
                // 'thumbnailUrl' => config('app.url') . '/file/video/thumbnail/3.png',
                'videoUrl' => config('app.url') . '/file/video/video3.mp4',
                'datePosted' => '2025-05-15',
                'views' => '87K',
                'likes' => '1,5 jt',
                // 'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor ',
                // 'user_id' => '3',
            ],

        ];

        foreach ($datas as $data) {
            Video::factory()->create($data);
        }
    }
}