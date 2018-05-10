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
						<tr>
				<td><?=$topic['sujet']; ?></td>
				<td><?=$topic['contenu']; ?></td>
			
			</tr>
			<?php	?>
		</table>	
	
	

</body>
</html>