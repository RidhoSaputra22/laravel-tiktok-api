<?php

namespace Database\Seeders;

use App\Models\Komentar;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KomentarSeeder extends Seeder
{
    public function run()
    {
        $datas = [
            [
                'id' => 1,
                'komentar' => 'Video yang sangat bagus!',
                'dateCreated' => '2025-05-15',
                'user_id' => 1,
                'video_id' => 1,
            ],
            [
                'id' => 2,
                'komentar' => 'Saya suka video ini.',
                'dateCreated' => '2023-05-15',
                'user_id' => 2,
                'video_id' => 2,
            ],
            [
                'id' => 3,
                'komentar' => 'Kontennya menarik dan bermanfaat.',
                'dateCreated' => '2025-05-10',
                'user_id' => 3,
                'video_id' => 3,
            ],
            [
                'id' => 4,
                'komentar' => 'Bagus banget videonya.',
                'dateCreated' => '2025-05-12',
                'user_id' => 4,
                'video_id' => 4,
            ],
            [
                'id' => 5,
                'komentar' => 'Mantap, terus berkarya!',
                'dateCreated' => '2025-05-13',
                'user_id' => 5,
                'video_id' => 5,
            ],
            [
                'id' => 6,
                'komentar' => 'Video ini keren!',
                'dateCreated' => '2025-05-14',
                'user_id' => 6,
                'video_id' => 6,
            ],
        ];

        foreach ($datas as $data) {
            Komentar::create($data);
        }
    }
}