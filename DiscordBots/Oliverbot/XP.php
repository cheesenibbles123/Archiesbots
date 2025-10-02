<!DOCTYPE html>
<html>
   <head>
      <title>Oliverbot XP</title>
      <link href="../discordBots.css" rel="stylesheet" type="text/css" />
      <link href="../shared/navbar.css" rel="stylesheet" type="text/css" />
      <meta charset='utf-8'>
      <meta name="author" content="Cheesenibbles123">
      <meta property="og:title" content="Oliverbot XP page" />
      <meta property="og:site_name " content="Archiesbots" />
      <meta property="og:description" content="Oliverbot XP page" />
      <meta property="og:url" content="http://www.archiesbots.com/DiscordBots/Oliverbot/XP.php" />
      <meta property="og:image" content="http://www.archiesbots.com/DiscordBots/Images/giraffe.jpg" />
      <meta name="theme-color" content="#696969">
      <meta name="twitter:title" content="Oliverbot XP page">
      <meta name="twitter:card" content="summary_large_image">
   </head>

   <body>
      <script src="../shared/navbar.js"></script>

      <div style="margin-top:65px;">
         <?php
            $host = apache_getenv("DATABASE_HOST");
            $username = apache_getenv("DATABASE_USERNAME");
            $password = apache_getenv("DATABASE_PASSWORD");
            $name = apache_getenv("DATABASE_NAME");

            $con = mysqli_connect($host, $username, $password, $name);
            if (mysqli_connect_errno()) {
               echo "Failed to connect to the database!";
            }

            $result = mysqli_query($con, "SELECT * FROM xp ORDER BY level DESC,xp DESC");

            echo "<table class=\"tableLayout\">
                  <tr>
                  <th>Rank</th>
                  <th>ID</th>
                  <th>Username</th>
                  <th>level</th>
                  <th>XP</th>
                  </tr>";

            while ($row = mysqli_fetch_array($result)) {
               $count += 1;
               echo "<tr>";
               echo "<td>" . $count . "</td>";
               echo "<td>" . $row['id'] . "</td>";
               echo "<td>" . base64_decode($row['username']) . "</td>";
               echo "<td>" . $row['level'] . "</td>";
               echo "<td>" . $row['xp'] . "</td>";
               echo "</tr>";
            }
            echo "</table>";

            mysqli_close($con);
         ?>
      </div>

      <script src="../shared/bottombar.js"></script>
   </body>
</html>