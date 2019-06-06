<?php $con=mysqli_connect('127.0.0.1', 'root', '', 'mail');
	$query = mysqli_query($con, "INSERT INTO mail (name,login,mail,pass)
		VALUES ('".$_POST['regname']."','".$_POST['reglog']."','".$_POST['regmail']."','".$_POST['regpass']."')");
	$welcome = 'Вы успешно зарегистрировались на сайте!';
	$logpas = 'Ваш логин и пароль:';
mail($_POST['regmail'], $welcome, $logpas.$_POST['reglog'].' '.$_POST['regpass']); 
header("Location: http://mail/index.php");
	 ?>