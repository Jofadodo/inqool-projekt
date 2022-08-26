<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles/style.css">

    <title>Inqool projekt</title>

</head>

<body>

    <nav class="navigation">

        <ul class="navigation__link-list">
            <li onclick="topFunction()"><img src="img/me.jpg" alt="Me"></li>
            <!-- <a href="#div2">About me</a> -->
            <li onclick="scrollToTargetAdjusted('div2')">About me</li>
        </ul>

        <div class="navigation__search">
            <input type="text" placeholder="Search" class="navigation__search--input" id="search"> 
            <img src="img/loupe.png" alt="Search" class="navigation__search--img" onclick="searchBar()">
        </div>

        <div id="myButton" class="navigation__openbtn" onclick="changeNav()">
            <div></div>
            <div></div>
            <div></div>
        </div>

    </nav>



