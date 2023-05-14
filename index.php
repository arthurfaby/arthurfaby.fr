<?php 

	$firstname = $name = $email = $phone = $message = "";
	$firstnameError = $nameError = $emailError = $phoneError = $messageError = "";

	$isSuccess = false;

	$emailTo = "arthurfaby1@gmail.com";
	


	if($_SERVER["REQUEST_METHOD"] == "POST"){


		$firstname = verifyInput($_POST["firstname"]);
		$name = verifyInput($_POST["name"]);
		$email = verifyInput($_POST["email"]);
		$phone = verifyInput($_POST["phone"]);
		$message = verifyInput($_POST["message"]);
		$isSuccess = true;
		$emailText = "";

		if(empty($firstname)){
			$firstnameError = "J'ai besoin de votre prénom pour vous recontacter :)";
			$isSuccess = false;
		}
		else{
			$emailText .= "Prénom : $firstname \n";
		}

		if(empty($name)){
			$nameError = "J'ai besoin de votre nom pour vous recontacter :)";
			$isSuccess = false;
		}
		else{
			$emailText .= "Nom : $name \n";
		}

		if(!isEmail($email)){
			$emailError = "C'est pas vraiment un email...";
			$isSuccess = false;
		}
		else{
			$emailText .= "Mail : $email\n";
		}
		if(!isPhone($phone)){
			$phoneError = "J'ai seulement besoin de chiffres";
			$isSuccess = false;
		}
		else{
			$emailText .= "Téléphone : $phone\n\n";
		}
		if(empty($message)){
			$messageError = "Il y a bien une raison pour me contacter non ?";
			$isSuccess = false;
		}
		else{
			$emailText .= "Message : $message";
		}

		if($isSuccess){

			$headers = "From: $firstname $name <$email> \r\nReply-To: $email";
			mail($emailTo, "Message du site !", $emailText, $headers);
			$firstname = $name = $email = $phone = $message = "";

		}

		

		
	}


	function isPhone($var){
		
		return preg_match("/^[0-9 ]*$/", $var); 

	}

	function isEmail($var){

		return filter_var($var, FILTER_VALIDATE_EMAIL);

	}



	function verifyInput($var){
		$var = trim($var);
		$var = stripslashes($var);
		$var = htmlspecialchars($var);

		return $var;
	}

?>



<!DOCTYPE html>
<meta charset="UTF-8">

<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1"> 
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link href="css/main.css" rel="stylesheet">
		
		<link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
		<title>
			Arthur Faby - Étudiant développeur
		</title>
		 <link rel="icon" type="image/x-icon" href="./src/favicon.png">

	</head>
	<body data-spy="scroll" data-target="#mynavbar" data-offset="60px">
		<nav class="navbarperso" id="mynavbar">
			<div class="burger">
				<div class="line1"></div>
				<div class="line2"></div>
				<div class="line3"></div>
			</div>
			<ul class="navlinks">

			<li>
					<a href="#about-me" id="about-me-a" class="unactivea">Présentation</a>
				</li>
				<li>
					<a href="#education" id="education-a" class="unactivea">Formation</a>
				</li>
				<li>
					<a href="#skills" id="skills-a" class="unactivea">Compétences</a>
				</li>
				<li>
					<a href="#exp" id="exp-a" class="unactivea">Expérience</a>
				</li>
				<li>
					<a href="#projects" id="projects-a" class="unactivea">Projets</a>
				</li>
				<li>
					<a href="#activities" id="activities-a" class="unactivea">Activités</a>
				</li>
				<li>
					<a href="#contact-me" id="contact-me-a" class="unactivea">Contact</a>
				</li>
				<li>
					<a></a>
				</li>
			</ul>
			
		</nav>

		<section id="about-me" class="container-fluid">
			<div class="col-xs-8 col-md-4 profile-picture">
				<img src="src/pdp.png" alt="Photo d'Arthur Faby" style="border-radius: 50%;">

			</div>
			<div class="heading">
				<h1>
					Arthur Faby<br> 20 ans
				</h1>
				<h3>
					Développeur en devenir
				</h3>
				<!-- src : src/CV Arthur FABY.pdf -->
				<a href="src/CV.pdf" class="downloadbutton">
					Voir mon CV
				</a>
				
			</div>
			<div class="godown"><a href=#skills><span class="glyphicon glyphicon-chevron-down"></span></a>
			</div>
		</section>
		<section id="education">
			<div class="container">
				<div class="black-divider"></div>
				<div class="heading">
					<h2>Formation</h2>
				</div>
				<div class="row">
					<div class="col-sm-6">
						<div class="education-block">
							<h5>2022 - 202?</h5>
							<span class="glyphicon glyphicon-education"></span>
							<h3>42 Angoulême</h3>
							<h5>Ecole de développement informatique</h5>
							<h4>Tronc en commun en cours</h4>
							<div class="black-divider"></div>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="education-block">
							<h5>2020 - 2022</h5>
							<span class="glyphicon glyphicon-education"></span>
							<h3>EFREI Paris</h3>
							<h5>Ecole d'ingénieur en numérique</h5>
							<h4>Prépa intégrée</h4>
							<div class="black-divider"></div>
						</div>
					</div>
				</div>
				<br><br>
				<div class="row">
					<div class="col-sm-12">
						<div class="education-block">
							<h5>2017 - 2020</h5>
							<span class="glyphicon glyphicon-education"></span>
							<h3>Lycée Saint-Louis</h3>
							<h5>Réseau La Salle</h5>
							<h4>Cursus scientifique option mathématiques</h4>
							<h4>Baccalauréat S - Mention Bien</h4>
							<div class="black-divider"></div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section id="skills">
			<div class="white-divider"></div>
			<div class="heading">
				<h2>Compétences</h2>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div class="progress">
							<div class="progress-bar first-skill unvisible" id="skill1" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
								<h5>C++ 75%</h5>
							</div>
							
						</div>
						<div class="progress">
							<div class="progress-bar second-skill unvisible" id="skill2" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">
								<h5>Relation client 80%</h5>
							</div>
							
						</div>
						<div class="progress">
							<div class="progress-bar third-skill unvisible" id="skill3" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">
								<h5>Organisation 80%</h5>
							</div>
							
						</div>
						

					</div>
					<div class="separate-skills"></div>
					<div class="col-md-6">
						<div class="progress">
							<div class="progress-bar fourth-skill unvisible" id="skill4" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
								<h5>C 90%</h5>
							</div>
						</div>
						<div class="progress">
							<div class="progress-bar fifth-skill unvisible" id="skill5" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
								<h5>Suite Office 90%</h5>
							</div>
							
						</div>
						<div class="progress">
							<div class="progress-bar sixth-skill unvisible" id="skill6" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
								<h5>Bonne humeur 100%</h5>
							</div>
							
						</div>
					</div>
				</div>
			</div>

		</section>
		
		<section id="exp">
			<div class="container">
				<div class="black-divider"></div>
				<div class="heading">
					<h2>Expérience Professionnelle</h2>
				</div>
				<ul class="timeline">
					<li>
						<div class="timeline-badge">
							<span class="glyphicon glyphicon-briefcase"></span>
						</div>
						<div class="timeline-panel-container-inverted">
							<div class="timeline-panel">
								<div class="timeline-heading">
									<h3>SPORT 2000</h3>
									<h4>Stage commercial - 1 mois</h4>
									<p class="text-mute"><small class="glyphicon glyphicon-time"> 2022</small></p>
								</div>
								<div class="timeline-body">
									<p>Vendeur aux rayons chaussures / sports co / running / randonnée / musculation</p>
									<p>Gestion de stock</p>
								</div> 
							</div>
						</div>
					</li>
					<li>
						<div class="timeline-badge">
							<span class="glyphicon glyphicon-briefcase"></span>
						</div>
						<div class="timeline-panel-container">
							<div class="timeline-panel">
								<div class="timeline-heading">
									<h3>CAMPING LA BORDERIE</h3>
									<h4>5 saisons estivales de 5 semaines</h4>
									<p class="text-mute"><small class="glyphicon glyphicon-time"> De 2017 à 2021</small></p>
								</div>
								<div class="timeline-body">
									<p>Gestion de stock / Organisation de services</p>
									<p>Barman / Pizzaïolo / Serveur</p>
								</div>
							</div>
						</div>
					</li>
					<li>
						<div class="timeline-badge">
							<span class="glyphicon glyphicon-briefcase"></span>
						</div>
						<div class="timeline-panel-container-inverted">
							<div class="timeline-panel">
								<div class="timeline-heading">
									<h3>BERNEZAC COMMUNICATION</h3>
									<h4>Stage d'observation - 1 semaine</h4>
									<p class="text-mute"><small class="glyphicon glyphicon-time"> 2016</small></p>
								</div>
								<div class="timeline-body">
									<p>Mise à niveau du site alea.com</p>
									<p>Développement de divers sites indépendants</p>
								</div> 
							</div>
						</div>
					</li>
					


				</ul>
			</div>
		</section>
		<section id="projects">
			<div class="container">
				<div class="white-divider"></div>
				<div class="heading">
					<h2>PROJETS</h2>
				</div>
				<div class="row">
					<div class="col-xl-4">
						<div class="card pythonmusic">
							<h1>Application musicale</h1>
							<img src="src/pythonicon.png">
							<p>
								Création d'une application python en binôme qui permet de créer de nouvelles musiques grâce à des musiques déjà existantes.
							</p>
						</div>
					</div>
					<div class="col-xl-4">
						<div class="card siteinternet">
							<h1>Site internet</h1>
							<img src="src/front-end.jpg">
							<p>
								Création de mon site arthurfaby.fr, en utilisant HTML5, CSS3, JS5 et Bootstrap.
							</p>
						</div>
					</div>
					<div class="col-xl-4">
						<div class="card cub3d">
							<h1>Jeux vidéo - FPS</h1>
							<a href="https://github.com/arthurfaby/cub3d" target="_blank">
								<img src="src/cub3d.png">
							</a>	
							<p>
								Réalisation d'un jeu 3D vue première personne style Wolfenstein3D en duo dans le cadre de mon école 42.
							</p>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section id="activities">
			<div class="container">
				<div class="black-divider"></div>
				<div class="heading">
					<h2>ACTIVITÉS</h2>
				</div>
				<div id="mycarousel" class="carousel slide" data-ride="carousel">
				<ul class="carousel-indicators">
						<li data-target="#mycarousel" data-slide-to="0" class="active"></li>
						<li data-target="#mycarousel" data-slide-to="1"></li>
						<li data-target="#mycarousel" data-slide-to="2"></li>
					</ul>
					<div class="carousel-inner">
					  <div class="carousel-item active">
						<img class="d-block w-100 img-fluid" src="src/Retro_Piano_530320_1920x1080.jpg" alt="First slide">
						<div class="carousel-caption">
							<h5>
								Piano
							</h5>
							<p>
								depuis 12 ans
							</p>

						</div>
					  </div>
					  <div class="carousel-item">
						<img class="d-block w-100 img-fluid" src="src/tennis.jpg" alt="Second slide">
						<div class="carousel-caption">
							<h5>
								Tennis
							</h5>
							<p>
								pendant 7 ans
							</p>

						</div>
					  </div>
					  <div class="carousel-item">
						<img class="d-block w-100 img-fluid" src="src/1802593.jpg" alt="Third slide">
						<div class="carousel-caption">
							<h5>
								Volley-Ball
							</h5>
							<p>
								pendant 6 ans
							</p>

						</div>
					  </div>
					</div>
					<a class="carousel-control-prev" href="#mycarousel" role="button" data-slide="prev">
					  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
					  <span class="sr-only">Previous</span>
					</a>
					<a class="carousel-control-next" href="#mycarousel" role="button" data-slide="next">
					  <span class="carousel-control-next-icon" aria-hidden="true"></span>
					  <span class="sr-only">Next</span>
					</a>
				  </div>
			</div>
		</section>
		<section id="contact-me">
			<div class="container">
				<div class="white-divider"></div>
				<div class="heading">
					<h2>Contact</h2>
				</div>
				<div class="row">
					<div class="col-lg-10 col-lg-offset-1">
						<form id="contact-form" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) . "#contact-me"; ?>" role="form">
							<div class="row" style="display: <?php if($isSuccess){echo 'none';} else{echo 'block';} ?>;">
	
	
								<div class="col-md-6">
									<label for="firstname">Prénom <span class="blue">*</span></label>
									<input type="text" id="firstname" name="firstname" class="form-control" placeholder="Votre prénom" value="<?php echo $firstname; ?>">
									<p class="comments"><?php echo $firstnameError; ?></p>
								</div>
	
	
								<div class="col-md-6">
									<label for="name">Nom <span class="blue">*</span></label>
									<input type="text" id="name" name="name" class="form-control" placeholder="Votre nom" value="<?php echo $name; ?>">
									<p class="comments"><?php echo $nameError; ?></p>
								</div>
	
	
								<div class="col-md-6">
									<label for="text">Email <span class="blue">*</span></label>
									<input type="text" id="email" name="email" class="form-control" placeholder="Votre email" value="<?php echo $email; ?>">
									<p class="comments"><?php echo $emailError; ?></p>
								</div>
	
	
								<div class="col-md-6">
									<label for="phone">Téléphone</label>
									<input type="text" id="phone" name="phone" class="form-control" placeholder="Votre numéro de téléphone" value="<?php echo $phone; ?>">
									<p class="comments"><?php echo $phoneError; ?></p>
								</div>
	
	
								<div class="col-md-12">
									<label for="message">Message <span class="blue">*</span></label>
									<textarea id="message" name="message" class="form-control" placeholder="Votre message" rows="4"><?php echo $message; ?></textarea>
									<p class="comments"><?php echo $messageError; ?></p>
								</div>
	
	
								<div class="col-md-12">
									<p class="blue">* Ces informations sont requises</p>
								</div>
	
	
								<div class="col-md-12">
									<input type="submit" class="contact-submit" value="Envoyer">
								</div>
	
	
							</div>
	
							<p class="ty" style="display: <?php if($isSuccess){echo 'block';} else{echo 'none';}?>;">Message envoyé avec succès ! Merci de m'avoir contacté !<?php echo "<br><a href='https://www.arthurfaby.fr/#contact-me' class='contact-submit'>Afficher le formulaire</a>"; ?></p>
						</form>
						
					</div>
				</div>
			</div>
		</section>	  
		<footer class="text-center">
			<a href=#about-me><span class="glyphicon glyphicon-chevron-up"></span></a>
			<h5>© 2020 - 2023 | Arthur Faby</h5>
			<h5>Créé de A à Z en utilisant Bootstrap</h5>
		</footer>

		</div>
		<script src="js/script.js"></script>
	</body>
</html>