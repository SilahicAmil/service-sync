<x-layout>
    <h2>User Appointments:</h2>
    <ul class="mb-4">
        @foreach($appointments as $apt)
            {{--            change this to use auth user id eventually--}}
{{--        also need to create component for this--}}
            @if($apt->user_id = 2)
                <x-form-card>
                    <li>{{$apt->service_name}} - {{$apt->user->name}}</li>
                </x-form-card>
            @endif
        @endforeach
    </ul>

</x-layout>