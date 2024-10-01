
<table border="2">
  <tr>
    <th>Nome do Piloto </th>
    <th>Equipe do Piloto </th>

  </tr>
@foreach($pilots as $pilot)
  <tr>
    <td> {{$pilot->name}} </td>
    <td> {{$pilot->Team->name}} </td>
  </tr>
@endforeach
</table>
