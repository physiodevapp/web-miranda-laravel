<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Room;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $rooms = Room::all();

        foreach ($rooms as $room) {
            $room->photos = explode(',', $room->photos);

            $room->facilities = $room->facilities->toArray();
        }

        return view('rooms', compact('rooms'));
    }

    public function indexOffers()
    {
        //
        $rooms = Room::withOffers()->get();

        foreach ($rooms as $room) {
            $room->facilities = $room->facilities->toArray();

            $room->photos = explode(',', $room->photos);

            $room->price_night = round($room->price_night, 0);
        }

        return view('offers', compact('rooms'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $room = Room::find($id);

        $room->photos = explode(',', $room->photos);

        $room->facilities = $room->facilities->toArray();

        $similarRooms = Room::withSameType($room)->get()->map(function ($similarRoom) {
            $similarRoom->facilities = $similarRoom->facilities->toArray();
        
            $similarRoom->photos = explode(',', $similarRoom->photos);
        
            return $similarRoom;
        });

        return view('details', compact('room','similarRooms') );
    }

}
