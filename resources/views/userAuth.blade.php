<h1>login User Auth</h1>


<form action="loginuser", method="POST"> 
 @csrf
<input type="text" name="username" placeholder="Enter username"/> <br> <br>
<input type="password" name="password" placeholder="Enter password"/> <br> <br>
<button type="submit">Login</button>

</form>