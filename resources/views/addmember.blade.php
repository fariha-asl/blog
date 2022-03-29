
<h1> Add Member Page</h1>

<form action="add"  method ="POST">
 @csrf

  <input type="text" name="name" placeholder="Enter name"> <br><br>
  <input type="text" name="email" placeholder="Enter email"> <br><br>
  <input type="text" name="address" placeholder="Enter address"> <br><br>
  <button type ="submit">Add Member</button>
</form>