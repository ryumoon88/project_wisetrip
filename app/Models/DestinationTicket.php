<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DestinationTicket extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function destination()
    {
        return $this->belongsTo(Destination::class);
    }
}