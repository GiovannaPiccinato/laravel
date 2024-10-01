<section>
  <form action="/team/{{$team->id}}" method="post">
  @csrf
  @method('PUT')
    <span> nome </span>
    <input value="{{$team->name}}" type='text' name='name'>

    <br>

     <span> Número de carros</span>
     <input value="{{$team->numOfCars}}" type='number' name='numOfCars'>

    <br>

     <span> Número de membros</span>
     <input value="{{$team->numOfMembers}}" type='number' name='numOfMembers'>

    <br>
    <button type='submit'> Salvar </button>

  </form>
</section>
