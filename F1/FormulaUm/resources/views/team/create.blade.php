<section>
  <form action="/team/store" method="post">
  @csrf
    <span> nome </span>
    <input type='text' name='name'>

    <br>

     <span> Número de carros</span>
     <input type='number' name='numOfCars'>

    <br>

     <span> Número de membros</span>
     <input type='number' name='numOfMembers'>

    <br>
    <button type='submit'> Salvar </button>

  </form>
</section>
