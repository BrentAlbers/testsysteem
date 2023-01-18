@extends('layouts.main')
@section('content')


<table>
    <tr>
        <th>event name ||</th>
        <th>event location ||</th>
        <th>event start ||</th>
        <th>event end ||</th>
        <th>buyer name </th>
    </tr>
    @foreach ($tickets as $ticket)
        @if ($ticket->buyer_id == Auth::id())
        <tr>
            <td>{{$ticket->event->name}}</td>
            <td>{{$ticket->event->location}}</td>
            <td>{{$ticket->event->event_start}}</td>
            <td>{{$ticket->event->event_end}}</td>
            <td>{{Auth::user()->name}}</td>
        </tr>
        @endif
    @endforeach
</table>
@endsection