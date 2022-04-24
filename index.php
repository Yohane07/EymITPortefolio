<!doctype html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<!--le css-->
	<link rel="stylesheet" href="style.css">
	<!-- font awesome cdn -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
	<title>Yohane ENDOKE - Développeur Fullstack</title>
	<meta name="description" content="Portefolio de Yohane ENDOKE, développeur fullstack à Nantes, en recherche
			d'alternance  le développement web dans le cadre d'un Bachelor IT parcours DEVOPS ">
</head>


<body>
<section class="home">
	<div class="image">
		<img src="Images/Yoh.jpg" alt="Photo de Yohane ENDOKE">
	</div>

	<div class="content">
		<div class="prez">Bonjour, je suis Yohane ENDOKE</div>
		<span>Développeur Fullstack</span>
		<p>J'ai 22 ans je suis étudiant en deuxième année d'un parcours Bachelor informatique
			à l'EPSI, passionné de développement et un attrait plus prononcé pour tout ce qui
			concerne le web!
		</p>
		<a href="#apropos" class="btn">A propos de moi <i class="fas fa-user"></i></a>
	</div>

</section>

<!-- navbar section starts -->

<nav class="navbar">
	<a href="#competences"> <i class="fas fa-briefcase"></i><span>Compétences</span></a>
	<a href="#apropos"> <i class="fas fa-user"></i><span>A propos</span></a>
	<a href="#contact"> <i class="fas fa-address-book"></i><span>Contact</span></a>
</nav>

<!-- section navbar end-->

<!-- section a propos starts -->
<section id="apropos">
	<h1 class="heading"> A propos de <span>moi</span></h1>
	<div class="row">
		<div class="info-container">
			<h2>Informations personnelles</h2>
			<div class="box-container">
				<div class="box">
					<h3>ENDOKE</h3>
					<h3>Yohane</h3>
					<h3>22 ans</h3>
					<h3>
						<address>Nantes</address>
					</h3>
					<form method="get" action="cv-yohane-endoke/yohaneendoke.pdf">
						<button class="btn" type="submit">CV<span class="fas fa-download"></span></button>
					</form>
				</div>
				<div class="box">
					<h3>Développeur Full-stack </h3>
					<h3>Experience: 1 an</h3>
					<h3>Langues: Français & Anglais</h3>
					<h3><a href="mailto:yohaneendoke4@gmail.fr">Contactez-moi !</a></h3>
				</div>
			</div>
		</div>
		<!--		.count-container>.box*3>(h3{2})(p{HAPPY})-->
		<div class="count-container">
			<div class="box">
				<p>Experience</p>
				<h3>2 ans</h3>
			</div>
			<div class="box">
				<p>Projets Réalisées</p>
				<h3>+14</h3>
			</div>
			<div class="box">
				<p>Langages & Framework</p>
				<h3>HTML&CSS,PHP, JS, C#, ASP.NET,</h3>
			</div>
		</div>
	</div>
</section>
<!--Début section compétences -->
<section id="competences">
	<h1 class="heading"> Mes <span>Compétences</span></h1>
	<div class="row">
		<div class="info-container">
			<h2>Web</h2>
			<div class="box-container-competence">
				<div class="box-competence">
					<img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/html5/html5-original.svg"/>
					<img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/css3/css3-original.svg"/>
					<h3>HTML&CSS</h3>
				</div>
				<div class="box-competence">
					<img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/javascript/javascript-original.svg"/>
					<h3>JAVASCRIPT</h3>
				</div>
				<div class="box-competence">
					<img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/php/php-original.svg"/>
					<h3>PHP</h3>
				</div>
				<div class="box-competence">
					<img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/symfony/symfony-original.svg"/>
					<h3>Symfony</h3>
				</div>
				<div class="box-competence">
					<img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/csharp/csharp-original.svg"/>
					<h3>Csharp</h3>
				</div>
				<div class="box-competence">
					<img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/dotnetcore/dotnetcore-original.svg"/>
					<h3>ASP.NET CORE</h3>
				</div>
			</div>
			<h2>Administration de base de données</h2>
			<div class="box-container-competence">
				<div class="box-competence">
					<img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/microsoftsqlserver/microsoftsqlserver-plain-wordmark.svg"/>
					<h3>SQL Server</h3>
				</div>
				<div class="box-competence">
					<img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/mysql/mysql-original-wordmark.svg"/>
					<h3>MySQL</h3>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Fin section compétences-->
<!-- Début section parcours-->
<section id="parcours">
	<h1 class="heading"><span>Mon</span> parcours</h1>
	<div class="box-container">
		<div class="box">
			<i class="fas fa-graduation-cap"></i>
			<span>Actuellement</span>
			<h3>En deuxième année de Bachelor IT à l'EPSI</h3>
			<p>
				Dans la continuité de la première année j'apprends de nouvelles techno
				et asseoir mes acquis...
			</p>
		</div>
		<div class="box">
			<i class="fas fa-graduation-cap"></i>
			<span>2018-2019</span>
			<h3>IDRAC Business School</h3>
			<p>
				L'IDRAC est une école de commerce et
				Au cours de cette année j'ai appris à développer une approche professionnelle
				avec des clients ou des prospects grâce à différentes techniques apprises en cours
				et développées en stage...
			</p>
		</div>
		<div class="box">
			<i class="fas fa-graduation-cap"></i>
			<span>2020-2021</span>
			<h3> Première année de Bachelor en Informatique</h3>
			<p>
				Au cours de laquelle j'ai appris la logique de base d'un informaticien, certains
				langages, découvert les outils de travail indispensable comme les outils de versioning...
			</p>
		</div>
		<div class="box">
			<i class="fas fa-graduation-cap"></i>
			<span>2017-2018</span>
			<h3>Baccalauréat C</h3>
			<p>
				Baccalauréat scientifique avec comme option Mathématique...
			</p>
		</div>
	</div>
</section>
<!-- Fin section éducation-->
<!-- Début section contact-->

<section id="contact">
	<h1 class="heading"><span>Contact</span></h1>
	<div class="row">
		<form method="post">
			<div class="inputBox">
				<input type="text" name="nom" placeholder="Nom et prénom" required>
				<input type="tel" name="telephone" placeholder="Téléphone">
			</div>
			<div class="inputBox">
				<input type="email" name="email" placeholder="Adresse mail" required>
				<input type="text" name="sujet" placeholder="Sujet">
			</div>
			<textarea name="message" placeholder="Votre message"
					  id="" cols="30" rows="10" required></textarea>
			<input class="btn" type="submit" value="Envoyez">
		</form>
	</div>
    <?php
    if (isset($_POST["message"])) {
        $detailsDuMail = "Depuis le formulaire de contact de yohane-endoke.fr
				 Nom et Prénom: " . $_POST["nom"] . "
				 Telephone: " . $_POST["telephone"] . "
				 Message: " . $_POST["message"];

        $retourParMail = mail("myohane07@gmail.com", $_POST["sujet"], $detailsDuMail,
            "From:contact@yohane-endoke.fr" . "\r\n" . "Reply-to:" . $_POST["email"]);
        if ($retourParMail) {
            echo "<p>Votre mail a bien été envoyé</p>";
        }
    }
    ?>
</section>
<!-- Fin section contact-->
<section class="footer">
	<div class="reseau">
		<h2>Retrouvez-moi sur</h2>
		<div class="socialmedia">
			<a href="https://www.linkedin.com/in/yohane-endoke-314695185/" class="fab fa-linkedin">
				Yohane ENDOKE
			</a>
			<a href="https://www.instagram.com/m_yohane/" class="fab fa-instagram">
				m-yohane
			</a>
			<a href="https://github.com/Yohane07?tab=overview&from=2022-04-01&to=2022-04-15" class="fab fa-github">
				Yohane ENDOKE
			</a>
		</div>
	</div>
</section>
</body>
</html>