@extends('layouts.main')
@section('content')


<table>
    <tr>
        <th>name ||</th>
        <th>event_start ||</th>
        <th>event_end ||</th>
        <th>available_tickets ||</th>
        <th>location ||</th>
        <th>price ||</th>
        <th>description ||</th>
    </tr>
    @foreach($events as $event)
        <tr>
            <td>{{ $event->name }}</td>
            <td>{{ $event->event_start }}</td>
            <td>{{ $event->event_end }}</td>
            <td>{{ $event->available_tickets }}</td>
            <td>{{ $event->location }}</td>
            <td>{{ $event->price }}</td>
            <td>{{ $event->description }}</td>
                
        </tr>
    @endforeach
</table>
@endsection