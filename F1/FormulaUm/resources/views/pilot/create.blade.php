<section>
  <form action="/pilot/store" method="post">
  @csrf
    <span> nome do piloto </span>
    <input type='text' name='name'>

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
