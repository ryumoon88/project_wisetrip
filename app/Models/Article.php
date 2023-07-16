<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Article extends Model
{
    use HasFactory;

    protected $guarded = [];

    public static function boot()
    {
        parent::boot();
        static::creating(function ($query) {
            $query->user_id = Auth::user()->id;
        });
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}