<x-layout>
    @foreach($users as $user)
        <ul>
            @if($user->role_id == 5)
                <p>Hello World {{$user->role->role}}</p>
            @endif
        </ul>
    @endforeach

    @foreach($appointments as $apt)
        <ul>
            <li>
                {{$apt->user->name}}
            </li>
        </ul>
    @endforeach
</x-layout>

