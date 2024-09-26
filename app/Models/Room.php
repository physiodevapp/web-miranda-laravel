<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Carbon\Carbon;

class Room extends Model
{
    use HasFactory;

    public function status()
    {
        return $this->belongsTo(RoomStatus::class, 'status_id');
    }

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

    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }

    public static function getAvailableRooms($checkInDate, $checkOutDate, $roomId = null)
    {
        // Convert the date strings to Carbon instances for better handling
        $checkIn = Carbon::parse($checkInDate);
        $checkOut = Carbon::parse($checkOutDate);

        // Base query for rooms (with or without room ID)
        $query = self::whereDoesntHave('bookings', function($query) use ($checkIn, $checkOut) {
            $query->where(function($query) use ($checkIn, $checkOut) {
                // Check if the booking dates overlap with the requested dates
                $query->where('check_in', '<', $checkOut)
                      ->where('check_out', '>', $checkIn);
            });
        });

        // If roomId is provided, filter for that specific room
        if ($roomId) {
            $query->where('id', $roomId);
        }

        // Get the result
        return $query->get();
    }    
}
