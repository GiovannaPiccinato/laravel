<form action="/authors" method="POST">
    @csrf
    <!-- O CSRF é obrigatório para que a página funcione -->
    <span>Nome do Autor: </span>
    <input type="text" name="name" id="name">
    <!-- // name pode ter varios nomes e o ID só pode ter um único -->
    <br>
    <button type="submit"> Enviar </button>
</form>

