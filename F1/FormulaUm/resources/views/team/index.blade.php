
<table border="2">
  <tr>
    <th>Nome da equipe </th>
    <th>Número de carros </th>
    <th>Número de Membros </th>
  </tr>
@foreach($teams as $team)
  <tr>
    <td> {{$team->name}} </td>
    <td> {{$team->numOfCars}} </td>
    <td> {{$team->numOfMembers}} </td>
  </tr>
@endforeach
</table>
