<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HotelConfiguration;
use App\Models\Reservation;

class ReservationController extends Controller
{

    public function index()
    {
        $reservations = Reservation::with('hotelConfiguration')->get();

        return view('reservation.index', compact('reservations'));
    }

    public function create()
    {
        $configurations = HotelConfiguration::all();
        return view('reservation.create', compact('configurations'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'hotel_configuration_id' => 'required|exists:hotel_configurations,id',
            'ages.*' => 'required|integer',
        ]);
    
        $hotelConfiguration = HotelConfiguration::findOrFail($request->hotel_configuration_id);
    
        // Logic for pax distribution
        $ages = json_decode($request->ages, true);


        
        $adults = [];
        $children = [];
    
        foreach ($ages as $age) {
            if ($age >= 16) {
                $adults[] = $age;
            } else {
                $adults[] = $age;  // Treat any age less than 18 as an adult
            }
        }
    
        // Distribute pax into rooms
        $rooms = [];
        while (count($adults) > 0 || count($children) > 0) {
            $room = [];
    
            // Fill the room with adults and children
            for ($i = 0; $i < $hotelConfiguration->max_persons; $i++) {
                if (count($adults) > 0) {
                    $room[] = array_shift($adults);
                } elseif (count($children) > 0) {
                    $room[] = array_shift($children);
                }
            }
    
            $rooms[] = $room;
        }
        foreach ($rooms as $room) {
            $numChildren = count(array_filter($room, fn($age) => $age < 16));
            $numAdults = count(array_filter($room, fn($age) => $age >= 16));
    
            if ($numChildren == 1 && $numAdults == 0) {
                return back()->withErrors(['child_alone' => 'We cannot put a child alone in a room.']);
            }
        }
        // Save the reservation
        $reservation = Reservation::create([
            'hotel_configuration_id' => $hotelConfiguration->id,
            'ages' => json_encode($ages), // Save ages as JSON
        ]);
    
        return view('reservation.show', compact('reservation', 'rooms'));
    }
    
    
    
    


    public function show(Reservation $reservation)
    {
        // Decode the JSON string into an array
        $ages = json_decode($reservation->ages, true);
    
        return view('reservation.show', compact('reservation', 'ages'));
    }
    
}