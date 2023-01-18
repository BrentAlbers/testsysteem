@extends('layouts.main')
@section('content')

<div class="sm:grid grid-cols-2 gap-20 w-4/5 mt-20 mx-auto py-15 border-b border-gray-200">
    <table class="table-auto w-full text-left">
        <tr class="bg-gray-200">
            <th class="px-4 py-2">name </th>
            <th class="px-4 py-2">event_start </th>
            <th class="px-4 py-2">event_end </th>
            <th class="px-4 py-2">available_tickets </th>
            <th class="px-4 py-2">location </th>
            <th class="px-4 py-2">price </th>
            <th class="px-4 py-2">description </th>
        </tr>
        @foreach($events as $event)
            <tr class="bg-white">
                <td class="border px-4 py-2">{{ $event->name }}</td>
                <td class="border px-4 py-2">{{ $event->event_start }}</td>
                <td class="border px-4 py-2">{{ $event->event_end }}</td>
                <td class="border px-4 py-2">{{ $event->available_tickets }}</td>
                <td class="border px-4 py-2">{{ $event->location }}</td>
                <td class="border px-4 py-2">{{ $event->price }}</td>
                <td class="border px-4 py-2">{{ $event->description }}</td>
                <td class="border px-4 py-2">
                    <div class="create ticket">
                        <a href="{{ 'buyticket/'.$event->id }}">ticket kopen</a>
                    </div>  
                </td>
                
            </tr>
        @endforeach
    </table>
</div>


@endsection