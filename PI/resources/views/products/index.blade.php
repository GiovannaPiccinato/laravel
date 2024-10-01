@foreach($produtos as $produto)

<div>
    <img style="width: 200px; height: 200px" src="{{$produto->Imagens->first()->IMAGEM_URL}}">
    <p>{{$produto->PRODUTO_NOME}}</p>
    <p>R$ {{$produto->PRODUTO_PRECO - $produto->PRODUTO_DESCONTO}}</p>
    <p>{{$produto->PRODUTO_DESC}}</p>
</div>

@endforeach
