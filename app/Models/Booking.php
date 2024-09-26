<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    public function status()
    {
        return $this->belongsTo(BookingStatus::class, 'status_id');
    }

    public function room()
    {
        return $this->belongsTo(Room::class);
    }
}
