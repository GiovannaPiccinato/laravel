
<table border="2">
  <tr>
    <th>Nome da corrida</th>
    <th>Localização</th>
    <th>Voltas da corrida </th>
    <th>Data</th>
    <th>Numero de pilotos</th>

  </tr>
@foreach($races as $race)
  <tr>
    <td> {{$race->name}} </td>
    <td> {{$race->location}} </td>
    <td> {{$race->laps}} </td>
    <td> {{$race->date}} </td>
    <td> {{$race->Pilots->count()}} </td>
  </tr>
@endforeach
</table>
