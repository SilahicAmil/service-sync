<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;


class AppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() : View
    {
        $appointments = Appointment::latest()->get();
        $users = User::all();
        //   eventually show appointments for the specific user
        return view('index' , compact('appointments', 'users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $users = User::all();
        return view('appointments.create', ['users' => $users]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
//        Log::info('Request data:', $request->all());
//        dd($request->all());

        $validated = $request->validate([
            'user_id' => 'required',
            'vehicle_make' => 'required',
            'vehicle_model' => 'required',
            'vehicle_year' => 'required|integer',
            'service_name' => 'required',
            'service_date' => 'required|date',
            'vehicle_vin' => 'nullable',
            'vehicle_miles' => 'required',
            'service_price' => 'nullable',
            'additional_notes' => 'required',
        ]);



        Log::info('Request data First:', $request->all());

        // Create the appointment
        try {
            Appointment::create($validated);
            // Redirect to the home page with a success message
            return redirect('/google')->with('message', 'Appointment Created!');
        } catch (\Exception $e) {
            // Log the exception for further investigation
            Log::error('Error creating appointment: ' . $e->getMessage());
            // Redirect back with an error message
            return back()->withInput()->with('error', 'Failed to create appointment. Please try again.');
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(Appointment $appointment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Appointment $appointment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Appointment $appointment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Appointment $appointment)
    {
        //
    }
}
