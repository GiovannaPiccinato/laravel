<h1>Lista de Livros</h1>

<a href="/book/create"> Criar novo Livro</a>
<ul>
@foreach($books as $book)
<li>
    <a href="/book/{{$book->id}}"> {{$book->name}} </a>
    <a href="/authors/{{$book->Author->id}}">{{ $book->Author->name }}</a>
    <a href="/book/{{$book->id}}/edit">Editar</a>
    <form action="/book/{{$book->id}}" method="POST" style="display:inline-block">
    @method('delete')
    @csrf
    <button type="submit">Deletar</button>
    </form>
</li>
@endforeach
</ul>

<!-- <table border="1">
    <tr>
        <th>Id</th>
        <th>Nome</th>
        <th>Num. Paginas</th>
        <th>Autor</th>
    </tr>

@foreach ($books as $book)
    <tr>
        <td>{{$book->id}}</td>
        <td>{{$book->name}}</td>
        <td>{{$book->numOfPages}}</td>
        <td>{{$book->author->name}}</td>
    </td>
@endforeach
</table> -->
