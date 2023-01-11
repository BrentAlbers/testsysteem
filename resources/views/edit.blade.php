@extends('layouts.main')
@section('content')
@if(Auth::user()->admin == 0)
    <?php
    header("Location: http://testsysteem.test/");
    exit();
    ?>
@endif
<form action="{{route('edit', $event->id)}}"  method="POST">
    @csrf
    <label>name</label>
    <input type="text" value="{{$event->name}}" name="name"><br>
    <label>photo</label>
    <input type="text" value="{{$event->photo}}" name="photo"><br>
    <label>event_start</label>
    <input type="datetime" value="{{$event->event_start}}" name="event_start"><br>
    <label>event_end</label>
    <input type="datetime" value="{{$event->event_end}}" name="event_end"><br>
    <label>available_tickets</label>
    <input type="number" value="{{$event->available_tickets}}" name="available_tickets"><br>
    <label>location</label>
    <input type="text" value="{{$event->location}}" name="location"><br>
    <label>price</label>
    <input type="number" value="{{$event->price}}" name="price"><br>
    <label>description</label>
    <textarea name="description"  cols="30" rows="2">{{$event->description}}</textarea><br>
    <button type="submit">submit</button><br>
</form>