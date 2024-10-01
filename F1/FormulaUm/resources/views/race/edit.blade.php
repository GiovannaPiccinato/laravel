<section>
  <form action="/race/{{$race->id}}" method="post">
  @csrf
    @method('PUT')
    <span> Nome da corrida </span>
    <input value="{{$race->name}}" type='text' name='name'>

    <br>
    <span> Local da corrida </span>
    <input value="{{$race->location}}" type='text' name='location'>
     <br>
    <span> Numero de voltas </span>
    <input value="{{$race->laps}}" type='number' name='laps'>

    <br>

    <span> Data da corrida </span>
    <input value="{{$race->date}}" type='date' name='date'>

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
