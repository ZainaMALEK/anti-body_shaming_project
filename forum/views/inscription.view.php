<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	
	<title>Inscription</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://fonts.googleapis.com/css?family=Lora" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<link rel="stylesheet" type="text/css" href="../css/style.css">

</head>
<body class="container-fluid">
	
		<div class="row">

			<section class="col-lg-4 inscription">
				<div class="container connexion">
					<h1>Connexion</h1>
					<div class="container">

						<form method="POST" action="">

							<table class="table table-responsive">
								<tr>
									<td align="right">Pseudo</label></td>
									<td><input type="text" name="username"></td>
								</tr>
								<tr>
									<td align="right"><label>Mail</label></td>
									<td><input type="mail" name="mail"></td>
								</tr>
								<tr>
									<td align="right"><label>Mot de passe</label></td>
									<td><input type="password" name="mdp"></td>
								</tr>
								<tr>
									<td align="right"><label>Confirmez votre mot de passe</label></td>
									<td><input type="password" name="mdp2"></td>
								</tr>
							</table>
							
							<input type="submit" name="forminscription" value="je m'inscris">
						
						</form>
						<?php if (isset ($erreur))
							{
								echo $erreur;
							}?>
									
					</div>
				</div>	
		
			</section>
			<section class="col-lg-8" >
				<img class= "home_img" src="../css/img/melanie-wasser-233297-unsplash.jpg">
				
			</section>

		</div>
	
</body>

	<!--body class="container home_page">
	<div class="container ">
		<div class="row">

			<section class="col-lg-4 inscription">
				<div align="center">

		<h1>Formulaire d'inscription</h1>
		<div class="container">

			<form method="POST" action="">

				<table class="table table-responsive">
					<tr>
						<td align="right">Pseudo</label></td>
						<td><input type="text" name="username"></td>
					</tr>
					<tr>
						<td align="right"><label>Mail</label></td>
						<td><input type="mail" name="mail"></td>
					</tr>
					<tr>
						<td align="right"><label>Mot de passe</label></td>
						<td><input type="password" name="mdp"></td>
					</tr>
					<tr>
						<td align="right"><label>Confirmez votre mot de passe</label></td>
						<td><input type="password" name="mdp2"></td>
					</tr>
				</table>
				
				<input type="submit" name="forminscription" value="je m'inscris">
			
			</form>
			<?php if (isset ($erreur))
				{
					echo $erreur;
				}?>
		</div>
	</div>
			</section>


			

			<section class="col-lg-8 home_img img-fluid" >
				
			
			</section>

		</div>
	</div> 



	

</body>
</html>