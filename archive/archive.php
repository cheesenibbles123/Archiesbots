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
					<a href="../index.html">Home</a>

					<div class="dropdown">
						<button class="dropbtn" onclick="myFunction()">Blackwake
							<i class="fa fa-caret-down"></i>
						</button>
						<div class="dropdown-content" id="myDropdown">
							<a href="blackwake/bwhome.php">BW Home</a>
							<a href="blackwake/tournamentwake.php">Tournamentwake</a>
							<a href="blackwake/balancewake.php">Balancewake</a>
							<a href="blackwake/bftortuga.php">Battlefield Tortuga</a>
							<a href="blackwake/HolyHammerEvents.php">Holy Hammer Events</a>
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
							<a href="blazingsails/imagecontestwinners.php">Image contest winners</a>
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
							<a href="oliverbot/leaderboards.php">Leaderboards</a>
							<a href="oliverbot/commandusagefrequency.php">Command usage</a>
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
				<h1>The Archive</h1>

				<div class="articlebox">
					<div style="background-color:white;padding:10px;">
						Welcome to The Archive! The entries in here are mainly for the purpose of (as the name implies) archiving. The dropdown buttons at the top of your screen can be used to navigate around the site. Click Home at the top if you wish to return to the homepage.
					</div>
				</div>

			</article>
		</section>
	</body>
</html>