<form action="/author/{{$author->id}}" method="POST">
    @method("PUT")
    @csrf
    <input type="text" value="{{$author->name}}" name="name">
    <br>
    <button type="submit"> Salvar </button>
</form>
