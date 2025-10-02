<!DOCTYPE html>
<html>
	<head>
		<title>Arrrchive</title>
		<link rel="icon" href="https://cdn.discordapp.com/avatars/337541914687569920/a1d7679af509cec3ef5cd766292416c9.png">
		<link href="../styles/archive.css" rel="stylesheet" type="text/css" />
	</head>

	<header class="topbanner">
		Archie's Wonderland
	</header>

	<body>
		<section>
			<nav>
				<div class="navbar">
					<a href="../../index.html">Home</a>

					<div class="dropdown">
						<button class="dropbtn" onclick="myFunction()">Blackwake
							<i class="fa fa-caret-down"></i>
						</button>
						<div class="dropdown-content" id="myDropdown">
							<a href="../blackwake/bwhome.php">BW Home</a>
							<a href="../blackwake/tournamentwake.php">Tournamentwake</a>
							<a href="../blackwake/balancewake.php">Balancewake</a>
							<a href="../blackwake/bftortuga.php">Battlefield Tortuga</a>
							<a href="../blackwake/bftortugaHolyHammerEvents.php">Holy Hammer Events</a>
						</div>
					</div>

					<script>
						function myFunction() {
							document.getElementById("myDropdown").classList.toggle("show");
						}

						window.onclick = function(e) {
							if (!e.target.matches('.dropbtn')) {
								var myDropdown = document.getElementById("myDropdown");
								if (myDropdown.classList.contains('show')) {
									myDropdown.classList.remove('show');
								}
							}
						}
					</script>

					<div class="dropdown">
						<button class="dropbtn" onclick="BSdrpdwn()">Blazing Sails
							<i class="fa fa-caret-down"></i>
						</button>
						<div class="dropdown-content" id="BSdrpdwn">
							<a href="#">Blazing Tourneys</a>
							<a href="imagecontestwinners.php">Image contest winners</a>
							<a href="memearchive.php">Meme Archive</a>
						</div>
					</div>

					<script>
						function BSdrpdwn() {
							document.getElementById("BSdrpdwn").classList.toggle("show");
						}

						window.onclick = function(e) {
							if (!e.target.matches('.dropbtn')) {
								var myDropdown = document.getElementById("BSdrpdwn");
								if (myDropdown.classList.contains('show')) {
									myDropdown.classList.remove('show');
								}
							}
						}
					</script>

					<div class="dropdown">
						<button class="dropbtn" onclick="olb()">Oliverbot
							<i class="fa fa-caret-down"></i>
						</button>
						<div class="dropdown-content" id="olb">
							<a href="../oliverbot/leaderboards.php">Leaderboards</a>
							<a href="../oliverbot/commandusagefrequency.php">Command usage</a>
						</div>
					</div>

					<script>
						function olb() {
							document.getElementById("olb").classList.toggle("show");
						}

						window.onclick = function(e) {
							if (!e.target.matches('.dropbtn')) {
								var myDropdown = document.getElementById("olb");
								if (myDropdown.classList.contains('show')) {
									myDropdown.classList.remove('show');
								}
							}
						}
					</script>
				</div>
			</nav>

			<article>
				<h1>Image contest winners</h1>

				<div style="background-color:white;padding:10px;">
					<button class="dropbtn drpdwnbtnaesthetics" onclick="sw1()">04/11/2019
						<i class="fa fa-caret-down"></i>
					</button>
					<div class="dropdown-content" id="sw1">
						<a>
							<b>Server Banner:</b><br>
							<img src="https://cdn.discordapp.com/attachments/370150859109302273/640977609886400512/20191102152108_1.jpg">
							Metzkermeister#1390 (Metzkermeister)<br>
							<br>
							<br>
							<b>Server Invite:</b><br>
							<img src="https://cdn.discordapp.com/attachments/370150859109302273/640977432077271080/20191103185653_1.jpg">
							coudde#4700 (coudde17)
						</a>
					</div>
					<script>
						function sw1() {
							document.getElementById("sw1").classList.toggle("show");
						}
					</script>
				</div>

				<div style="background-color:white;padding:10px;">
					<button class="dropbtn drpdwnbtnaesthetics" onclick="sw2()">09/12/2019
						<i class="fa fa-caret-down"></i>
					</button>
					<div class="dropdown-content" id="sw2">
						<a>
							<b>Server Banner:</b><br>
							<img src="https://cdn.discordapp.com/attachments/370150859109302273/653584865098465283/Screenshot1_December.jpg">
							coudde17#4700 (coudde17)<br>
							<br>
							<br>
							<b>Server Invite:</b><br>
							<img src="https://cdn.discordapp.com/attachments/370150859109302273/653585050969047073/Screenshot2_December.jpg">
							Brent#4243 (Murgle)
						</a>
					</div>
					<script>
						function sw2() {
							document.getElementById("sw2").classList.toggle("show");
						}
					</script>
				</div>
			</article>
		</section>
	</body>
</html>