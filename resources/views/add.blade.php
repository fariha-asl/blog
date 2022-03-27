<h1>Add Member page for Flash session</h1>

@if(session('user'))
<h3 style ="color: green"> {{session('user')}} user has been added </h3>
@endif

<form action="addmember" method="POST">
@csrf
<input type="text", name="user", Placeholder="Enter username "><br> <br>
<input type="password", name="Password", Placeholder="Enter password"><br> <br>
<input type="text", name="Email", Placeholder="Enter Email"><br> <br>

<button>Add Member </button>


</form>