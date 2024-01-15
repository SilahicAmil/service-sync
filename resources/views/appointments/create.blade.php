<?php

$service_names = [
    'Full Service A',
    'Full Service B',
    'Oil Change',
    'Brake Inspection',
    'Tire Rotation',
    'Engine Tune-Up',
    'Transmission Fluid Change',
    'Wheel Alignment',
    'Battery Replacement',
    'Coolant Flush',
    'Air Filter Replacement',
    'Spark Plug Replacement',
    'Exhaust System Inspection',
    'Suspension Check',
    'Power Steering Fluid Flush',
];

natcasesort($service_names);
?>


<x-layout>
    <x-form-card>
        <form action="{{route('appointments.store')}}" method="POST" class="flex-col flex">
            @csrf
            <label for="user_id">Service Provider</label>
            <select name="user_id" id="user_id">
                @foreach($users->sortByDesc('role_id') as $worker)
                    @if($worker->role_id == 1 || $worker->role_id == 4)
                        <option value="{{$worker->id}}">{{$worker->name}} - {{$worker->role->role}}</option>
                    @endif
                @endforeach
            </select>
            <label for="vehicle_make">Vehicle Make</label>
            <label>
                <input type="text" name="vehicle_make">
            </label>
            <label for="vehicle_model">Vehicle Model</label>
            <label>
                <input type="text" name="vehicle_model">
            </label>
            <label for="vehicle_year">Vehicle Year</label>
            <label>
                <input type="number" name="vehicle_year">
            </label>
            <label for="vehicle_miles">Vehicle Miles</label>
            <label>
                <input type="number" name="vehicle_miles">
            </label>

            <label for="service_name">Service</label>
            <label>
                <select name="service_name" id="service_name" onchange="toggleTextBox()">
                    @foreach($service_names as $services)
                        <option value="{{$services}}">{{$services}}</option>
                    @endforeach
                </select>
            </label>
            <label for="service_date">Service Date</label>
            <label>
                <input type="date" name="service_date">
            </label>
            <label for="vehicle_vin">Vehicle Vin</label>
            <label>
                <input type="text" name="vehicle_vin">
            </label>
            <label for="additional_notes">Notes</label>
            <label>
                <input type="text" name="additional_notes">
            </label>
            <button type="submit">Submit</button>
        </form>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

    </x-form-card>
</x-layout>
