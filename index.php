<?php include 'shared/header.php' ?>

<main>

    <section class="css-slider-wrapper" id="images">
        <input type="radio" name="slider" class="slide-radio1" checked id="slider_1">
        <input type="radio" name="slider" class="slide-radio2" id="slider_2">
        <input type="radio" name="slider" class="slide-radio3" id="slider_3">
        <input type="radio" name="slider" class="slide-radio4" id="slider_4">

        <div class="slider-pagination">
            <label for="slider_1" class="page1"></label>
            <label for="slider_2" class="page2"></label>
            <label for="slider_3" class="page3"></label>
            <label for="slider_4" class="page4"></label>
        </div>

        <div class="slider slide-1">
            <img src="img/slider/slide-1.jpg" alt="">
        </div>
        <div class="slider slide-2">
            <img src="img/slider/slide-2.jpg" alt="">
        </div>
        <div class="slider slide-3">
            <img src="img/slider/slide-3.jpg" alt="">
        </div>
        <div class="slider slide-4">
            <img src="img/slider/slide-4.jpg" alt="">
        </div>  
    </section>


    <!-- <section class="my-slider">
            <div class="my-slider__bar"><img src="img/slider/slide-1.jpg" alt=""></div class="my-slider__bar">
            <div class="my-slider__bar"><img src="img/slider/slide-2.jpg" alt=""></div class="my-slider__bar">
            <div class="my-slider__bar"><img src="img/slider/slide-3.jpg" alt=""></div class="my-slider__bar">
            <div class="my-slider__bar"><img src="img/slider/slide-4.jpg" alt=""></div class="my-slider__bar">
    </section> -->

    
    <section class="portfolio" id="portfolio">
        <?php
            include 'shared/database.php';
            $sql = "SELECT * FROM portfolio ORDER BY date desc";
            $data = getDataFromDatabase($sql);

            echo "<ul class='portfolio__block'>";
            foreach ($data as $tab) {
                echo "<li class='portfolio__block__box'>";
                    echo "<a href='#'>";
                        echo "<h2>" . $tab["header"] . "</h2>";
                        echo "<p>" . $tab["description"] . "</p>";
                        echo "<p>" . date_format(date_create($tab["date"]), "d.m.Y") . "</p>";
                    echo "</a>";
                echo "</li>";
            }
            echo "</ul>";

        ?>

    </section>

    <div class="portfolio__scroll-buttons">
        <button class="portfolio__scroll-buttons--left" id="scrollLeft" type="button" onclick="scrollToLeft()"><img src="img/scroll-arrow.png" alt=""></button>
        <button class="portfolio__scroll-buttons--right" id="scrollRight" type="button" onclick="scrollToRight()"><img src="img/scroll-arrow.png" alt=""></button>
    </div>
    
        
    <section id="div2">
            
    </section>
                
                
                
</main>

<?php include 'shared/footer.php' ?>