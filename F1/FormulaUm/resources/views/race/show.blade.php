<p>{{$race->name}}</p>
<p>{{$race->location}}</p>
<p>{{$race->laps}}</p>
<p>{{$race->date}}</p>


@foreach($race->Pilots as $pilot)
<p>{{$pilot->name}}</p>
@endforeach

<form action="/race/{{$race->id}}" method="post">
  @csrf
  @method("DELETE")

  <button type="submit">DELETAR!!</button>
</form>
