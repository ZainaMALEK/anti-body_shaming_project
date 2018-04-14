<!DOCTYPE html>
<html>
<head><!--Je dois faire le browse+edit+delete d'un topic pour terminer mes user stories-->
	<title>Topic selectionné</title>
</head>
<body>
	<h1>Topic selectionné</h1>
	
		<table>
		
			<tr>
				<td>Sujet</td>
				<td>Contenu</td>
			</tr>
			<?php $selected_topic=$topic ?>
			<tr>
				<td><?=$selected_topic['sujet']; ?></td>
				<td><?=$selected_topic['contenu']; ?></td>
			
			</tr>
			<?php	?>
		</table>	
	
	

</body>
</html>