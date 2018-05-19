<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<title>Topic selectionné</title>
</head>
<body>
	<h1>Topic selectionné</h1>
	
		<table>
		
			<tr>
				<td>Sujet</td>
				<td>Contenu</td>
			</tr>
						<tr>
				<td><?=$topic['sujet']; ?></td>
				<td><?=$topic['contenu']; ?></td>
			
			</tr>
			<?php	?>
		</table>	

	<h1>Répondre à ce topic</h1>	
	<form method="POST" action="">
		<textarea placeholder="Votre réponse" name="topic_answer"></textarea>
		<input type="submit" name="topic_answer_submit" value="Envoyer ma réponse">
	</form>

	<?php //Est ce correcte de faire la vérification de $msg ici dans la vue?
	if (isset($answer_msg))
	{
		echo $answer_msg;
	}
	?>
	<p>Les réponses<p>

		<?php 
			

		foreach ($answers as $answer) { ?>
			<table class="forum">
				<tr>
					<td><?=$user_info['username']?> a répondu : </td>
					<td><?=$answer['answer']?></td>

				</tr>
			</table>
		<?php } ?>
	

</body>
</html>