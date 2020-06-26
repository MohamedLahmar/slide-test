<?php
include 'includes/db.php';
include 'includes/functions.php';
?>
<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

		<title>reveal.js</title>

		<link rel="stylesheet" href="dist/reset.css">
		<link rel="stylesheet" href="dist/reveal.css">
		<link rel="stylesheet" href="dist/theme/black.css" id="theme">
		<link rel="stylesheet" href="dist/costum.css">


		<!-- Theme used for syntax highlighted code -->
		<link rel="stylesheet" href="plugin/highlight/monokai.css" id="highlight-theme">
	</head>
	<body>
		<div class="reveal">
			<div class="slides">
				<section>
					<div class="img-container">
						<img data-src="test/image.png"onclick="fireEvent()" >
						<div class="overlay"></div>
					</div>
					
				</section>
				<section class="a">
					<div class="typewriter">
						<h2>Hallo,ik ben main een algoritme gebruikt door de Nederlandse overheid. Ik weet niet wat ethiek is, maar jij kunt me daar vast bij helpen.</h2>
						<?php 
						$sql = "SELECT text FROM secties where heeftvragen = '0'";
						$result = $conn->query($sql);
						if($result->num_rows > 0){
						while ($row = mysqli_fetch_assoc($result)) {
						echo $row['text'];
						}
						}
						?>
						<br><input value="Volgende" class="button1" onclick="fireEvent()">
						
					</div>
					
				</section>
				<section class="a">
					<form method="POST" enctype="multipart/form-data">
						<label for="fname">Voornaam:</label><br>
						<input type="text" id="fname" name="fname" value="John"><br>
						<label for="lname">Achternaam:</label><br>
						<input type="text" id="lname" name="lname" value="Doe"><br>
						<label for="lname">leeftijd:</label><br>
						<input type="number" id="lnumber" name="lnumber" value="18"><br>
						<label for="lname">adres:</label><br>
						<input type="text" id="ladres" name="ladres" value="ridderstraat 45"><br>
						<input type="submit" name="addUser"value="Volgende" onclick="fireEvent()">
					  </form> 
				</section>
				<section class="a">
				<?php 
					vraag1();
				?>
					<form method="POST" enctype="multipart/form-data">
					<label for="1">1</label>
					<input type="radio" id="antwoord" name="antwoord" value="1" >
					<label for="2">2</label>
					  <input type="radio" id="antwoord" name="antwoord" value="2">
					  <label for="3">3</label>
					  <input type="radio" id="antwoord" name="antwoord" value="3">
					  <label for="4">4</label>
					  <input type="radio" id="antwoord" name="antwoord" value="4">
					  <label for="5">5</label>
					  <input type="radio" id="antwoord" name="antwoord" value="5">
					  <label for="6">6</label>
					  <input type="radio" id="antwoord" name="antwoord" value="6">
					  <label for="7">7</label>
					  <input type="radio" id="antwoord" name="antwoord" value="7">
					  <label for="8">8</label>
					  <input type="radio" id="antwoord" name="antwoord" value="8">
					  <label for="9">9</label>
					  <input type="radio" id="antwoord" name="antwoord" value="9">
					  <label for="10">10</label>
					  <input type="radio" id="antwoord" name="antwoord" value="10"><br>
						<input type="submit" name="addAntwoorden" value="Volgende" onclick="fireEvent()">
					  </form>

					
				</section>
				<section class="a">
				<?php 
						vraag2();
				?>
					<form method="POST" enctype="multipart/form-data">
						<input type="radio" value="11" > Ja<br>
						<input type="radio" value="12"> Nee<br>
						<input type="button" name="addAntwoorden2" value="Volgende" onclick="fireEvent()">
					  </form>
				</section>
				<section class="a" >
				<?php 
						vraag3();
				?>
					<form method="POST" enctype="multipart/form-data">
						<input type="radio" value="11"  > Ja<br>
						<input type="radio" value="12" > Nee<br>
						<input type="button" name="addAntwoorden3" value="Volgende" onclick="fireEvent()">
					  </form>

				</section>
				<section class="a">
				<?php 
						vraag4();
				?>
					<form method="POST" enctype="multipart/form-data">
					<input type="radio" id="antwoord" name="antwoord" value="1" >
					<label for="2">2</label>
					  <input type="radio" id="antwoord" name="antwoord" value="2">
					  <label for="3">3</label>
					  <input type="radio" id="antwoord" name="antwoord" value="3">
					  <label for="4">4</label>
					  <input type="radio" id="antwoord" name="antwoord" value="4">
					  <label for="5">5</label>
					  <input type="radio" id="antwoord" name="antwoord" value="5">
					  <label for="6">6</label>
					  <input type="radio" id="antwoord" name="antwoord" value="6">
					  <label for="7">7</label>
					  <input type="radio" id="antwoord" name="antwoord" value="7">
					  <label for="8">8</label>
					  <input type="radio" id="antwoord" name="antwoord" value="8">
					  <label for="9">9</label>
					  <input type="radio" id="antwoord" name="antwoord" value="9">
					  <label for="10">10</label>
					  <input type="radio" id="antwoord" name="antwoord" value="10"><br>
						<input type="button" name="addAntwoorden4" value="Volgende" onclick="fireEvent()">
					  </form>

				</section class="a">
				<section class="a">
				<?php 
						vraag5();
				?>
					<form method="POST" enctype="multipart/form-data">
					<input type="radio" value="11" >Ja<br>
						<input type="radio" value="12" >Nee<br>
						<input type="button"  name="addAntwoorden5"value="Volgende" onclick="fireEvent()">
					  </form>

				</section>
				<section class="a">
				<?php 
						vraag6();
				?>
					<form method="POST" enctype="multipart/form-data">
						<input type="radio" value="11" > Gelijkheid<br>
						<input type="radio" value="12" > Veiligheid<br>
						<input type="button" name="addAntwoorden6"value="Volgende" onclick="fireEvent()">
					  </form>

				</section>
				<section class="a"> 
					Einde alle gegevens zijn succesvol naar de database gestuurd.
				</section>
				
			</div>
		</div>

		<script src="dist/reveal.js"></script>
		<script src="plugin/notes/notes.js"></script>
		<script src="plugin/markdown/markdown.js"></script>
		<script src="plugin/highlight/highlight.js"></script>
		<script>
			function fireEvent(e) {
				// console.log(e);
				// e.preventDefault();
				Reveal.right()
				// alert(1);
				return false;
			}


			// More info about initialization & config:
			// - https://revealjs.com/initialization/
			// - https://revealjs.com/config/
			Reveal.initialize({
				hash: true,

				// Learn about plugins: https://revealjs.com/plugins/
				plugins: [ RevealMarkdown, RevealHighlight, RevealNotes ]
			});
		</script>
		<style>
			.navigate-right {
				display: none !important;
			}
		</style>
	</body>
</html>
