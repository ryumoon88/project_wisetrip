<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Laravolt\Indonesia\Models\Kelurahan;
use Laravolt\Indonesia\Models\Village;

class Destination extends Model
{
    use HasFactory;

    protected $casts = ['images' => 'array'];

    protected $guarded = [];

    public static function boot()
    {
        parent::boot();
        self::creating(function ($query) {
            if ($query->user_id == null) {
                $query->user_id = Auth::user()->id;
            }
        });
    }

    public function services()
    {
        return $this->hasMany(DestinationService::class);
    }

    public function orders()
    {
        return $this->hasManyThrough(DestinationServiceOrder::class, DestinationService::class, 'destination_id', 'service_id');
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

    public function approve()
    {
        return $this->update(['status' => 'Approved']);
    }

    public function reject()
    {
        return $this->update(['status' => 'Rejected']);
    }
}