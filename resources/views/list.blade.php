<h1> Member List </h1>
<table border="2" >
    <tr>
     <td>ID</td>
     <td>Name</td>
     <td>Email</td>
     <td>Address</td>
     <td>Operation</td>
     </tr>
@foreach($members as $item )
   <tr>
     <td>{{$item['id']}}</td>
     <td>{{$item['name']}}</td>
     <td>{{$item['email']}}</td>
     <td>{{$item['address']}}</td>
     <td><a href="{{url('/delete',[$item->id])}}">Delete</a></td>
    
    </tr>

@endforeach

</table>




<!-- for pagination 
<span>
   {{$members->links()}}
</span>

<style>
    .w-5{
        display :none
  }

</style>
––>
