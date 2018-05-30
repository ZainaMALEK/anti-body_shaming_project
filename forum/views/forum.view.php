
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	
	<title>Stop body shaming forum</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://fonts.googleapis.com/css?family=Lora" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<link rel="stylesheet" type="text/css" href="css/style.css">

	
</head>
<body class="container-fluid home_page">
	
		<div class="row">

			<nav class=" col-sm-1 nav flex-column home_nav">
                <?php 
                if (isset($_SESSION['id'])) {

                   echo "Bonjour ".$_SESSION['username'];

                    echo '<a href="'."pages/profil.php?user_id=".$_SESSION['id'].'"'.">Mon profil</a>";


                } ?>

              <a href="pages/inscription.php"><button type="button" class="btn-outline-warning">Inscription</button></a>
              <a href="pages/connexion.php"><button type="button" class="btn-outline-warning">Connexion</button></a>
			  
			</nav>

			<section class="col-sm-2 present_forum">
                <div class="container presentation">
				<h4>Stop Body Shaming forum</h4>
				<p>« Stop Body Shaming» est un forum autour du body shaming. Le body shaming est un phénomène qui a toujours existé mais qui a gagné en ampleur notamment avec l'explosion des réseaux sociaux.  Les réseaux sociaux, en offrant la liberté d'expression à tous, on permis une libéralisation de la parole « haineuse » et le body shaming représente une grande partie de cette haine.. </p>
                </div>
			</section>

			<section class="col-sm-9 container img-responsive home_img">
                <a class="nav-link" href="pages/allTopics.php"><button type="button" class="btn-outline-warning btn_home btn-lg">Accéder au forum</button></a>
                
			</section>

		</div>
	</div> 



<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>