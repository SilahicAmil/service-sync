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
                <option value=""></option>
                @foreach($users->sortByDesc('role_id') as $worker)
                    @if($worker->role_id == 2 || $worker->role_id == 3)
                        <option value="{{$worker->id}}">{{$worker->name}} - {{$worker->role->role}}</option>
                    @endif
                @endforeach
            </select>

            @error('user_id')
            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror

            <label for="vehicle_make">Vehicle Make</label>
            <label>
                <input type="text" name="vehicle_make" value="{{old('vehicle_make')}}">
            </label>

            @error('vehicle_make')
            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror

            <label for="vehicle_model">Vehicle Model</label>
            <label>
                <input type="text" name="vehicle_model" value="{{old('vehicle_model')}}">
            </label>

            @error('vehicle_model')
            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror

            <label for="vehicle_year">Vehicle Year</label>
            <label>
                <input type="number" name="vehicle_year" value="{{old('vehicle_year')}}">
            </label>

            @error('vehicle_year')
            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror

            <label for="vehicle_miles">Vehicle Miles</label>
            <label>
                <input type="number" name="vehicle_miles" value="{{old('vehicle_miles')}}">
            </label>

            @error('vehicle_miles')
            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror

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
                <input type="date" name="service_date" value="{{old('service_date')}}">
            </label>

            @error('service_date')
            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror

            <label for="vehicle_vin">Vehicle Vin</label>
            <label>
                <input type="text" name="vehicle_vin" value="{{old('vehicle_vin')}}">
            </label>

            @error('vehicle_vin')
            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror

            <label for="additional_notes">Notes</label>
            <label>
                <input type="text" name="additional_notes" value="{{old('additional_notes')}}">
            </label>

            @error('additional_notes')
            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror

            <button type="submit">Submit</button>
        </form>
    </x-form-card>
</x-layout>
