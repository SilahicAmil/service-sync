<x-layout>

    <x-form-card>
        <a href="/appointments">View All &nbsp</a>
        <h1>Total Appointments: &nbsp</h1>
            <p>{{$appointments->count()}}</p>
    </x-form-card>
    <h2>User Appointments:</h2>
    <ul>
        @foreach($appointments as $apt)
{{--            change this to use auth user id eventually--}}
            @if($apt->user_id = 2)
                <li>{{$apt->service_name}} - {{$apt->user->name}}</li>
            @endif
        @endforeach
    </ul>

</x-layout>

