<head>
	<meta charset="utf-8">
	<link href="login.css" rel="stylesheet">
	<script src="login_front.js" type="text/JavaScript"></script>
</head>
<body>
<div id="login_div">
	<form id="login" name="login" method="post" class="form-login">
		<h1>WELCOME!</h1>
		<p>Please log in using your UCID and password.</p>
		<div class="dialog">
		<table>
			<tbody>
				<tr class="prop">
					<td class="name"><label for="login:username">UCID:</label></td>
					<td class="value"><input id="login:username" type="text" name="login:username" class="form-login" size="30" placeholder="Username" required autofocus></td>
				</tr>
				<tr class="prop">
					<td class="name"><label for="login:password">Password:</label></td>
					<td class="value"><input id="login:password" type="password" name="login:password" class="form-login" size="30" placeholder="Password"></td>
				</tr>
				<tr>
				<td></td>
				<td><div class="button" style="margin: 1em 1em">
					<input class="form-control" type="button" onclick="ajaxLoginFunction();" value="Login">
				</div></td>
				</tr>
			</tbody>
		</table>
		</div>
	</form>
</div>
<script type="text/javascript">
	var MID_PATH="https://afsacess4.njit.edu/~va237/CS490Alpha/postrequest.php";
</script>

<div id="ajaxDiv"></div>