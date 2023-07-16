<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Laravolt\Indonesia\Models\Village;

class CultureInformation extends Model
{
    use HasFactory;

    protected $table = 'culture_information';

    protected $guarded = [];

    public static function boot()
    {
        parent::boot();
        self::creating(function ($query) {
            $query->user_id = Auth::user()->id;
        });
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function kelurahan()
    {
        return $this->belongsTo(Village::class, 'kelurahan_id');
    }
}