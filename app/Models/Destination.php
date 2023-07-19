<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Destination extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function tickets()
    {
        return $this->hasMany(DestinationTicket::class, 'destination_id');
    }
}