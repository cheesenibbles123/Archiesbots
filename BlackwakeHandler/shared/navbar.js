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
				<li class="mainHomeList">
					<a href="http://www.archiesbots.com/BlackwakeHandler/Home.html">Blackwake Handler</a>
				</li>
			</ul>
		</li>

		<li class="navListL">
			<a href="http://www.archiesbots.com/BlackwakeHandler/Home.html" class="navBtn">Home</a>
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