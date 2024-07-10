<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
        <title>Bienvenido</title>
        <link href="https://fonts.googleapis.com/css?family=Arvo" rel="stylesheet"> 
        <link rel="stylesheet" type="text/css" href="css/my_style.css">
</head>
<body>
<?php
if(isset($_POST['textoCarta'])){
	if(isset($_SESSION['uname']))
	//$_SESSION['uname'] = $_POST['uname'];
	?>
	<h1><?php echo $_SESSION['uname'];?>, tu carta ha sido enviada!</h1>
	<div class= "carta">
		
	</div>
	<?php
	}else{
	if(isset($_SESSION['uname'])){
		echo "Has iniciado Sesion: ".$_SESSION['uname'];
	}else{
		echo "Acceso Restringido";
	}
}
?>
</body>

