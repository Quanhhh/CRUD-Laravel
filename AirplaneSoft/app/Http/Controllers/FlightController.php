<?php

namespace App\Http\Controllers;

use App\Models\Flight;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FlightController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('flights.index', ['flights' => Flight::paginate(10)]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $flights = DB::table('flights')->get();  
        return view('flights.create', compact('flights'));
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'Flight_ID' => 'required',
            'Aircraft_ID' => 'required',
            'Departure_Airport' => 'required',
            'Arrival_Airport' => 'required',
            'Departure_Time' => 'required',
            'Arrival_Time' => 'required',
            'Flight_Duration' => 'required'
        ]);
        $Flight_ID = $request->input('Flight_ID');
        $Aircraft_ID = $request->input('Aircraft_ID');
        $Departure_Airport = $request->input('Departure_Airport');
        $Arrival_Airport = $request->input('Arrival_Airport');
        $Departure_Time = $request->input('Departure_Time');
        $Arrival_Time = $request->input('Arrival_Time');
        $Flight_Duration = $request->input('Flight_Duration');
        $validateData = $request->validate([
            'Flight_ID' => 'required',
            'Aircraft_ID' => 'required',
            'Departure_Airport' => 'required',
            'Arrival_Airport' => 'required',
            'Departure_Time' => 'required',
            'Arrival_Time' => 'required',
            'Flight_Duration' => 'required'
        ]);

        DB::table('flights')->insert([
            'Flight_ID' => $Flight_ID,
            'Aircraft_ID' => $Aircraft_ID,
            'Departure_Airport' => $Departure_Airport,
            'Arrival_Airport' => $Arrival_Airport,
            'Departure_Time' => $Departure_Time,
            'Arrival_Time' => $Arrival_Time,
            'Flight_Duration' => $Flight_Duration
        ]);
        return redirect()->route('flights.index')->with('success', 'Flight added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Flight $flight)
    {
        return view('flights.show', compact('flight'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Flight $flight)
    {
        $flights = DB::table('flights')->get();
        // $flights = Flight::all();
        return view('flights.edit', [
            'flight' => $flight
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Flight $flight)
    {
        $Aircraft_ID = $request->input('Aircraft_ID');
        $Departure_Airport = $request->input('Departure_Airport');
        $Arrival_Airport = $request->input('Arrival_Airport');
        $Departure_Time = $request->input('Departure_Time');
        $Arrival_Time = $request->input('Arrival_Time');
        $Flight_Duration = $request->input('Flight_Duration');

        $validateData = $request->validate([
            'Aircraft_ID' => 'required',
            'Departure_Airport' => 'required',
            'Arrival_Airport' => 'required',
            'Departure_Time' => 'required',
            'Arrival_Time' => 'required',
            'Flight_Duration' => 'required' 
        ]);

        $flight->update([
            'Aircraft_ID' => $Aircraft_ID,
            'Departure_Airport' => $Departure_Airport,
            'Arrival_Airport' => $Arrival_Airport,
            'Departure_Time' => $Departure_Time,
            'Arrival_Time' => $Arrival_Time,
            'Flight_Duration' => $Flight_Duration
        ]);

        return redirect()->route('flights.index')->with('success', 'Flight Data has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Flight $flight)
    {
        $flight->delete();
        return redirect()->route('flights.index')->with('success', 'Flight Data deleted successfully');
    }

    public function search(Request $request)
{
    $query = $request->input('query');
    $flights = Flight::where('Flight_ID', 'LIKE', "%{$query}%")
                      ->orWhere('Aircraft_ID', 'LIKE', "%{$query}%")
                      ->paginate(10);

    return view('flights.index', compact('flights'))->with('query', $query);
}
}
