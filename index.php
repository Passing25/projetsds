
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Document</title>
		<link href="https://fonts.googleapis.com/css?family=Frijole" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="style/bootstrap-5.2.3-dist/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="style/style.css">
	</head>
	<body>
		<section>
			<div class="container">
				<div class="row">
					<div class="col-md-9">
						<div class="form-wrapper">
							<div class="intro">
								<h1>Université Joseph Ki-ZERBO
                                    <br> UFR/SDS
                                </h1>
								<p>Veuillez remplir le formulaire!</p>
							</div>
							<form role="form"  method="post" action="enregister.php">
							  <div class="form-group name">
							    <label for="firstname">Nom:</label>
							    <input type="text" name="nom" class="form-control" id="firstName">

							    <label for="lastName">Prénom:</label>
							    <input type="text" name="prenom" class="form-control" id="lastName">
							  </div>
							  <!-- Gender -->
							  <div class="radio gender">
								  <label><input type="radio" value="Homme" name="genre">homme</label>
								
								  <label><input type="radio" value="femme" name="genre">Femme</label>
								</div> 

								<!--date of birth-->
								<div class="dob">
									<div class="form-group">
									    <label for="sel1">Date de Naissance:</label>
									    <input type="date" class="form-control" name="date_de_naissance">
									</div> <!-- form-group -->
								</div> <!-- dob -->
								
								<!-- phone and mail -->
								<div class="contacts">
									<div class="form-group">
									<!-- PHONE -->
									  <label for="email">Date d'entrée à l'Université:</label>
									  <input type="date" class="form-control" name="date_entree" id="email">
									<!-- PHONE -->
									  <label for="phone">Personne à prévenir en cas de besoin:</label>
									  <input type="text" class="form-control" name="numero_utile" id="phone">
									</div> 
								</div> <!-- contacts -->

							  <!-- bio -->
							  	<!-- <div class="bio">
							  		<div class="form-group">
								 		<label for="bio">Information supplementaire:</label>
								  		<textarea class="form-control" name="bio" rows="5" id="bio"></textarea>
									</div>
								</div> bio -->

								<!--ERROR-->

								<div class="error" id="error"></div>

								<!--Button-->
								<div>
									<input type="submit" value="Enregistrer">
								</div>
								<a href="listing.php">Liste</a>
							</form>
							<!--Ending the FORM-->
                            
							<!--Starting the output-->
							<div id="imageOutput" class="image-output">
								
							</div> <!-- image-output -->
							<div id="output" class="output">
							</div>
						</div> <!-- formwrapper -->
					</div> <!-- col-12 -->
					
						<div class="col-md-3"> <img src="image/logosds.png" width="200" alt="logo université" ></div>
				
				</div> <!-- row -->
			</div> <!-- container -->
		</section>

		<!--Footer SECTION-->
<!-- 		<footer id="footer">
			<p>Powered by <a href="http://www.ahmedsoliman.net">A.Soliman</a></p>
		</footer> -->
		
		<!-- ******Jquery GOOGLE CDN***** -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
		<script src="script/script.js"></script>
        <?php
        include('footer.php');
        ?>
        </body>     
</html>
