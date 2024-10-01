<h1>Livros</h1>

<table border="1">
    <tr>
        <th>Id</th>
        <th>Nome</th>
        <th>Json Livros</th>
    </tr>

@foreach ($authors as $author)
    <tr>
        <td>{{$author->id}}</td>
        <td>{{$author->name}}</td>
        <td>{{$author->books->count()}}</td>
    </td>
@endforeach
</table>
