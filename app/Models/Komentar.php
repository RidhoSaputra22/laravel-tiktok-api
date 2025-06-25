<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Komentar extends Model
{
    /** @use HasFactory<\Database\Factories\KomentarFactory> */
    use HasFactory;

    protected $fillable = [
        'komentar',
        'dateCreated',
        'user_id',
        'video_id',
    ];

    public function video()
    {
        return $this->belongsTo(Video::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
