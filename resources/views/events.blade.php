@extends('layouts.main')
@section('content')
@if(Auth::user()->admin == 0)
    <?php
    header("Location: http://testsysteem.test/");
    exit();
    ?>
@endif
<div class="sm:grid grid-cols-2 gap-20 w-4/5 mt-20 mx-auto py-15 border-b border-gray-200">

    <div class="w-4/5 m-auto pt-20 ">
        <form action="{{route('processForm')}}" method="POST" >
            @csrf

            <input
                type="text"
                name="name"
                placeholder="Name"
                class="bg-transparent block border-b-2 w-full h-12 text-l outline-none"
            >
            <input
                type="date"
                name="event_start"
                placeholder="Event_start"
                class="bg-transparent block border-b-2 w-full h-12 text-l outline-none"
            >
            <input
                type="date"
                name="event_end"
                placeholder="Event_end"
                class="bg-transparent block border-b-2 w-full h-12 text-l outline-none"
            >
            <input
                type="text"
                name="location"
                placeholder="Location"
                class="bg-transparent block border-b-2 w-full h-12 text-l outline-none"
            >
            <input
            
                type="number"
                name="price"
                placeholder="Price"
                class="bg-transparent block border-b-2 w-full h-12 text-l outline-none"
            >
            <input
                type="number"
                name="available_tickets"
                placeholder="available tickets"
                class="bg-transparent block border-b-2 w-full h-12 text-l outline-none"
            >

            <textarea name="description" placeholder="Description..." class="py-20 bg-transparent block border-b-2
            w-full h-60 text-xl outline-none"></textarea>

            <div class="bg-grey-lighter pt-10">
            <label class="w-44 flex flex-col items-center px-2 py-3 bg-white-rounded-lg
            shadow-lg tracking-wide uppercase border border-blue cursor-pointer">
                <span class="mt-2 text-base leading-normal">
                    Select a file
                </span>
                <input 
                    type="file"
                    name="image"
                    class="hidden">
            </label>
        </div>

            <button type="submit" class="uppercase mt-14 bg-blue-500 text-gray-100
            text-lg font-extrabold py-4 px-8 rounded-3xl"> Create event</button>
        </form>
    </div><br>
    <div class="w-4/5 m-auto pt-20 ">
        <table class="table-auto w-full text-left">
            <tr class="bg-gray-200">
                <th class="px-4 py-2">name </th>
                <th class="px-4 py-2">event_start </th>
                <th class="px-4 py-2">event_end ||</th>
                <th class="px-4 py-2">available_tickets </th>
                <th class="px-4 py-2">location </th>
                <th class="px-4 py-2">price </th>
                <th class="px-4 py-2">description </th>
                <th class="px-4 py-2">verwijderen </th>
                <th class="px-4 py-2">aanpassen </th>
            </tr>
            @foreach($events as $event)
                <tr class="bg-white">
                    <td  class="border px-4 py-2">{{ $event->name }}</td>
                    <td  class="border px-4 py-2">{{ $event->event_start }}</td>
                    <td  class="border px-4 py-2">{{ $event->event_end }}</td>
                    <td  class="border px-4 py-2">{{ $event->available_tickets }}</td>
                    <td  class="border px-4 py-2">{{ $event->location }}</td>
                    <td  class="border px-4 py-2">{{ $event->price }}</td>
                    <td  class="border px-4 py-2">{{ $event->description }}</td>
                    <td  class="border px-4 py-2">            
                            <div class="bin">
                                <a href="{{ route('delete_team', $event->id) }}"><img width="30" src="/img/trash-can-icon-28693.png" height="20px"  alt="verwijderen"></a>
                            </div>
                            </td >
                            <td  class="border px-4 py-2">
                            <a href="{{ 'edit/'.$event->id }}"> aanpassen</a>
                            </td>
                        
                </tr>
            @endforeach
        </table>
    </div>
</div>

@endsection