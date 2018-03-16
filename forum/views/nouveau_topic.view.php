<!DOCTYPE html>
<html>
<head>
	<title>Nouveau topic</title>
	<meta charset="utf-8">
</head>
<body>
	<form method="POST" action="nouveau_topic.php">
		<table>
			<tr class="header">
				<th>Nouveau topic</th>
				<th></th>
			</tr>
			<tr>
				<td>Sujet</td>
				<td><input type="text" name="topic_sujet" maxlength="10  0"></td>
			</tr>
			<tr>
				<td>Catégorie</td>
				<td>
					<select name="categorie_selected"><?php while ($categories = $categorie->fetch()) 
					{?>
						<option><?=$categories['name']?></option>
			  <?php } ?>
					</select>
					
				</td>
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

</body>
</html>