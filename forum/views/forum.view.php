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

			<nav class=" col-lg-2 nav flex-column home_nav">
              <a href="pages/inscription.php"><button type="button" class="btn-outline-warning">Inscription</button></a>
              <a href="pages/connexion.php"><button type="button" class="btn-outline-warning">Connexion</button></a>
			  
			  <a class="nav-link" href="pages/topics_list.php">Les derniers topics</a>
			  <a class="nav-link" href="pages/categories.php">Les catégories</a>
			</nav>

			<section class="col-lg-2 present_forum">
				<h4>Pourquoi ce forum?</h4>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>
                <a class="nav-link" href="pages/categories.php"><button type="button" class="btn-outline-warning btn_home">Accéder au forum</button></a>
			</section>

			<section class="col-lg-8 img-fluid" >
                <img class= "home_img" src="css/img/melanie-wasser-233297-unsplash.jpg">
                
			</section>

		</div>
	</div> 




<!--div class="modal fade home_modal" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                

                
                 <h4 class="modal-title gold-text" id="myModalLabel">Inscription/Connexion</h4>

            </div>
            <div class="modal-body">
                <div role="tabpanel">
                    <!-- Nav tabs --
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#uploadTab" class="navmodaltab" aria-controls="uploadTab" role="tab" data-toggle="tab">Inscription</a>
                        </li>
                        <li role="presentation"><a href="#browseTab" aria-controls="browseTab" role="tab" data-toggle="tab">Connexion</a>
                        </li>
                    </ul>
                    <!-- Tab panes --



                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="uploadTab">
                            <form method="POST" action="">
                                <table>
                                    <tr>
                                        <td align="right"><label>Pseudo</label></td>
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
                                
                                <button type="submit" name="forminscription" value="je m'inscris" >Inscription</button>

                            </form>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="browseTab">
                            <form method="POST" action="">
                                <table>
                                    <tr>
                                        <td><label>Mail</label></td>
                                        <td><input type="mail" name="mailconnect" placeholder="email"></td>
                                    </tr>
                                    <tr>
                                        <td><label>Mot de passe</label></td>
                                        <td><input type="password" name="mdpconnect" placeholder="mot de passe"></td>
                                    </tr>
                                    <tr>
                                    
                                        <td><input type="submit" name="formconnexion" value="Se connecter"></td>
                                    </tr>
                                </table>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
                
            </div>
        </div>
    </div>
</div>





<script>
    function addImage(pk) {
    alert("addImage: " + pk);
}

$('#myModal .save').click(function (e) {
    e.preventDefault();
    addImage(5);
    $('#myModal').modal('hide');
    //$(this).tab('show')
    return false;
})
</script-->

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>