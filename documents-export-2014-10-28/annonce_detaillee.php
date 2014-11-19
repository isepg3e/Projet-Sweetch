<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8"/>
		<title>Échange de logements | Sweetch</title>
		<link rel="stylesheet" href="style.css"/>
		<link rel="shortcut icon" href="icon-sweetch.png"/>
	</head>

	<body>

	<?php include("header.php");   ?>
			
		<div id="content-1"></div>

		
		<!-- slide des photos de la maison -->

			<section id="slideshow">  
          
    <div class="container">  
        <div class="c_slider"></div>  
        <div class="slider">  
            <figure>  
                <img src="maison5.jpeg" alt="" width="640" height="310" />  
                <figcaption>salon</figcaption>  
  
            </figure><!-- 
            --><figure>  
                <img src="maison6.jpeg" alt="" width="640" height="310" />  
                <figcaption>cuisine</figcaption>  
            </figure><!-- 
            --><figure>  
                <img src="maison7.jpeg" alt="" width="640" height="310" />  
                <figcaption>chambre</figcaption>  
  
            </figure><!-- 
            --><figure>  
                <img src="maison8.jpeg" alt="" width="640" height="310" />  
                <figcaption>jardin</figcaption>  
            </figure>  
        </div>  
    </div>  
          
    <span id="timeline"></span>  
			</section>

<div>
<strong>Services:</strong></br>
<strong>Contraintes:</strong></br>
<strong>Equipement:</strong></br>
<strong>date de disponibilité:</strong></br>

			<form method="get" action="envoi_email.php" > 
				<label for="envoi_email">me tenir informé pour les prochaines disponibilitées: </label>
			    <input type="text" name="envoi_email" placeholder="indiquer votre adresse mail " size="30" maxlength="100"/> 
				<input type="submit" name="submit" value="Envoyer un email" /> 
			<form>

</div>



	<?php include("footer.php");   ?>



	</body>
</html>
