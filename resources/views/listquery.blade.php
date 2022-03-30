<table border="2">
@foreach($data as $item)
<tr>
  <td>{{$item->id}}</td>
  <td>{{$item->name}}</td>
  <td>{{$item->email}}</td>
  <td>{{$item->address}}</td>
</tr>
@endforeach
</table>