<!DOCTYPE html>
<html>
<head>

<title>Connexion</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/css?family=Lora" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="../css/style.css">

</head>

	<body class="container-fluid">
		<div class="row">


				<header class=" col-lg-12 header_page">
					<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
					  <a class="navbar-brand" href="../index.php">Accueil</a>
					  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
					    <span class="navbar-toggler-icon"></span>
					  </button>
					  <div class="collapse navbar-collapse" id="navbarText">
					    <ul class="navbar-nav mr-auto">
					      <li class="nav-item">
					        <a class="nav-link" href="categories.php">Catégories</a>
					      </li>
					      <li class="nav-item">
					        <a class="nav-link" href="#">Citations Inspirantes</a>
					      </li>
					      <li class="nav-item">
					      	<?php if (isset($_SESSION['id'])) 
					      		{?>
					      		
					        <a class="nav-link" href="profil.php?id=".<?=$_SESSION['id'];?>.'"''>Mon Profil</a>
					      <?php  } 
					      else {?>
					      	<li class="nav-item active">
					      	<a class="nav-link" href="connexion.php">Connexion/Inscription</a>
					      	</li>
					      <?php } ?>
					      </li>
					    </ul>
					    <span class="navbar-text">
					      Stop Body Shaming Forum
					    </span>
					  </div>
					</nav>
				</header>
		</div>
		<div class="row">
		

			<section class="col-lg-4 container connexion">
				
					<h1>Connexion</h1>
					

						<form method="POST" action="">
			                <table class="table-responsive" text-align="center">
			                    <tr>
			                        <td><label>Mail</label></td>
			                        <td><input type="mail" name="mailconnect" placeholder="email"></td>
			                    </tr>
			                    <tr>
			                        <td><label>Mot de passe</label></td>
			                        <td><input type="password" name="mdpconnect" placeholder="mot de passe"></td>
			                    </tr>
			                </table>
			                    
			                       <input type="submit" name="formconnexion" value="Se connecter">
			                  
			                    
			                
			            </form>
			            <p>Vous n'avez pas un compte? Inscrivez-vous!</p>
			                   <button ><a href="inscription.php">Inscription</a></button>
						
					
					
		
			</section>
			<section class="col-lg-8 imgconnect"  >
				<img class= "home_img" src="../css/img/melanie-wasser-233297-unsplash.jpg">
				
			</section>

		</div>
	
</body>
</html>