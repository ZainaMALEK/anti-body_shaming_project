<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Inscription</title>
</head>
<body>
	<div align="center">

		<h1>Formulaire d'inscription</h1>
		<form method="POST" action="../php/inscription.php">
			<table>
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
	</div>

</body>
</html>