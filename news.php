<?php
$GLOBALS['title'] = "News | NewHydrogen";
$GLOBALS['desc'] = "";
$GLOBALS['keywords'] = "";
$news = include "./data/news-data.php";
$videos = include "./data/podcast-data.php";
include('header.php'); ?>

<section class="newsPage">
    <div class="container">
        <h1 class="newsPage-title">Newsroom</h1>

        
        <!-- Latest Press Release News -->
        <div class="newsPage-category">
            <h2>Press Releases</h2>
            <a href="press-release.php">See all <i class="fas fa-arrow-right"></i></a>
        </div>
        <div class="row">
            <?php
            $filteredPressleaseNews = array_filter($news, function ($item) {
                return $item['category'] === 'pressrelease';
            });

            // Take the latest 4 industry news articles
            $latestIndustryNews = array_slice($filteredPressleaseNews, 0, 4);
            foreach ($latestIndustryNews as $item) {
                echo "<div class=\"col-lg-6\">
        <div class=\"newsItem\">
            <h5>{$item['title']}</h5>
            <p>{$item['excerpt']}</p>
            <div class=\"newsItem__date\">
                <span>{$item['date']}</span>
                <a href=\"single-news.php?id={$item['id']}\">Read More</a>
            </div>
        </div>
    </div>";
            } ?>

        </div>

        <div class="catlatest pt-0">
            <div class="newsPage-category">
                <h2>News Commentary</h2>
                <a href="video-news-commentary.php">See all <i class="fas fa-arrow-right"></i></a>
            </div>
            <div class="row">
                <?php
                $filteredCommentaryNews = array_filter($videos, function ($item) {
                    return $item['category'] === 'news-commentary';
                });
                $latestCompanyNews = array_slice($filteredCommentaryNews, 0, 3);
                foreach ($latestCompanyNews as $video) {
                    echo "<div class=\"col-lg-4\">
                <div class=\"catlatest-item\">
                    <div class=\"catlatest-thumbnail\">
                        <img src=\"//img.youtube.com/vi/{$video['videoID']}/maxresdefault.jpg\" alt=\"Thumbnail\">
                        <svg xmlns='http://www.w3.org/2000/svg' width='64' height='64' viewBox='0 0 64 64' fill='none'>
                        <circle cx='32' cy='32' r='32' fill='#4fe653'/>
                        <path d='M38 32.5L27 39L27 26L38 32.5Z' fill='black'/>
                    </svg>
                        <a href=\"single-video.php?id={$video['videoID']}\"></a>
                    </div>
                    <h4>{$video['title']}</h4>
                </div>
            </div>";
                }
                ?>
            </div>
        </div>



    </div>
</section>


<?php
include('footer.php'); ?>