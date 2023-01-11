@extends('layouts.main')
@section('content')
@if(Auth::user()->admin == 0)
    <?php
    header("Location: http://testsysteem.test/");
    exit();
    ?>
@endif
<form action="{{route('processForm')}}"  method="POST">
    @csrf
    <label>name</label>
    <input type="text" name="name"><br>
    <label>photo</label>
    <input type="text" name="photo"><br>
    <label>event_start</label>
    <input type="date" name="event_start"><br>
    <label>event_end</label>
    <input type="date" name="event_end"><br>
    <label>available_tickets</label>
    <input type="number" name="available_tickets"><br>
    <label>location</label>
    <input type="text" name="location"><br>
    <label>price</label>
    <input type="number" name="price"><br>
    <label>description</label>
    <textarea name="description" cols="30" rows="2"></textarea><br>
    <button type="submit">submit</button><br>
</form>
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
            <td>            
                    <div class="bin">
                        <a href="{{ route('delete_team', $event->id) }}"><img src="/img/trash-can-icon-28693.png" height="20px"  alt="verwijderen"></a>
                    </div>
                    </td>
                    <td>
                    <a href="{{ 'edit/'.$event->id }}"> aanpassen</a>
                    </td>
                
        </tr>
    @endforeach
</table>
@endsection