<h1>User login</h1>


<form action="login", method="POST"> 
 @csrf
<input type="text" name="username" placeholder="Enter username"/> <br> 
<span style="color: red">@error('username'){{$message}}@enderror</span>
<br>
<input type="text" name="password" placeholder="Enter password"/> <br>
<span style="color: red">@error('password'){{$message}}@enderror</span>
<br>
<button type="submit">Login</button>
</form>