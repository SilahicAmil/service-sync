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
            <label for="name">Vehicle Make</label>
            <label>
                <input type="text">
            </label>
            <label for="name">Vehicle Model</label>
            <label>
                <input type="text">
            </label>
            <label for="name">Vehicle Year</label>
            <label>
                <input type="text">
            </label>
            <label for="name">Service Name</label>
            <label>
                <input type="text">
            </label>
            <label for="name">Service Date</label>
            <label>
                <input type="text">
            </label>
            <label for="name">Vehicle Vin</label>
            <label>
                <input type="text">
            </label>
            <label for="name">Notes</label>
            <label>
                <input type="text">
            </label>
        </form>
    </x-form-card>

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

