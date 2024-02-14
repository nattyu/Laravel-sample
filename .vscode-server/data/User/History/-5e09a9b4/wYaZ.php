<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostCourt extends Model
{
    use HasFactory;

    protected $table = 'post_courts';

    protected $fillable = [
        'user_id',
        'court_id',
        'court_number',
        'start_time',
        'end_time',
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function registNewCourt() {
        return $this->brlongsTo(RegistNewCourt::class);
    }
}
