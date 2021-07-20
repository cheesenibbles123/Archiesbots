<!DOCTYPE html>
<html>

   <head>
      <title>Command Usage</title>
      <link href="../discordBots.css" rel="stylesheet" type="text/css" />
      <link href="../shared/navbar.css" rel="stylesheet" type="text/css" />
      <meta charset='utf-8'>

      <meta name="author" content="Cheesenibbles123">

      <meta property="og:title" content="Oliverbot Command Usage page" />
      <meta property="og:site_name " content="Archiesbots" />
      <meta property="og:description" content="Oliverbot Command Usage page" />  
      <meta property="og:url" content="http://www.archiesbots.com/DiscordBots/Oliverbot/commandUsage.php" />
      <meta property="og:image" content="http://www.archiesbots.com/DiscordBots/Images/giraffe.jpg" />

      <meta name="theme-color" content="#696969">

      <meta name="twitter:title" content="Oliverbot Command Usage page">
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

            $con=mysqli_connect($host,$username,$password,$name);
            if (mysqli_connect_errno())
            {
              echo "Failed to connect to database ";
            }

            $result = mysqli_query($con,"SELECT * FROM commandUsageOliverBot ORDER BY command");

            echo "<table class=\"tableLayout\">
            <tr>
            <th>Command</th>
            <th>Number of Times Used</th>
            </tr>";

            while($row = mysqli_fetch_array($result))
            {
              echo "<tr>";
              echo "<td>" . $row['command'] . "</td>";
              echo "<td>" . $row['TimesUsed'] . "</td>";
              echo "</tr>";
            }
            echo "</table>";

            mysqli_close($con);

          ?>

      </div>

      <script src="../shared/bottombar.js"></script>

   </body>

</html>