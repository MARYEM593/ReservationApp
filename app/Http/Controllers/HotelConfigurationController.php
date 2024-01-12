<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HotelConfiguration;
class HotelConfigurationController extends Controller
{
    public function index()
    {
        $configurations = HotelConfiguration::all();
        return view('hotel_configuration.index', compact('configurations'));
    }
    public function create()
    {
        return view('hotel_configuration.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'age_group' => 'required',
            'max_persons' => 'required|integer',
        ]);

        HotelConfiguration::create($request->all());

        return redirect()->route('hotel_configuration.index')
            ->with('success', 'Hotel configuration created successfully');
    }

    public function edit(HotelConfiguration $hotelConfiguration)
    {
        return view('hotel_configuration.edit', compact('hotelConfiguration'));
    }

    public function update(Request $request, HotelConfiguration $hotelConfiguration)
    {
        $request->validate([
            'age_group' => 'required',
            'max_persons' => 'required|integer',
        ]);

        $hotelConfiguration->update($request->all());

        return redirect()->route('hotel_configuration.index')
            ->with('success', 'Hotel configuration updated successfully');
    }

    public function destroy(HotelConfiguration $hotelConfiguration)
    {
        // Delete related reservations first
        $hotelConfiguration->reservations()->delete();
    
        // Now delete the hotel configuration
        $hotelConfiguration->delete();
    
        return redirect()->route('hotel_configuration.index')
            ->with('success', 'Hotel configuration and related reservations deleted successfully');
    }
}

