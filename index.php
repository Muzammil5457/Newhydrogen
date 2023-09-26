<?php
$GLOBALS['title'] = "Newhydrogen";
$GLOBALS['desc'] = "";
$GLOBALS['keywords'] = "";
$videos = include "./data/podcast-data.php";
include('header.php'); ?>


<section class="banner">
    <div id="bannerCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#bannerCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#bannerCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#bannerCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
                <img src="./assets/img/hero-1.jpg" class="d-block w-100" alt="hero">
            </div>
            <div class="carousel-item">
                <img src="./assets/img/hero-2.jpg" class="d-block w-100" alt="hero">
            </div>
            <div class="carousel-item">
                <img src="./assets/img/hero-3.jpg" class="d-block w-100" alt="hero">
            </div>
        </div>
    </div>
    <div class="banner-content">
        <div class="container">
            <div class="row_____ align-items-center">
                <div class="col-md-5 order-md-0 order-1">
                    <div class="bannerText">
                        <div class="bannerText-c">
                            <h1>The World's Cheapest Green Hydrogen</h1>
                            <p>We are developing a breakthrough technology that uses inexpensive heat instead of expensive electricity to split water to produce hydrogen

                            </p>
                        </div>

                        <a href="breakthrough-tech.php" class="theme-btn d-none d-sm-inline-flex">
                            <span>Learn More</span>
                        </a>
                        <!-- <a href="#fNewsletter" class="banner-newsletter">
                            Subscribe to Our Newsletter
                        </a> -->
                    </div>
                </div>
                <div class="col-md-7 order-md-1 order-0">
                    <div class="banner-watchbtn">
                        <img src="./assets/img/watch-video.png" alt="watch video">
                        <a href="https://www.youtube.com/watch?v=qSeX9e__Fu0" class="popup-youtube"></a>
                    </div>
                </div>
            </div>


            <!-- Mobile Action -->
            <div class="mobile-action d-sm-none">
                <a href="market.php" class="theme-btn">
                    <span>Learn More</span>
                </a>
                <div class="carousel-indicators justify-content-center" id="carousel-indicators2">

                </div>
            </div>
        </div>
    </div>
    <div class="banner-teams">
        <h5>
            Working with World Class Tech Teams at
        </h5>
        <div class="banner-teams-image">
            <div class="ucla">
                <img src="./assets/img/ucla.png" alt="ucla">
            </div>
            <div class="ucsb">
                <img src="./assets/img/ucsb.png" alt="ucsb">
            </div>
        </div>
    </div>
</section>

<section class="nn-abt">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="nn-abt-img">
                    <img src="./assets/img/nn-image.png" alt="">
                </div>

            </div>
            <div class="col-lg-7">
                <div class="nn-abt-wrap">
                    <h2 class="text-lg-center">NewHydrogen is developing a breakthrough technology that uses water and heat instead of electricity to produce the world’s cheapest green hydrogen</h2>
                    <p>Hydrogen is the cleanest and most abundant element in the universe, and we can’t live
                        without it. Hydrogen is the key ingredient in making fertilizers needed to grow food
                        for the world. It is also used for transportation, refining oil and making steel, glass,
                        pharmaceuticals and more. Unfortunately, most of the hydrogen today is made from
                        non-renewable dirty resources such as natural gas, coal and oil.</p>
                    <p>
                        Currently, the most common method of making green hydrogen is to split water into
                        oxygen and hydrogen with an electrolyzer using green electricity produced from solar
                        or wind. However, green electricity is and always will be very expensive. It currently
                        accounts for 73% of the cost of green hydrogen.
                    </p>
                    <p>
                        In most power plants, heat is generated first to run a steam turbine to produce
                        electricity. Therefore, by using heat directly we can skip the expensive process of
                        making electricity, and fundamentally lower the cost of green hydrogen. Inexpensive
                        heat can be obtained from concentrated solar, geothermal, nuclear reactors and
                        industrial waste heat. Working with a team of world-class chemical and materials
                        engineers, we are developing a novel low-cost thermochemical process to split water
                        using heat, instead of electricity.
                    </p>
                    <p>
                        Our mission is to help produce unlimited quantities of the world’s cheapest green
                        hydrogen, and usher in the green hydrogen economy that Goldman Sachs estimated to
                        be worth $12 trillion in the near future.
                    </p>
                    <a href="breakthrough-tech.php" class="theme-btn">Learn More</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="dp-carousel">

    <div class="dp-carousel-main">
        <?php
        foreach ($videos as $video) {
            $videoTitle = $video['title'];
            $videoID = $video['videoID'];
            $class = 'popup-youtube';
            if (stripos($videoTitle, "Naomi Boness") !== false) {
                $link = "naomi-boness-stanford.php";
                $class = '';
            } else {
                $link = "https://www.youtube.com/watch?v=$videoID";
                $class = 'popup-youtube';
            }
          
            if ($video['category'] !== 'short-video' && $video['display']) {
                echo "<div class=\"dp-carousel-item\">
                <div class=\"podcast-item\">
                <a href=\"$link\" class=\"$class\"> 
                    <div class=\"podcast-item-thumbnail\"><img src=\"//img.youtube.com/vi/{$video['videoID']}/maxresdefault.jpg\" alt=\"Thumbnail\">
                    <svg xmlns='http://www.w3.org/2000/svg' width='64' height='64' viewBox='0 0 64 64' fill='none'>
                    <circle cx='32' cy='32' r='32' fill='#4fe653'/>
                    <path d='M38 32.5L27 39L27 26L38 32.5Z' fill='black'/>
                </svg>
                    </div>
                    </a>
                    <h2> {$video['title']}</h2>
                </div>
                </div>";
            }
        }
        ?>
    </div>
</section>

<section class="dSection theme-full dSection-quote">
    <div class="container position-relative dSection__maindiv">
        <div class="row">
            <div class="col-lg-6 position-relative dSection__innerDiv">
                <div class="dSection__box">

                    <h3>Green Hydrogen <br> is a $12 Trillion <br> “Once in a Lifetime” <br> Market Opportunity</h3>

                    <span class="border-topp"></span>
                    <div class="b-g-grad">
                        <img src="./assets/img/Goldman-Sach.svg" alt="Goldman-Sach">
                    </div>
                </div>
                <div class="dSection__img">
                    <img src="./assets/img/h20-structure.png" alt="H2O structure">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="dSection__content">
                    <h3>Hydrogen is the
                        cleanest and most
                        abundant element in the universe,
                        and we can’t live without it.</h3>
                    <p>Hydrogen is the key ingredient in
                        making fertilizers needed to grow
                        food for the world. It is also used for
                        transportation, refining oil and making
                        steel, glass, pharmaceuticals and
                        more. Unfortunately, most of the
                        hydrogen today is made from
                        non-renewable dirty resources such as
                        natural gas, coal and oil.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="wt-sect-rev">
    <div class="dis-impact">
        <div class="container">
            <h3>Green Electricity Currently Accounts for 73% of the Cost of
                Green Hydrogen</h3>
            <div class="row">
                <div class="col-lg-6">
                    <div class="dis-impact-graph">
                        <img src="./assets/img/green-hydro-projection.png" alt="impace">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="dis-impact-content ms-auto">
                        <p>In most power plants, heat is generated first
                            to run a steam turbine to produce electricity. <br>
                            Therefore, by <span>using heat directly</span> we can
                            skip the expensive process of making
                            electricity, and <span>fundamentally lower
                                the cost of green hydrogen.</span>

                        </p>
                        <a href="breakthrough-tech.php" class="theme-btn">Learn More</a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<section class="wdSection h-graphSection">
    <div class="container position-relative wdSection__maindiv">
        <div class="row">
            <div class="col-lg-6 position-relative wdSection__innerDiv">
                <div class="wdSection__box">
                    <img src="./assets/img/home-graphs.png" alt="Graph image">
                </div>
                <div class="wdSection__img">
                    <img src="./assets/img/ocean-structure.jpg" alt="ocean structure">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="wdSection__content">
                    <h3>Hydrogen is the most abundant and prevalent clean energy in the universe.</h3>
                    <p>
                        Pound for pound, hydrogen contains 3X as much energy as natural gas or gasoline, and 200X as
                        much energy as lithium-ion batteries.
                    </p>
                    <a href="breakthrough-tech.php" class="theme-btn">
                        <span>Learn More</span>

                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="ourGoal-sect desk-mode-dd">
    <div class="container">
        <div class="ourGoal-sect__content">
            <h2>
                Our mission is to help produce unlimited quantities of the world’s
                cheapest green hydrogen, and usher in the green hydrogen economy
                that Goldman Sachs estimated to be worth $12 trillion in the near
                future.
            </h2>
            <a href="breakthrough-tech.php" class="theme-btn">
                <span>Learn More</span>

            </a>
        </div>
    </div>
</section>
<section class="mob-mode-dd">
    <div class="container">
        <div class="sect__content">
            <h2>
                Our goal is to help usher in the green hydrogen economy that Goldman Sachs estimated to have a future
                market value of $12 trillion.
            </h2>
            <a href="breakthrough-tech.php" class="theme-btn">
                <span>Learn More</span>

            </a>
        </div>
        <img src="./assets/img/our-goal-f.jpg" alt="">
    </div>
</section>
<?php
include('footer.php'); ?>