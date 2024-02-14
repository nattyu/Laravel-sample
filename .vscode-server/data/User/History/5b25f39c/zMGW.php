<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostAttendance extends Model
{
    use HasFactory;

    protected $fillable = [

    ];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function elected_court() {
        return $this->belongsTo(PostCourt::class);
    }

    public function court_info() {
        return $this->belongsTo(RegistNewCourt::class);
    }
}
