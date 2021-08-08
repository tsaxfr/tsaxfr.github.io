<!DOCTYPE HTML>
<!--
	Landed by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>T-Sax - DJ</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="stylesheet" href="assets/css/carrousel.css">
		<link rel="stylesheet" href="/maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css"  media="all">  
		<link rel="stylesheet" href="assets/css/font-awesome.min.css">
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<link rel="icon" type="image/x-icon" href="/favicon2.ico" />
		<!--[if IE]><link rel="shortcut icon" type="image/x-icon" href="/favicon2.ico" /><![endif]-->
	</head>

	<?php
		ob_start();
		require("fonctions.php");
	?>
	<?php
		function URLCouranteSansParametres()
		{
			$urlCourante=$_SERVER["REQUEST_URI"];
			$urlGet = explode("?",$urlCourante);
			return  $urlGet[0];
		}
	?>

	<body class="landing">
		<div id="page-wrapper">

			<!-- Header -->
				<header id="header">
					<h1 id="logo">T-Sax</h1>
					<nav id="nav">
						<ul>
							<li><a href="#two" class="scrolly">Matériel</a></li>
							<li><a href="#four" class="scrolly">Prestations</a></li>
							<li><a href="#six" class="scrolly">Productions</a></li>
							<li><a href="#eight" class="scrolly">F.A.Q</a></li>
							<li><a href="#nine" class="scrolly">Album</a></li>
							<li><a href="#ten" class="scrolly">Contact</a></li>
							<li><a href="#eleven" class="scrolly">Avis</a></li>
						</ul>
					</nav>
				</header>

			<!-- Banner -->
				<section id="banner">
					<div class="content">
						<header>
							<h2>T-Sax</h2>
							<p>DJ - Producteur - Sax Player</p>
						</header>
						<span class="image"><img src="assets/images/medaillon.png" alt="" /></span>
					</div>
					<a href="#one" class="goto-next scrolly">Next</a>
				</section>

			<!-- One -->
				<section id="one" class="spotlight style1 bottom">
					<span class="image fit main"><img src="assets/images/expo12.jpg" alt="" /></span>
					<div class="content">
						<div class="container">
							<div class="row">
								<div class="4u 12u$(medium)">
									<header>
										<h2>T-Sax</h2>
										<p>DJ saxophoniste et producteur</p>
									</header>
								</div>
								<div class="4u 12u$(medium)">
									<p>Etant saxophoniste depuis une dizaine d'années, la musique était quelque chose de familier pour moi. Assez passionné par l'électro, j'ai voulu m'engager dans cette voie par l'intermédiaire du djing et de la musique assistée par ordinateur (M.A.O). </p>
								</div>
								<div class="4u$ 12u$(medium)">
									<p>J'ai donc à ce jour, tout l'équipement pour pratiquer le djing chez soi et à l'extérieur. Bien que la musique électronique soit ma voie de prédilection, je suis bien sûr ouvert à toutes les autres musiques.</p>
								</div>
							</div>
						</div>
					</div>
					<a href="#two" class="goto-next scrolly">Next</a>
				</section>

			<!-- Two -->
				<section id="two" class="spotlight style2 right">
					<span class="image fit main"><img src="assets/images/platine4.JPG" alt="" /></span>
					<div class="content">
						<header>
							<h2>Mon matériel</h2>
							<p>Une sono de 1200W RMS, des jeux de lumières complets et un style de musique très large : votre évènement a tout pour être parfait !</p>
						</header>
						<p>Pas de panique ! Vous pourrez choisir la totalité ou uniquement certains items en fonction de vos envies et de vos besoins.</p>
<!-- 						<ul class="actions">
							<li><a href="#" class="button">Consulter</a></li>
						</ul> -->
					</div>
					<a href="#three" class="goto-next scrolly">Next</a>
				</section>

				<section id="three" class="wrapper style2 special fade-up">
					<div class="container">
						<header class="major">
							<h2>Sonorisation & éclairage</h2>
							<p>Mon matériel en quelques mots...</p>
						</header>
						<div class="box alt">
							<div class="row uniform">
								<section class="4u 6u(medium) 12u$(xsmall)">
									<img src="assets/images/sound-systeme.jpg" alt="" width="50%;" class="image icone"/>
									<h3>Systême son de 1200W</h3>
									<br />
									<ul style="list-style:none">
										<li>2 enceintes de 300W RMS chacunes</li>  
										<li>1 caisson de grave de 600W RMS</li>
									</ul>
								</section>

								<section class="4u 6u$(medium) 12u$(xsmall)">
									<img src="assets/images/expo5 - m.jpg" alt="" width="50%;" class="image icone"/>
									<h3>Grande variété d'éclairage</h3>
									<br/>
									<ul style="list-style:none">
										<li>Laser, scanner, projecteur, stroboscope, machine à fumée...</li>  
									</ul>
								</section>

								<section class="4u 6u$(medium) 12u$(xsmall)">
									<img src="assets/images/platine1 - m.JPG" alt="" width="50%;" class="image icone"/>
									<h3>Mix profesionnel</h3>
									<br/>
									<ul style="list-style:none">
										<li>Le deuxième meilleur controleur au monde : le DDJ SX2 de chez Pioneer</li>  
									</ul>
								</section>
							</div>
						</div>
<!-- 						
						<footer class="major">
							<ul class="actions">
								<li><a href="#" class="button">Magna sed feugiat</a></li>
							</ul>
						</footer>
						 -->
					</div>
					<br />
					<a href="#four" class="goto-next2 scrolly">Next</a>
				</section>
			<!-- Three -->
				<section id="four" class="spotlight style3 left">
					<span class="image fit main bottom"><img src="assets/images/expo14.jpg" alt="" /></span>
					<div class="content">
						<header>
							<h2>Mes prestations</h2>
							<p>Vous souhaitez organiser un anniversaire ? Ou encore chercher un DJ pour votre mariage ? Mais encore vous chercher un prestataire pour une installation de grande envergure ?</p>
						</header>
						<p>Je m'adapte en fonction de vos besoins afin de vous fournir le matériel nécessaire et/ou de vous mettre en relation avec des professionnels pouvant répondre à vos besoins le plus rapidement possible.</p>
<!-- 						<ul class="actions">
							<li><a href="#" class="button">Learn More</a></li>
						</ul> -->
					</div>
					<a href="#five" class="goto-next scrolly">Next</a>
				</section>

				<section id="five" class="wrapper style2 special fade-up">
					<div class="container">
						<header class="major">
							<h2>Prestations</h2>
							<p>Mariages, anniversaires, soirées entre amis ? Chacun trouve son compte !</p>
						</header>
						<div class="box alt">
							<div class="row uniform">

								<section class="4u 6u(medium) 12u$(xsmall)">
									<img src="assets/images/expo10 - m.jpg" alt="" width="50%;" class="image icone"/>
									<h3>Petit évènement</h3>
									<p>Parfait pour une trentaine de personnes chez vous ou dans des petites salles de fête. Une sonorisation et un éclairage simples et efficaces en fonction de vos besoins.</p>
								</section>

								<section class="4u 6u$(medium) 12u$(xsmall)">
									<img src="assets/images/expo14 - m.jpg" alt="" width="50%;" class="image icone"/>
									<h3>Moyen et grand évènement</h3>
									<p>Idéal pour les grandes salles et les évènements importants comme les anniversaire et les mariages</p>
								</section>


								<section class="4u 6u$(medium) 12u$(xsmall)">
									<img src="assets/images/expo15 - m.jpg" alt="" width="50%;" class="image icone"/>
									<h3>Evènement exceptionnel</h3>
									<p>Je travaille avec de nombreux professionnels qui sont dans la capacité de sonoriser plus de 1 000 personnes. N'hésitez pas à m'en parler afin que je vous fasse un devis spécialisé !</p>
								</section>
							</div>
						</div>
<!-- 						
						<footer class="major">
							<ul class="actions">
								<li><a href="#" class="button">Magna sed feugiat</a></li>
							</ul>
						</footer>
						 -->
					</div>
					<a href="#six" class="goto-next2 scrolly">Next</a>
				</section>

				<section id="six" class="spotlight style2 right">
					<span class="image fit main"><img src="assets/images/mix.png" alt="" /></span>
					<div class="content">
						<header>
							<h2>Mes productions</h2>
							<p>Mon studio est mon lieu de vie. Je passe beaucoup de temps à y mixer, à y écouter, créer de la musique ou encore à y jouer du saxophone</p>
						</header>
						<p>Cela fait plus de 10 ans que je fais du saxophone et j'adore prendre du temps à essayer de retrouver les mélodies de morceaux actuels. J'en profite donc pour les insérer dans mes mixs. Cela me permet d'allier ce que j'adore : le mix et le saxophone</p>
						<a href="https://www.youtube.com/channel/UC1UuMv1NleP-zoDtOlYUR6Q" style="border:none; margin-right:2%"><img src="assets/images/youtube.png" width="25%" alt=""/></a>
						<a href="https://www.dailymotion.com/t_bow_arrow/" style="border:none;" ><img src="assets/images/dailymotion.png" style="border-radius:20%; margin-right:2%;" width="25%" alt=""/></a>
						<a href="https://soundcloud.com/t-bow-arrow" style="border:none" ><img src="assets/images/soundcloud.jpg" style="border-radius:20%;" width="25%" alt=""/></a>
					</div>
					<a href="#seven" class="goto-next scrolly">Next</a>
				</section>

				<section id="seven" class="wrapper style2 special fade-up">
					<div class="container">
						<header class="major">
							<h2>Mes productions</h2>
							<p>Quelques productions en quelques secondes... Pensez à activer Adblock ;-)</p>
						</header>
						<div class="box alt">
							<div class="row uniform">
								<section class="4u 6u(medium) 12u$(xsmall)">

									<iframe width="100%" height="250px" src="https://www.youtube.com/embed/Yl2iOI6NDA0" frameborder="0" allowfullscreen=""></iframe>
									<h3>Production</h3>
									<p>Je produis de la musique à l'aide de logiciels de M.A.O. Je suis spécialisé en Chill House et particulièrement en Tropical House mais je compose dans d'autres styles comme l'EDM.</p>
								</section>

								<section class="4u 6u$(medium) 12u$(xsmall)">
									<iframe width="100%" height="250px" src="//www.dailymotion.com/embed/video/x4cv012" frameborder="0" allowfullscreen=""></iframe>
									<h3>Mix aux platines</h3>
									<p>Je passe beaucoup de temps en studio à trouver quelles musiques peuvent aller ensemble pour un bon enchainement.</p>
								</section>

								<section class="4u 6u$(medium) 12u$(xsmall)">
									<iframe width="100%" height="250px" src="https://www.youtube.com/embed/KJHAU3FFEOY" frameborder="0" allowfullscreen=""></iframe>
									<h3>Improvisation au sax</h3>
									<p>Rien de plus agréable de pouvoir remplacer un passage de son morceau favoris en le jouant soi-même et en y apportant sa touche personnel.</p>
								</section>
							</div>

							<br />

							<!-- <h3 >Et bien d'autres : <a href="http://www.youtube.com/T-Sax/">www.youtube.com/T-Sax/ !</a></h3> -->

						</div>
<!-- 						
						<footer class="major">
							<ul class="actions">
								<li><a href="#" class="button">Magna sed feugiat</a></li>
							</ul>
						</footer>
						 -->
					</div>
					<a href="#eight" class="goto-next2 scrolly">Next</a>
				</section>
				<section id="eight" class="wrapper style2 special fade-up" style="background: #001c38;">
					<div class="container">
						<header class="major">
							<h2>F.A.Q</h2>
							<p>Vous avez des questions sur l'organisation, les tarifs, la réservation ?</p>
						</header>
						<div class="box alt">
							<div class="row uniform">
								<section class="4u 6u(medium) 12u$(xsmall)">

									<br />

									<input type="button" name="fname" class="faq2" value="+" id="question1">
									<h4 class="faq"><em>« Combien coutera ma soirée ? »</em></h4>						
									<p class="disparition_1">Ceci est difficile à dire, tout dépend du type de soirée, du nombre de personnes, des options choisies, de la date, de la distance…</p>

									<br />

									<input type="button" name="fname" value="+" id="question2">
									<h4 class="faq"><em>« Que comprend le tarif ? »</em></h4>
									<p class="disparition_2">Le tarif comprend le rendez vous préalable, l’accompagnement jusqu’à la date de l’évènement, les frais de déplacements, le matériel convenu lors du contrat (son et lumière), son montage et son démontage.</p>

									<br />

									<input type="button" name="fname" value="+" id="question3">
									<h4 class="faq"><em>« Y a t'il un rendez vous au préalable ? »</em></h4>
									<p class="disparition_3">Au moins un rendez vous est inclus dans chaque formule, afin de satisfaire au mieux vos attentes et de signer le contrat. Celui ci peut se passer au lieu de votre choix, chez vous, sur le lieu de l’évènement…</p>
								</section>

								<section class="4u 6u(medium) 12u$(xsmall)">
									<input type="button" name="fname" value="+" id="question4">
									<h4 class="faq"><em>« Combien de temps prend l'installation ? »</em></h4>
									<p class="disparition_4">Pour une installation complète et propre, compter environ 2h.</p>

									<br />

									<input type="button" name="fname" value="+" id="question5">
									<h4 class="faq"><em>« Combien de temps prend le rangement ? »</em></h4>
									<p class="disparition_5">Le rangement prend environ 45min.</p>

									<br />

									<input type="button" name="fname" value="+" id="question6">
									<h4 class="faq"><em>« A quelle heure la prestation prend fin ? »</em></h4>
									<p class="disparition_6">La fin de la prestation est indiqué dans le contrat, et peut varier d’une formule à l’autre. Il faut tout de même noter que l’heure indiqué est l’heure de la fin d’animation, le rangement se fait après.</p>
								</section>

								<section class="4u 6u(medium) 12u$(xsmall)">

									<br />

									<input type="button" name="fname" value="+" id="question7">
									<h4 class="faq"><em>« Qui paye les droits musicaux ? »</em></h4>
									<p class="disparition_7">En fonction du type de soirée, si il y a des droits à payer, c’est à l’organisateur de s’en acquitter.</p>

									<br />

									<input type="button" name="fname" value="+" id="question8">
									<h4 class="faq"><em>« Que se passe t'il en cas d’empêchement de la part du DJ ? »</em></h4>
									<p class="disparition_8">Si par malheur, une fois le contrat signé, je me trouve dans l’incapacité d’assurer la prestation (circonstances exceptionnelles), je m'assurai de vous fournir un autre DJ pour le même prix, ou une personne pouvant faire la soirée.</p>

									<br />

									<input type="button" name="fname" value="+" id="question9">
									<h4 class="faq"><em>« Travaillez vous en accord avec le traiteur ? »</em></h4>
									<p class="disparition_9">Oui, j'essaie, quand il y en a un, de me coordonner avec le traiteur, pour les temps danses ou repas. Gardez tout de même à l’esprit que le seul et unique client, c’est vous, pour tous les choix d’organisation.</p>
								</section>
							</div>
						</div>
						<!--
						<footer class="major">
							<ul class="actions">
								<li><a href="#" class="button">Magna sed feugiat</a></li>
							</ul>
						</footer>
						-->
					</div>
					<br />

					<a href="#nine" class="goto-next2 scrolly">Next</a>
				</section>

				<section id="nine" class="wrapper style2 special fade-up" style="background: #102B53;">
					<div class="container">
						<header class="major">
							<h2>Album</h2>
							<p>Quelques photos de précédents évènements...</p>
						</header>
						<div class="box" style="border:none;">

							<div class="galerie p5">Moyen évènement : 40 personnes</div>
							<div class="galerie p9">Moyen évènement : 40 personnes</div>
							<div class="galerie p10">Petit évènement : 20 personnes</div>
							<div class="galerie p11">Petit évènement : 20 personnes</div>
							<div class="galerie p12">Grand évènement : 70 personnes</div>
							<div class="galerie p13">Grand évènement : 70 personnes</div>
							<div class="galerie p14">Grand évènement : 70 personnes</div>
							<div class="galerie p16">Moyen évènement : 40 personnes</div>
							<div class="galerie p17">Moyen évènement : 40 personnes</div>
							<div class="galerie p18">Petit évènement : 20 personnes</div>

							<img src="assets/images/expo5.jpg" alt="" width="100%" class="galerie2"/>
							<img src="assets/images/expo9.jpg" alt="" width="100%" class="galerie2"/>
							<img src="assets/images/expo10.jpg" alt="" width="100%" class="galerie2"/>
							<img src="assets/images/expo11.jpg" alt="" width="100%" class="galerie2"/>
							<img src="assets/images/expo12.jpg" alt="" width="100%" class="galerie2"/>
							<img src="assets/images/expo13.jpg" alt="" width="100%" class="galerie2"/>
							<img src="assets/images/expo14.jpg" alt="" width="100%" class="galerie2"/>
							<img src="assets/images/expo16.jpg" alt="" width="100%" class="galerie2"/>
							<img src="assets/images/expo17.jpg" alt="" width="100%" class="galerie2"/>
							<img src="assets/images/expo18.JPG" alt="" width="100%" class="galerie2"/>

						<!--
						<footer class="major">
							<ul class="actions">
								<li><a href="#" class="button">Magna sed feugiat</a></li>
							</ul>
						</footer>
						-->
					</div>
					<a href="#ten" class="goto-next2 scrolly">Next</a>
				</section>

				<section id="ten" class="wrapper style2 special fade-up" style="background: #013c77;">
					<div class="container">
						<header class="major">
							<h2>Contact</h2>
							<p>Pour me contacter : formulaire mail ou téléphone</p>
						</header>

						<div class="box small">

							<?php
								if(isset($_GET["e"])) 
								{
									if(htmlspecialchars($_GET["e"])==1) 
									{
							?>
										<p>Votre immaturité vous a conduit au banissement... Vous ne pouvez plus communiquer...</p>
							<?php
										// header('location:' . URLCouranteSansParametres());
									}
										
									if(htmlspecialchars($_GET["e"])==2) 
									{
							?>
										<p>Merci de remplir TOUS les champs (et correctement)</p>
							<?php
										// header('location:' . URLCouranteSansParametres());
									}
										
									if(htmlspecialchars($_GET["e"])==3) 
									{
							?>
										<p>Merci ! Je vous répond au plus vite. N'hésitez pas à me contacter par mail si je reste muet.</p>
							<?php
										// header('location:' . URLCouranteSansParametres());
									}
								}
							?>

							<form method="post" action="envoi.php" name="formulaire">
							
								<div class="row uniform half collapse-at-2">
								
									<div class="6u">
										<input type="text" name="user_name" id="name" value="" placeholder="Nom" />
									</div>
									
									<div class="6u">
										<input type="email" name="user_email" id="email" value="" placeholder="Email" />
									</div>
									
								</div>
								
								
								<div class="row uniform half" style="padding-top:0;">
									<div class="12u">
										<input type="text" name="user_subject" id="subject" value="" placeholder="Objet" />
									</div>
								</div>
								
								
								<div class="row uniform half">
									<div class="12u">
										<textarea name="user_message" id="message" placeholder="Votre message..." rows="6"></textarea>
									</div>
								</div>
								
								
								<div class="row uniform">
									<div class="12u">
										<ul class="actions align-center">
											<li><input type="submit" value="ENVOYER  !"/></li>
										</ul>
									</div>
								</div>
								
								
							</form>
						</div>
						
						<div class="box small">
							
							<ul style="border-top: solid rgba(255,255,255, 0.25) 1px; padding-top: 5%; list-style: none; font-size: 130%; margin-left:0; padding-left:0; color : rgba(255,255,255, 0.5);">

								<li>Thibaud Robin</li>
								<li>78000 Versailles</li>
								<li>T-Sax@gmail.com</li>
								<li>06 42 84 32 36</li>

							</ul>

						</div>
						
						<!--
						<footer class="major">
							<ul class="actions">
								<li><a href="#" class="button">Magna sed feugiat</a></li>
							</ul>
						</footer>
						-->
					</div>
					<a href="#eleven" class="goto-next2 scrolly">Next</a>

				</section>

				<section id="eleven" class="wrapper style2 special fade-up" style="background: #135596;">

					<div class="container">

						<header class="major">
							<h2>Et vous ? Qu'en pensez vous ?</h2>
							<p>N'hésitez pas à laisser votre avis ici et sur les divers sites d'annonces !</p>
						</header>

						<div class="box small">

							<?php
								if(isset($_GET["c"])) 
								{
									if(htmlspecialchars($_GET["c"])==1) 
									{
							?>
										<p>Votre immaturité vous a conduit au banissement... Vous ne pouvez plus commenter...</p>
							<?php
										// header('location:' . URLCouranteSansParametres());
									}
										
									if(htmlspecialchars($_GET["c"])==2) 
									{
							?>
										<p>Merci de remplir TOUS les champs (et correctement)</p>
							<?php
										// header('location:' . URLCouranteSansParametres());
									}
										
									if(htmlspecialchars($_GET["c"])==3) 
									{
							?>
										<p>Merci ! Votre commentaire ne devrait pas tarder à apparaitre ! :-)</p>
							<?php
										// header('location:' . URLCouranteSansParametres());
									}

									if(htmlspecialchars($_GET["c"])==4) 
									{
							?>
										<p>Vous ne pouvez pas écrire deux commentaires. Cependant je complèterai votre ancien commentaire avec votre nouveau. Vous me donnez du travail ;-)</p>
							<?php
										// header('location:' . URLCouranteSansParametres());
									}
								}

								try
					            {
									$bdd = new PDO('mysql:host=localhost;dbname=u358040400_perso;charset=utf8', 'u358040400_perso', 'tlboss78');
					            }
					            catch(Exception $e)
					            {
					            	die('Erreur : '.$e->getMessage());
					            }

        						$req = $bdd->query("SELECT NumUtilisateur, Commentaire, DateCom
                                					FROM COMMENTAIRE 
                                					WHERE Validation = 'oui'
                                					ORDER BY DateCom DESC
                               					   ");
							?>

							<div class="carroussel">
								<div id="slides">
								<?php
									$i = 0;
						            while ($donnees = $req->fetch())
				            		{
				            			$NumUtilisateur = $donnees['NumUtilisateur'];
										$Commentaire = $donnees['Commentaire'];
										$DateCom = date_parse($donnees['DateCom']);
				            	?>
										<div class="div_carroussel">
											<!-- <img style="text-align:left;" src="assets/images/guillemet.png" alt="" width="5%"/> -->
											<p><em><?php echo $donnees['Commentaire'];?></em></p>

											<h4><?php echo get_NomUtilisateur($donnees['NumUtilisateur']) . " - " . $DateCom['day'] . "/" . $DateCom['month'] . "/" . $DateCom['year']?></h4>
										</div>
								<?php
										$i = $i + 1;
									}

									if($i == 1) 
									{
				            	?>
										<div class="div_carroussel">
											<!-- <img style="text-align:left;" src="assets/images/guillemet.png" alt="" width="5%"/> -->
											<p><em><?php echo $Commentaire;?></em></p>

											<h4><?php echo get_NomUtilisateur($NumUtilisateur) . " - " . $DateCom['day'] . "/" . $DateCom['month'] . "/" . $DateCom['year']?></h4>
										</div>
								<?php
									}
								?>
									<a href="#" class="slidesjs-previous slidesjs-navigation"><i class="icon-chevron-left icon-large"></i></a>
									<a href="#" class="slidesjs-next slidesjs-navigation"><i class="icon-chevron-right icon-large"></i></a>
								</div>
							</div>


							<form method="post" action="commentaire.php" name="formulaire" style="border-top: solid 1px rgba(255,255,255, 0.25); padding-top:8%;">
							
								<div class="row uniform half collapse-at-2">
								
									<div class="6u">
										<input type="text" name="NomUtilisateur" id="name" value="" placeholder="Nom" />
									</div>
									
									<div class="6u">
										<input type="email" name="MailUtilisateur" id="email" value="" placeholder="Email" />
									</div>
									
								</div>
								
								
								<div class="row uniform half">
									<div class="12u">
										<textarea name="Commentaire" id="message" placeholder="Votre commentaire très gentil  ;-)" rows="6"></textarea>
									</div>
								</div>
								
								
								<div class="row uniform">
									<div class="12u">
										<ul class="actions align-center">
											<li><input type="submit" value="ENVOYER  !"/></li>
										</ul>
									</div>
								</div>
							</form>

						</div>

						<div class="box small">
															
							<p style="margin:0%; padding-top:5%; border-top: solid 1px rgba(255,255,255, 0.25)">
								<a style="border:none; margin-right:7%;" href="http://www.jemepropose.com/annonces/dj/animateur-dj-pour-vos-petits-et-moyens-evenements+434433"><img style="border-radius:15%;" src="assets/images/jemepropose.jpeg" alt="jemepropose" width="10%" /></a>

								<a style="border:none;" href="http://www.aladom.fr/dj/magny-les-hameaux-78/animateur-dj-pour-vos-petits-et-moyens-evenements-3jpo"><img style="border-radius:15%;" src="assets/images/aladom.png" alt="aladom" width="10%" /></a>

								<!-- <a style="border:none; margin-left:7%;" href="www.facebook.com/T-Sax"><img src="assets/images/vivastreet.jpg" alt="vivastreet" width="10%" /></a> -->
							<p/>

						</div>

					</div>
				</section>

			<!-- Footer -->
				<footer id="footer">
					<img src="assets/images/icone2.png" alt="" width="15%"/>

					<ul class="icons">
						<li><a href="https://www.twitter.com/tbowarrow" class="icon alt fa-twitter"><span class="label">Twitter</span></a></li>
						<li><a href="https://www.facebook.com/T-Sax" class="icon alt fa-facebook"><span class="label">Facebook</span></a></li>
						<li><a href="https://www.instagram.com/T-Sax/" class="icon alt fa-instagram"><span class="label">Instagram</span></a></li>
						<li><a href="https://www.youtube.com/channel/UC1UuMv1NleP-zoDtOlYUR6Q" class="icon alt fa-youtube"><span class="label">Youtube</span></a></li>
						<li><a href="https://www.soundcloud.com/t-bow-arrow/" class="icon alt fa-soundcloud"><span class="label">SoundCloud</span></a></li>
					</ul>
					<ul class="copyright">
						<li>06.42.84.32.36 - T-Sax@gmail.com - djing@thibaud-robin.com</li>
						<li>&copyThibaud Robin - T-Sax - Tous droits réservés - Photos personnelles mais non contractuelles</li>
						<li>Entreprise au statut d'auto-entrepreneur - SIREN : 821 276 482 - SIRET : 821 276 482 00014 </li>
						<li>Vous disposez d'un droit d'accès, de modification, de rectification et de suppression des données qui vous concernent (art. 34 de la loi « Informatique et Libertés » du 6 janvier 1978). Pour exercer ce droit , faites-en la demande en utilisant le formulaire de contact.</li>
						<li>Je me réserve le droit de modifier le contenu de mes offres commerciales à tout moment (sans modifications pour les contrats signés).</li>
					</ul>
				</footer>
		</div>


		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>
			<script src="assets/js/carrousel.js"></script>
			<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
			<script src="assets/js/jquery.slides.min.js"></script>


			<script type="text/javascript">
			
				$(document).ready(function()
				{
					$('#question1').click(function()
					{
							$('.disparition_1').fadeToggle(400);
														// $('.disparition_2').fadeToggle(400);
					});
				});

				$(document).ready(function()
				{
					$('#question2').click(function()
					{
							$('.disparition_2').fadeToggle(400);
					});
				});

				$(document).ready(function()
				{
					$('#question3').click(function()
					{
							$('.disparition_3').fadeToggle(400);
					});
				});



				$(document).ready(function()
				{
					$('#question4').click(function()
					{
							$('.disparition_4').fadeToggle(400);
														// $('.disparition_2').fadeToggle(400);
					});
				});

				$(document).ready(function()
				{
					$('#question5').click(function()
					{
							$('.disparition_5').fadeToggle(400);
					});
				});

				$(document).ready(function()
				{
					$('#question6').click(function()
					{
							$('.disparition_6').fadeToggle(400);
					});
				});



				$(document).ready(function()
				{
					$('#question7').click(function()
					{
							$('.disparition_7').fadeToggle(400);
														// $('.disparition_2').fadeToggle(400);
					});
				});

				$(document).ready(function()
				{
					$('#question8').click(function()
					{
							$('.disparition_8').fadeToggle(400);
					});
				});

				$(document).ready(function()
				{
					$('#question9').click(function()
					{
							$('.disparition_9').fadeToggle(400);
					});
				});
			</script>

	</body>
</html>
<?php
	ob_end_flush();
?>