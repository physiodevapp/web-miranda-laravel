<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookingStatus extends Model
{
    use HasFactory;

    public function() {
        return $this->hasMany(Booking::class, 'status_id');
    }
}
