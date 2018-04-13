?>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
	<div class="menuSalle">
		<div onclick="openSalle()" class="demiCercle"><div class="croix1"></div><div class="croix2"></div></div>
		<div class="salleContainer">
			<div class="noColumn">
				<p class="lobster"> Salle:</p>
				<p class="lobster marginLeft2">pixel </p>
			</div>
			<p class="lobster">Groupe: Developpeur</p>
			<div class="noColumn rankedItems">
				<div>
					<div class="noColumn">
						<div class="noColumn marginItem">
							<p>30</p>
							<p class="marginLeft5">x</p>
						</div>
						<i class="fas fa-couch marginTop10px marginLeft5"></i>
					</div>
					<div class="noColumn">
						<div class="noColumn marginItem">
							<p>30</p>
							<p class="marginLeft5">x</p>
						</div>
						<img src="./bank/table.png" class="importPicture marginTop10px marginLeft5">
					</div>
					<div class="noColumn">
						<div class="noColumn marginItem">
							<p>1</p>
							<p class="marginLeft5">x</p>
						</div>
						<img src="./bank/projecteur.png" class="importPicture marginTop10px marginLeft5">
					</div>
				</div>
				<div class="marginTop20px">
					<div class="noColumn">
						<div class="noColumn marginItem">
							<p>3</p>
							<p class="marginLeft5">x</p>
						</div>
						<i class="fab fa-accessible-icon marginTop10px marginLeft5"></i>
					</div>
					<div class="noColumn">
						<div class="noColumn marginItem">
							<p>33</p>
							<p class="marginLeft5">x</p>
						</div>
						<i class="fas fa-male marginTop10px marginLeft5"></i>
					</div>
				</div>
			</div>
			<a class="noUnderLine" href="https://www.google.fr"><div class="buttonNoir lobster marginTopDix ">Annuler une reservation</div></a>
			<p class="lobster">Reserver ?</p>
			<div class="noColumn grandeIcon marginTop20px">
				<i onclick="openSalle()" class="fas fa-check-circle pointerCursor"></i>
				<i onclick="openSalle()" class="fas fa-times-circle pointerCursor"></i>
			</div>
		</div>
	</div>
	<div onclick="openSalle()" class="buttonMenuSalle">
		<div class="buttonNoir lobster marginTopDix ">Reserver le matin </div>
	</div>
    <div onclick="openSalle()" class="buttonMenuSalle">
        <div class="buttonNoir lobster marginTopDix ">Reserver la journée entière </div>
    </div>
	<div onclick="openSalle()" class="buttonMenuSalle">
		<div class="buttonNoir lobster marginTopDix ">Reserver l'apres-midi </div>
	</div>
	<script type="text/javascript">
		var d = 0;
		function openSalle(){
			var l = document.querySelector(".menuProfile");
			var k = document.querySelector(".buttonMenuProfile");
			var p = document.querySelector(".menuSalle");
			var q = document.querySelector(".buttonMenuSalle");
			while (d == 1 || d > 1){
				l.style.display ="none";
				p.style.display ="none";
				k.style.display ="block";
				d = 0;
				return;
			}
			while ( d == undefined || d == 0){
				p.style.display ="block";
				k.style.display ="none";
				l.style.display ="none";
				d = 1;
				return;
			}
		}
	</script>
<?php