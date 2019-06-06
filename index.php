<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<div class="col-12">
		<div class="col-2 mx-auto">
			<form method="post" action="mail.php">
 				<div class="input-group flex-nowrap ">
  					<div class="input-group-prepend">
  					</div>
  						<input name = "regname" type="text" class="form-control" placeholder="Имя" aria-label="Имя" aria-describedby="addon-wrapping">
				</div>
				<div class="input-group flex-nowrap mt-3">
  					<div class="input-group-prepend">
  					</div>
  						<input name = "reglog" type="text" class="form-control" placeholder="Логин" aria-label="Логин" aria-describedby="addon-wrapping">
				</div>
				<div class="input-group flex-nowrap mt-3">
  					<div class="input-group-prepend">
  					</div>
  						<input name = "regmail" type="text" class="form-control" placeholder="Почта" aria-label="Почта" aria-describedby="addon-wrapping">
				</div>
							<div class="input-group flex-nowrap mt-3">
  								<div class="input-group-prepend">
  								</div>
  									<input name = "regpass" type="password" class="form-control " placeholder="Пароль" aria-label="Пароль" aria-describedby="addon-wrapping">
							</div>
										<button class="btn btn-primary mt-3">
											Зарегаться
										</button>
			</form>
		</div>
	</div>
</body>
</html>