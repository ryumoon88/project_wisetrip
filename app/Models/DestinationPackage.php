<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DestinationPackage extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function destination()
    {
        return $this->belongsTo(Destination::class);
    }

    public function orders()
    {
        return $this->hasMany(DestinationPackageOrder::class, 'package_id');
    }
}