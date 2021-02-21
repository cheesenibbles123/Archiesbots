document.write(`\
\
   <script>\
      function myFunction(itemID) {\
         document.getElementById(itemID).classList.toggle("show");\
      }\
   </script>\
\
   <ul class="navbar">\
\
      <li class="navListL">\
         <button onclick="myFunction('mainHome')">Discord Bots</button>\
         <div id="mainHome" style="visibility: hidden;">
            <a href="http://www.archiesbots.com/AlternionWiki/Home.html">Alternion</a>
            <a href="#">Discord Bots</a>
         </div>
      </li>\
\
      <li class="navListL">\
         <a href="#">Home</a>\
      </li>\
\
      <li class="navListL">\
         <a href="#">Oliverbot</a>\
      </li>\
\
      <li class="navListR">\
         <a href="#">Archies Bots</a>\
      </li>\
\
      <li class="navListR">\
         <a href="#">FAQ</a>\
      </li>\
\
      <li class="navListR">\
         <a href="#">About</a>\
      </li>\
\
   </ul>\
\
`);