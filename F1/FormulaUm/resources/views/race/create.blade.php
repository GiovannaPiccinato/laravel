<section>
  <form action="/race/store" method="post">
  @csrf
    <span> Nome da corrida </span>
    <input type='text' name='name'>

    <br>
    <span> Local da corrida </span>
    <input type='text' name='location'>
     <br>
    <span> Numero de voltas </span>
    <input type='number' name='laps'>

    <br>

    <span> Data da corrida </span>
    <input type='date' name='date'>

    <br>

     <span> Nome do pilot</span>
     <select multiple name="pilot_id[]">
       @foreach(App\Models\Pilot::all() as $pilot)
        <option value="{{$pilot->id}}">{{$pilot->name}}</option>

       @endforeach
     </select>

    <br>
    <button type='submit'> Salvar </button>

  </form>
</section>
