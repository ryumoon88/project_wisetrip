<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DestinationServiceOrder extends Model
{
    use HasFactory;

    protected $guarded = [];


    public static function boot()
    {
        parent::boot();
        parent::creating(function ($query) {
            if ($query->user_id == null) {
                $query->user_id = auth()->user()->id;
            }
        });
    }

    public function service()
    {
        return $this->belongsTo(DestinationService::class, 'service_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
