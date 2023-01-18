


<form action="{{route('createticket', $event->id)}}"  method="POST">
    @csrf

    <button type="submit">kopen</button><br>
</form>

