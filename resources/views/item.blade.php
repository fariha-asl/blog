<h1>User page</h1>

 <!-- http cliet code -->
<table border ="1">
  <tr>
      <td>ID</td>
      <td>Email</td>
      <td>First name</td>
      <td>Last name</td>
      <td>Profile Photo</td>

  </tr>
  @foreach($collection as $item)
  <tr>
      <td>{{$item['id']}}</td>
      <td>{{$item['email']}}</td>
      <td>{{$item['first_name']}}</td>
      <td>{{$item['last_name']}}</td>
      <td><img src= {{$item ['avatar'] }} /> </td>

  </tr>
  @endforeach

</table>

