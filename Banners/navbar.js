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
			<a href="http://www.archiesbots.com/AlternionWiki/Home.html" class="navBtn">Alternion</a>
		</li>

		<li class="navListL">
			<a href="http://www.archiesbots.com/DiscordBots/Home.html" class="navBtn">Discord Bots</a>
		</li>

		<li class="navListL">
			<a href="http://www.archiesbots.com/archive/archive.php" class="navBtn">Archive</a>
		</li>

	</ul>

`);