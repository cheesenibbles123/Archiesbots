document.write(`
	<button class="mobile-nav-toggle" aria-controls="primary-navigation" aria-expanded="false"><span>Menu</span></button>

	<ul id="primary-navigation" class="navbar" data-visible="false">
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

	<script>
		function myFunction(itemID) {
			var doc = document.getElementById(itemID);
			if (doc.style.display == 'block'){
				doc.style.display = 'none';
			} else {
				doc.style.display = 'block';
			}
		}

		const navBar = document.querySelector('.navbar');
		const navToggle = document.querySelector('.mobile-nav-toggle');

		navToggle.addEventListener('click', () => {
			const vis = navBar.getAttribute('data-visible');
			if (vis === 'false'){
				navBar.setAttribute('data-visible', 'true');
				navToggle.setAttribute('aria-expanded', 'true');
			} else {
				navBar.setAttribute('data-visible', 'false');
				navToggle.setAttribute('aria-expanded', 'false');
			}
		})
	</script>
`);