<?php
	session_start();
	unset($_SESSION['uname']);
//	session_destroy();
?>

<html>
<head>
	<meta charset="UTF-8"/>
	<title>Cerrar sesión</title>
</head>
<body>
	<p>Has cerrado sesion</p>
<br /><a href="login.php">INICIO</a>
</body>
</html>