<p>{{$pilot->name}}</p>
<p>{{$pilot->Team->name}}</p>


@foreach($pilot->Races as $race)
<p>{{$race->name}}</p>
@endforeach

<form action="/pilot/{{$pilot->id}}" method="post">
  @csrf
  @method("DELETE")

  <button type="submit">DELETAR!!</button>
</form>
