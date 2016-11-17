@extends('layouts.default')

@section('contenu')
	<div class="container">
		<div class="face top">
				<img width="100%" height="100%" src="http://localhost/prometheus/public/img/logocesi.png" alt="background"/>				
			</div>
					
			<div class="face left">
				<div class="etage" id="etage3">
							<center><br/><br/>etage 2</center>
							<div class="salle" id="archive"><div class="text">Archive</div></div>

							<div class="salle" id="S202"><div class="text">S202</div></div>
							<div class="ga3tes" style="position: absolute; top: 350px; left:143px; width: 15px; height: 23px; background-color: red;"></div>
							<div class="gates" style="position: absolute; top: 181px; left:143px; width: 15px; height: 25px; background-color: red;"></div>
							
							<div class="salle" id="S203"><div class="text">S203</div></div>
							<div class="gates" style="position: absolute; top: 149px; left:143px; width: 11px; height: 22px; background-color: red;"></div>	
							
							<div class="salle" id="S204"><div class="text">S204</div></div>
							<div class="gates" style="position: absolute; top: 138px; left:151px; width: 17px; height: 12px; background-color: red;"></div>
							
							<div class="salle" id="S205"><div class="text">S205</div></div>
							<div class="gates" style="position: absolute; top: 138px; left:321px; width: 21px; height: 14px; background-color: red;"></div>
							
							<div class="salle" id="S206"><div class="text">S206</div></div>
							<div id="S2062"></div>
							<div class="gates" style="position: absolute; top: 250px; left:338px; width: 15px; height: 25px; background-color: red;"></div>
							
							<div class="salle" id="S207"><div class="text">S207</div></div>
							<div class="gates" style="position: absolute; top: 280px; left:338px; width: 15px; height: 25px; background-color: red;"></div>
							
							<div class="salle" id="B200"><div class="text">B200</div></div>
							<div class="gates" style="position: absolute; top: 549px; left:338px; width: 14px; height: 23px; background-color: red;"></div>
							
							<div class="salle" id="B201"><div class="text">B201</div></div>
							<div class="gates" style="position: absolute; top: 549px; left:338px; width: 14px; height: 23px; background-color: red;"></div>

							<div class="salle" id="B202"><div class="text">B202</div></div>
							<div id="B2022"></div>
							<div class="gates" style="position: absolute; top: 580px; left:343px; width: 10px; height: 23px; background-color: red;"></div>
							
							<div class="salle" id="B203"><div class="text">B203</div></div>
							<div class="gates" style="position: absolute; top: 593px; left:320px; width: 21px; height: 15px; background-color: red;"></div>
							
							<div class="salle" id="B204"><div class="text">B204</div></div>
							<div class="gates" style="position: absolute; top: 593px; left:288px; width: 21px; height: 15px; background-color: red;"></div>
							
							<div class="salle" id="B205"><div class="text">B205</div></div>
							<div class="gates" style="position: absolute; top: 593px; left:221px; width: 22px; height: 15px; background-color: red;"></div>

							<div class="salle" id="B206"><div class="text">B206</div></div>
							<div class="gates" style="position: absolute; top: 597px; left:156px; width: 20px; height: 12px; background-color: red;"></div>
							
							
							<div class="salle" id="B207"><div class="text">B207</div></div>
							<div id="B2072"></div>
							<div class="gates" style="position: absolute; top: 581px; left:143px; width: 12px; height: 21px; background-color: red;"></div>			
						</div>
						
						<div class="etage" id="etage2">
							<center><br/><br/>etage 1</center>
							<div class="salle" id="S101"><div class="text">S101</div></div>	
							<div class="gates" style="position: absolute; top: 484px; left:148px; width: 15px; height: 26px; background-color: red;"></div>

							<div class="salle" id="S102"><div class="text">S102</div></div>
							<div class="gates" style="position: absolute; top: 350px; left:148px; width: 15px; height: 19px; background-color: red;"></div>
							<div class="gates" style="position: absolute; top: 181px; left:148px; width: 15px; height: 25px; background-color: red;"></div>
							
							<div class="salle" id="S103"><div class="text">S103</div></div>	
							<div class="gates" style="position: absolute; top: 150px; left:148px; width: 11px; height: 23px; background-color: red;"></div>				
							
							<div class="salle" id="S104"><div class="text">S104</div></div>
							<div class="gates" style="position: absolute; top: 139px; left:159px; width: 15px; height: 11px; background-color: red;"></div>
							
							<div class="salle" id="S105"><div class="text">S105</div></div>
							<div class="gates" style="position: absolute; top: 139px; left:327px; width: 24px; height: 15px; background-color: red;"></div>
							
							<div class="salle" id="S106"><div class="text">S106</div></div>
							<div id="S1062"></div>
							<div class="gates" style="position: absolute; top: 250px; left:346px; width: 15px; height: 25px; background-color: red;"></div>
							
							<div class="salle" id="S107"><div class="text">S107</div></div>
							<div class="gates" style="position: absolute; top: 280px; left:346px; width: 15px; height: 25px; background-color: red;"></div>
							
							<div class="salle" id="S108"><div class="text">S108</div></div>
							<div class="gates" style="position: absolute; top: 549px; left:346px; width: 14px; height: 23px; background-color: red;"></div>
							
							<div class="salle" id="B101"><div class="text">B101</div></div>
							<div id="B1012"></div>
							<div class="gates" style="position: absolute; top: 580px; left:350px; width: 10px; height: 23px; background-color: red;"></div>

							<div class="salle" id="B102"><div class="text">B102</div></div>
							<div class="gates" style="position: absolute; top: 593px; left:325px; width: 23px; height: 15px; background-color: red;"></div>
							
							<div class="salle" id="B103"><div class="text">B103</div></div>
							<div class="gates" style="position: absolute; top: 593px; left:280px; width: 23px; height: 15px; background-color: red;"></div>
							
							<div class="salle" id="B104"><div class="text">B104</div></div>
							<div class="gates" style="position: absolute; top: 593px; left:225px; width: 23px; height: 15px; background-color: red;"></div>
							<div class="gates" style="position: absolute; top: 593px; left:160px; width: 20px; height: 15px; background-color: red;"></div>
							
							<div class="salle" id="B105"><div class="text">B105</div></div>
							<div class="gates" style="position: absolute; top: 580px; left:148px; width: 10px; height: 26px; background-color: red;"></div>
							<div id="B1052"></div>
							
							<!-- <img src="http://localhost/prometheus/public/img/pacman.png" id="pacman" alt="pacman" /> -->
						</div>
							
						<div class="etage" id="etage1">
							<center><br/><br/>RDC</center>
							<div class="salle" id="cafet"><div class="text">CAFET</div></div>

							<div class="salle" id="Fab_Lab"><div class="text">Fab_Lab</div></div>
							
							<div class="salle" id="S001"><div class="text">S001</div></div>
							
							<div class="salle" id="S002"><div class="text">S002</div></div>
							
							<div class="salle" id="S004"><div class="text">S004</div></div>
							
							<div class="salle" id="B001"><div class="text">B001</div></div>
							<div class="gates" style="position: absolute; top: 381px; left:368px; width: 16px; height: 23px; background-color: red;"></div>			
							
							<div class="salle" id="B002"><div class="text">B002</div></div>
							<div class="gates" style="position: absolute; top: 427px; left:361px; width: 23px; height: 15px; background-color: red;"></div>
							
							<div class="salle" id="BDE"><div class="text">BDE</div></div>	
							<div class="gates" style="position: absolute; top: 300px; left:145px; width: 15px; height: 23px; background-color: red;"></div>
						</div>
					</div>
					
					<div class="face right">
						<img width="100%" height="100%" src="http://localhost/prometheus/public/img/logo.png" alt="background" />	
					</div>	
					
					<button id="previous">Revenir en arrière</button> <!-- Bouton précédent -->
		
		<a href="trombinoscope_simple.php">Voir la liste complète des étudiants</a>
		
		<fieldset id="touche"> <!-- Récapitulatif des touches qu'on peut utiliser comme racourci -->
			<legend>Touches</legend>
			1 : RDC<br/>
			2 : étage 1<br/>
			3 : étage 2<br/>
			b : retour en arrière<br/><br/>
			<div id="last_touch"></div>
		</fieldset>
		
		<div id="form">
			<form method="post">
				<p>Nom : <input type="text" id="name" /><br/></p>							
				<input type="submit" value="Rechercher" id="search" />
			</form>
			<br/>
			<div id="message_user"></div>	
		</div>
	</div>
@stop