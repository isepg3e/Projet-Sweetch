<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8"/>
		<title>Échange de logements | Sweetch</title>
		<link rel="stylesheet" href="styleA.css"/>
		<link rel="shortcut icon" href="icon-sweetch.png"/>
	</head>

	<body>

	<?php include("header.php");   ?>
			
		

		
		<!-- slide des photos de la maison -->

<section class="section_1">
		<div id="slideshow">  
          
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
		</div>

</section>



<section class="section_2">
	<div class="bloc_1">
		<div class="description">		
		</div>
		<div class="service">
		</div>
		<div class="contrainte">
		</div>
		<div class="equipement">
		</div>
	</div>

	<div class="bloc_2">
		<div class="carte"></div>
		<div class="disponibilité"></div>
					<form method="get" action="envoi_email.php" > 
					<label for="envoi_email" class="email">me tenir informé pour les prochaines disponibilitées: </label>
					<input type="text" name="envoi_email" placeholder="indiquer votre adresse mail " size="30" maxlength="100"/> 
					<input type="submit" name="submit" class="email" value="Envoyer un email" /> 
					</form>



					<div class="bouton">
						<p>
							Sweetch
						</p>
						
					</div>
	</div>

	<div class="clear"></div>
	
	<div class="commentaire"></div>
</section>
				
				
				
				
				
				
				
				
				<form method="get" action="envoi_email.php" > 
					<label for="envoi_email" class="email">me tenir informé pour les prochaines disponibilitées: </label>
					<input type="text" name="envoi_email" placeholder="indiquer votre adresse mail " size="30" maxlength="100"/> 
					<input type="submit" name="submit" class="email" value="Envoyer un email" /> 
				</form>



<div class="bouton">
	<p>
		Sweetch
	</p>
	
</div>
</br>
</br>



	<div class="content-1"></div>


	<?php include("footer.php");   ?>



	</body>
</html>
