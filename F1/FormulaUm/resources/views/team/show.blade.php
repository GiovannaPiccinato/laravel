<p>{{$team->name}}</p>
<p>{{$team->numOfCars}}</p>
<p>{{$team->numOfMembers}}</p>

@foreach($team->Pilots as $pilot)
<p>{{$pilot->name}}</p>
@endforeach

<form action="/team/{{$team->id}}" method="post">
  @csrf
  @method("DELETE")

  <button type="submit">DELETAR!!</button>
</form>
