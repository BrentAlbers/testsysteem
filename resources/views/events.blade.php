@extends('layouts.main')
@section('content')
<form action="{{route('processForm')}}"  method="POST">
    @csrf
    <label>name</label>
    <input type="text" name="name">
    <label>photo</label>
    <input type="text" name="phot">
    <label>event_start</label>
    <input type="date" name="event_start">
    <label>event_end</label>
    <input type="date" name="event_end">
    <label>available_tickets</label>
    <input type="number" name="available_tickets">
    <label>location</label>
    <input type="text" name="location">
    <label>price</label>
    <input type="number" name="price">
    <label>description</label>
    <textarea name="description" cols="30" rows="10"></textarea>
</form>
@endsection