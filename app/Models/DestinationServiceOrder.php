<?php

namespace App\Models;

use Haruncpi\LaravelIdGenerator\IdGenerator;
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
            $query->invoice = IdGenerator::generate(['table' => 'destination_service_orders', 'field' => 'invoice', 'length' => 16, 'prefix' => 'WT' . date('ymd') . $query->service_id, 'reset_on_prefix_change' => true]);
            if ($query->user_id == null) {
                $query->user_id = auth()->user()->id;
            }
        });
    }

    public function service()
    {
        return $this->belongsTo(DestinationService::class, 'service_id');
    }

    public function destination()
    {
        return $this->hasOneThrough(Destination::class, DestinationService::class, 'id', 'id', 'service_id', 'destination_id');
    }

    public function scopeOwnedByUser($query, $userId)
    {
        return $query->whereHas('destination', function ($q) use ($userId) {
            $q->where('user_id', $userId);
        });
    }

    public function users()
    {
        return $this->belongsToMany(User::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function accept()
    {
        return $this->update(['status' => 'Accepted']);
    }

    public function reject()
    {
        return $this->update(['status' => 'Rejected']);
    }
}