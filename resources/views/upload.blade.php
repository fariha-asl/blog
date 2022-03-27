<h1>Upload File page</h1>

<form action="upload" method="POST" enctype="multipart/from-data">
@csrf
<input type ="file" , name="file"><br> <br>
<button type="Submit">Upload file</button>


</form>