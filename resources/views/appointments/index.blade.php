<x-layout></x-layout>
<h2 class="text-2xl mb-4">User Appointments:</h2>
<div class="flex flex-wrap justify-center items-center overflow-x-auto">
    @foreach($appointments as $apt)
        <x-grid-card :appointment="$apt"></x-grid-card>
    @endforeach
</div>


