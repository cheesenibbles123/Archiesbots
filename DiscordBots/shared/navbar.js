document.write(`

	<script>

		function myFunction(itemID) {
			var doc = document.getElementById(itemID);
			if (doc.style.display == 'block'){
				doc.style.display = 'none';
			}else{
				doc.style.display = 'block';
			}
		};

	</script>

	<ul class="navbar">

		<li class="navListL">
			<a onClick="javascript:myFunction('mainHome');" class="navBtn">Discord Bots</a>
			<ul id="mainHome" class="mainHome">
				<li class="mainHomeList">
					<a href="http://www.archiesbots.com/AlternionWiki/Home.html">Alternion</a>
				</li>
				<li class="mainHomeList">
					<a href="http://www.archiesbots.com/DiscordBots/Home.html">Discord Bots</a>
				</li>
			</ul>
		</li>

		<li class="navListL">
			<a href="http://www.archiesbots.com/DiscordBots/Home.html" class="navBtn">Home</a>
		</li>

		<li class="navListL">
			<a href="javascript:myFunction('oliverbot');" class="navBtn">Oliverbot</a>
			<ul id="oliverbot" class="mainHome">
				<li class="mainHomeList">
					<a href="http://www.archiesbots.com/DiscordBots/Oliverbot/XP.php">XP</a>
				</li>
				<li class="mainHomeList">
					<a href="http://www.archiesbots.com/DiscordBots/Oliverbot/commandUsage.php">Command Usage</a>
				</li>
				<li class="mainHomeList">
					<a href="http://www.archiesbots.com/DiscordBots/Oliverbot/Economy.php">Economy</a>
				</li>
			</ul>
		</li>

		<li class="navListR">
			<a href="http://www.archiesbots.com/index.html" class="navBtn">Archies Bots</a>
		</li>

		<li class="navListR">
			<a href="#" class="navBtn">FAQ</a>
		</li>

		<li class="navListR">
			<a href="#" class="navBtn">About</a>
		</li>

	</ul>

`);