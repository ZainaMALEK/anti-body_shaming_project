<!DOCTYPE html>
<html>
<head>
	<title>Nouveau topic</title>
	<meta charset="utf-8">
</head>
<body>
<?php
	if ($_GET['id'] ==$_SESSION['id']) 
	{	?>

	<form method="POST" action="">
		<table>
			<tr class="header">
				<th>Nouveau topic</th>
				<th></th>
			</tr>
			<tr>
				<td>Categorie</td>
				<td><?=$categorie ?></td>
			</tr>
			<tr>
				<td>Sujet</td>
				<td><input type="text" name="topic_sujet" maxlength="100"></td>
			</tr>
		
			<tr>
				<td>Message</td>
				<td><textarea name="topic_contenu"></textarea></td>
			</tr>
			<tr>
				<td>Me notifier des réponses par mail</td>
				<td><input type="checkbox" name="topic_mail"></td>
			</tr>
			<tr>
				<td colspan="2"><input type="submit" name="topic_submit"></td>
			</tr>

			<?php if(isset($error)) 
			   { ?>

			<tr>
				<td colspan="2">
					<?= $topic_error ?>
				</td>
			
			</tr>
				<?php } ?>

		</table>
	</form>
<?php
}
else
{echo "Veuillez vous connecter pour pouvoir créer un topic";}
?>	

</body>
</html>