<?php

$service_name = [
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
]
?>


<x-layout>
    <x-form-card>
        <form action="" class="flex-col flex">
            <label for="worker">Worker</label>
            <select name="worker" id="worker">
                @foreach($users->sortByDesc('role_id') as $worker)
                    @if($worker->role_id == 1 || $worker->role_id == 5)
                        <option value="{{$worker->id}}">{{$worker->name}} - {{$worker->role->role}}</option>
                    @endif
                @endforeach
            </select>
            <label for="vehicle_make">Vehicle Make</label>
            <label>
                <input type="text">
            </label>
            <label for="vehicle_model">Vehicle Model</label>
            <label>
                <input type="text">
            </label>
            <label for="vehicle_year">Vehicle Year</label>
            <label>
                <input type="number">
            </label>
            <label for="service_name">Service</label>
            <label>
                <select name="service_name" id="service_name">
                    @foreach($service_name as $services)
                        <option value="{{$services}}">{{$services}}</option>
                    @endforeach
                    <option value="other">Other</option>
                </select>
            </label>
            <label for="service_date">Service Date</label>
            <label>
                <input type="date">
            </label>
            <label for="vehicle_vin">Vehicle Vin</label>
            <label>
                <input type="text">
            </label>
            <label for="service_notes">Notes</label>
            <label>
                <input type="text">
            </label>
        </form>
    </x-form-card>
</x-layout>