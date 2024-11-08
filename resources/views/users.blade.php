<x-layout>
    <div class="flex flex-col">

        <h1 class="text-[50px] text-red-500 font-bold">Users</h1>
        <div class="flex flex-col">
            @foreach ($users as $user)
                <a href="/user/{{$user['id']}}"> {{$user['name']}} </a>
            @endforeach
        </div>
    </div>
</x-layout> 