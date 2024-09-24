<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;

    public function facilities()
    {
        return $this->belongsToMany(RoomFacility::class, 'rooms_facilities_relation', 'room_id', 'facility_id');
    }

    public function scopeWithOffers($query)
    {
        return $query->where('has_offer', 1);
    }

    public function scopeWithSameType($query, $room)
    {
        return $query->where('type', $room->type)
                     ->where('id', '!=', $room->id); // Exclude the current room
    }

    public function finalPrice()
    {
        if ($this->has_offer == 1) {
            return round($this->price_night * (1 - $this->discount / 100), 0);
        }

        return $this->price_night;
    }
    
}
