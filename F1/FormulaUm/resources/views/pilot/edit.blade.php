<section>
  <form action="/pilot/{{$pilot->id}}" method="post">
  @csrf
    @method('PUT')

    <span> nome do piloto </span>
    <input value="{{$pilot->name}}" type='text' name='name'>

    <br>

     <span> Nome da Equipe</span>
     <select name="team_id">
       @foreach(App\Models\Team::all() as $team)
        <option value="{{$team->id}}">{{$team->name}}</option>
       @endforeach
     </select>

    <br>
    <button type='submit'> Salvar </button>

  </form>
</section>
