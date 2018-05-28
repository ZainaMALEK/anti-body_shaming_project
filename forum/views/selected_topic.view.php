<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://fonts.googleapis.com/css?family=Lora" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<title>Topic selectionné</title>
</head>
<body>
	<h1>Topic selectionné</h1>

    	<div class="container">

			<table>
			
				<thead>
				<tr>
					<th>Sujet: <?=$topic['sujet']; ?></th>
					
				
				</tr>
				</thead>
				
				<tr>
					<td><?=$topic['contenu']; ?></td>
				</tr>
				
			</table>	

		<h5>Répondre à ce topic</h1>	
		<form method="POST" action="" >
			<textarea placeholder="Votre réponse" name="topic_answer"></textarea>
			<input type="submit" name="topic_answer_submit" value="Envoyer ma réponse">
		</form>

		<?php //Est ce correcte de faire la vérification de $msg ici dans la vue?
		if (isset($answer_msg))
		{
			echo $answer_msg;
		}
		?>
		

			<div class="container answer">
			<?php 
				
			foreach ($answers as $answer) { ?>

				<table class="table table-responsive ">

					<tr><?php 
						$user_id= $answer['author_id'];
						$user_info = User::userInfo($user_id);?>
						<td><?=$user_info['username']?> a répondu : <?=$answer['answer']?></td>
					</tr>
					
				</table>
			<?php } ?>
		
			</div>
		</div>
</body>
</html>