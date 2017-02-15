<?php
if(session_status() !== PHP_SESSION_ACTIVE) {
	session_start();
}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<base href="<?php echo dirname($_SERVER["PHP_SELF"]) . "/"; ?>" />

		<title>angular2-example</title>
	</head>
	<body>
		<!-- This custom tag much match your Angular @Component selector name in app/app.component.ts -->
		<angular2-example>Loading&hellip;</angular2-example>
	</body>
</html>