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
            if($query->user_id == null){
                $query->user_id = Auth::user()->id;
            }
        });
    }

    public function scopeOwned($query)
    {
        return $query->where('user_id', Auth::user()->id);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function village()
    {
        return $this->belongsTo(Village::class, 'village_code', 'code');
    }
}
