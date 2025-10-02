<!DOCTYPE html>
<html>
   <head>
      <title>Economy</title>
      <link href="../discordBots.css" rel="stylesheet" type="text/css" />
      <link href="../shared/navbar.css" rel="stylesheet" type="text/css" />
      <meta charset='utf-8'>
      <meta name="author" content="Cheesenibbles123">
      <meta property="og:title" content="Oliverbot Economy page" />
      <meta property="og:site_name " content="Archiesbots" />
      <meta property="og:description" content="Oliverbot Economy page" />
      <meta property="og:url" content="http://www.archiesbots.com/DiscordBots/Oliverbot/Economy.php" />
      <meta property="og:image" content="http://www.archiesbots.com/DiscordBots/Images/giraffe.jpg" />
      <meta name="theme-color" content="#696969">
      <meta name="twitter:title" content="Oliverbot Economy page">
      <meta name="twitter:card" content="summary_large_image">
   </head>

   <body>
      <script src="../shared/navbar.js"></script>

      <div style="margin-top:65px;">
         <div class="leftHalf" id="users">
         </div>

         <div class="rightHalf">
            <div class="contentsBacking">
               <h2 style="border-bottom: solid 1px #000000; text-align:center;">
                  Filters
               </h2>

               <ul class="listNoBullet" style="padding:10px">
                  <li>
                     <a onClick="javascript:listAll();" class="navBtn">All</a>
                  </li>

                  <li>
                     <a onClick="javascript:listWithInventory();" class="navBtn">Inventory Only</a>
                  </li>

                  <li>
                     <input type="text" id="customSearch" onkeyup="searchForName()" placeholder="Search for user..">
                  </li>
               </ul>
            </div>
         </div>
      </div>

      <script type="text/javascript">
         let data = <?php
            $host = apache_getenv("DATABASE_HOST");
            $username = apache_getenv("DATABASE_USERNAME");
            $password = apache_getenv("DATABASE_PASSWORD");
            $name = apache_getenv("DATABASE_NAME");

            $con = mysqli_connect($host, $username, $password, $name);
            if (mysqli_connect_errno()) {
               echo "Failed to connect to the database!";
            }

            $result = mysqli_query($con, "SELECT xp.username AS Username, inventoryGT.ID AS UserID,  inventoryGT.giraffeCoins AS GC, inventoryGT.inventory AS Inventory FROM inventoryGT INNER JOIN xp ON inventoryGT.ID = xp.id");

            $rows = array();
            $count = 0;
            while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
               array_push($rows, $row);
            }

            echo json_encode($rows);

            mysqli_close($con);
         ?>;

         data = convertData(data);
         listAll();

         function listAll() {
            let allUsers = "";
            for (let i = 0; i < data.length; i++) {
               let user = data[i];

               let userData = `<details><summary class="infoBox">${user.Username}</summary><ul>`;
               let cleaned = sanitizeInventory(user.Inventory);

               userData += setupDetails("Worth", `Wallet: ${user.GC}GC<br>Assets: ${cleaned[1]}GC`);

               if (user.Inventory.length > 2) {
                  userData += setupDetails("Assets", `${cleaned[0]}`, 'infoBox');
               }

               userData += "</ul></details>";
               allUsers += userData;
            }
            document.getElementById("users").innerHTML = allUsers;
         }

         function listWithInventory() {
            let allUsers = "";
            for (let i = 0; i < data.length; i++) {
               let user = data[i];
               if (user.Inventory.length > 2) {
                  let userData = `<details><summary class="infoBox">${user.Username}</summary><ul>`;
                  let cleaned = sanitizeInventory(user.Inventory);

                  userData += setupDetails("Worth", `Wallet: ${user.GC}GC<br>Assets: ${cleaned[1]}GC`);
                  userData += setupDetails("Assets", `Assets: ${cleaned[0]}`, 'infoBox');
                  userData += "</ul></details>";
                  allUsers += userData;
               }
            }
            document.getElementById("users").innerHTML = allUsers;
         }

         function setupDetails(title, body, clss) {
            if (clss) {
               return `<details><summary class="${clss}">${title}</summary><div class="sailSlot">${body}</div></details>`;
            } else {
               return `<details><summary class="infoBox">${title}</summary><div class="sailSlot">${body}</div></details>`;
            }
         }

         function sanitizeInventory(inventory) {
            inventory = JSON.parse(inventory);
            let finalResult = "";
            let value = 0;
            for (let s = 0; s < inventory.length; s++) {
               finalResult += `Name: ${inventory[s].properName}<br>`;
               value += inventory[s].value;
            }
            return [finalResult, value];
         }

         function convertData(data) {

            for (let i = 0; i < data.length; i++) {
               data[i].Username = atob(data[i].Username)
                  .replace(/</g, "&lt;")
                  .replace(/>/g, "&gt;");
            }

            data.sort(function(a, b) {
               if (a.Username.toLowerCase() < b.Username.toLowerCase()) {
                  return -1;
               }
               if (a.Username.toLowerCase() > b.Username.toLowerCase()) {
                  return 1;
               }
               return 0;
            });

            return data;
         }

         function searchForName() {
            let name = document.getElementById('customSearch').value;
            console.log(name);
            if (name !== "") {
               let allUsers = "";
               for (let i = 0; i < data.length; i++) {
                  let user = data[i];
                  console.log(user.Username.toLowerCase().indexOf(name));
                  if (user.Username.toLowerCase().indexOf(name) > 0) {
                     let userData = `<details><summary class="infoBox">${user.Username}</summary><ul>`;
                     let cleaned = sanitizeInventory(user.Inventory);

                     userData += setupDetails("Worth", `Wallet: ${user.GC}GC<br>Assets: ${cleaned[1]}GC`);
                     userData += setupDetails("Assets", `Assets: ${cleaned[0]}`, 'infoBox');
                     userData += "</ul></details>";
                     allUsers += userData;
                  }
               }
               document.getElementById("users").innerHTML = allUsers;
            } else {
               listAll();
            }
         }
      </script>

      <script src="../shared/bottombar.js"></script>
   </body>
</html>