<form action="/book" method="POST">
    @csrf
    <!-- O CSRF é obrigatório para que a página funcione -->
    <span>Nome do Livro: </span>
    <input type="text" name="name" id="name">
    <!-- // name pode ter varios nomes e o ID só pode ter um único -->
    <br>
    <span>Quantidade de páginas</span>
    <input type="number" name="numOfPages" id="numOfPages">

    <div>
        <span>Autor:</span>
        <select name="author_id">
            <!-- está pegando as informações do author_id -->
            @foreach ($authors as $autor)
            <!-- está armazenando as informações de authors para autor -->
            <option value="{{$autor->id}}">{{$autor->name}}</option>
            <!-- irá mostrar nas opções os autores cadastrados -->
            @endforeach
        </select>
    </div>

        <div>
            <span>Tags</span>
            <select name="tags[]" multiple>
                @foreach(\App\Models\Tag::all() as $tag)
                <option value="{{$tag->id}}">{{$tag->name}}</option>
                @endforeach
            </select>
        </div>

    <button type="submit"> Criar </button>
</form>

