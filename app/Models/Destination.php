<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Laravolt\Indonesia\Models\Kelurahan;

class Destination extends Model
{
    use HasFactory;
    
    protected $guarded = [];

    public static function boot()
    {
        parent::boot();
        self::creating(function ($query) {
            $query->user_id = Auth::user()->id;
        });
    }

    public function tickets()
    {
        return $this->hasMany(DestinationTicket::class);
    }

    public function orders()
    {
        return $this->hasMany(DestinationTicketOrder::class);
    }

    public function packages()
    {
        return $this->hasMany(DestinationPackage::class);
    }

    public function scopeOwned($query)
    {
        return $query->where('user_id', Auth::user()->id);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function kelurahan()
    {
        return $this->belongsTo(Kelurahan::class);
    }
}