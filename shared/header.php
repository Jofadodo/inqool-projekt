<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="styles/style.sass">
    <script src="js/javascript.js"></script>

    <title>Inqool projekt</title>

</head>

<body>

    <nav class="navigation">

        <div class="logo">
            <p class=""><strong>PG</strong>Service s.r.o.</p>
            <img src="/image/van.png" alt="van" class="icon">
        </div>

        <ul class="link-list" id="mySidebar">
            <?php

                if ("index.php" == basename($_SERVER['SCRIPT_NAME'])){
                    echo "<li><a class='nav navselected' href='/'>Úvodná stránka</a></li>";
                } else {
                    echo "<li><a class='nav' href='/'>Úvodná stránka</a></li>";
                }

                foreach (glob("*.php") as $file){

                    if ($file != "index.php" && $file != "kontakt.php"){

                        if ($file == basename($_SERVER['SCRIPT_NAME'])){
                            echo "<li><a class='nav navselected' href=",$file,">",ucfirst(basename(($file = str_replace("_", " ", $file)), ".php")),"</a></li>";
                        } else {
                            echo "<li><a class='nav' href=",$file,">",ucfirst(basename(($file = str_replace("_", " ", $file)), ".php")),"</a></li>";
                        }

                    }

                }

                if ("kontakt.php" == basename($_SERVER['SCRIPT_NAME'])){
                    echo "<li><a class='nav navselected' href='kontakt.php'>Kontakt</a></li>";
                } else {
                    echo "<li><a class='nav' href='kontakt.php'>Kontakt</a></li>";
                }

            ?>
        </ul>

        <div id="myButton" class="openbtn" onclick="changeNav()">
            <div></div>
            <div></div>
            <div></div>
        </div>

    </nav>
