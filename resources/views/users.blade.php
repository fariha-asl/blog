 
 <h1> User Login <h1>

<form action="item" method="$POST">
   {{method_field('Delete')}}
   @csrf
   <input type="Text", name="user name", placeholder="Enter username"> <br><br>
   <input type="Text", name="Password", placeholder="Enter password"> <br><br>
   <button type="submit"> login</button>

</form>
   