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
         <a onClick="javascript:myFunction('mainHome');" class="navBtn">Alternion</a>
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
         <a href="http://www.archiesbots.com/AlternionWiki/Home.html" class="navBtn">Home</a>
      </li>

      <li class="navListL">
         <a href="http://www.archiesbots.com/AlternionWiki/Skins/Badges.html" class="navBtn">Badges</a>
      </li>

      <li class="navListL">
         <a href="http://www.archiesbots.com/AlternionWiki/Skins/Main-Sails.html" class="navBtn">Main Sails</a>
      </li>

      <li class="navListL">
         <a href="http://www.archiesbots.com/AlternionWiki/Skins/Normal-Sails.html" class="navBtn">Secondary Sails</a>
      </li>

      <li class="navListL">
         <a href="http://www.archiesbots.com/AlternionWiki/Skins/Flags.html" class="navBtn">Flags</a>
      </li>

      <li class="navListR" style="margin-left: auto">
      <a href="http://www.archiesbots.com/AlternionWiki/About.html" class="navBtn">About</a>
      </li>
      
      <li class="navListR">
      <a href="http://www.archiesbots.com/AlternionWiki/FAQ.html" class="navBtn">FAQ</a>
      </li>
      
      <li class="navListR">
         <a href="http://www.archiesbots.com/index.html" class="navBtn">Archies Bots</a>
      </li>
   </ul>
`);