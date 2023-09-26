<?php
$GLOBALS['title'] = "News Commentary | Newhydrogen";
$GLOBALS['desc'] = "";
$GLOBALS['keywords'] = "";
$news = include "./data/news-data.php";
include('header.php'); ?>

<section class="newsPage">
    <div class="container">
        <div class="newsPage-catPage">
            <h1 class="newsPage-title">News Commentary</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="news.php">News</a></li>
                    <li class="breadcrumb-item active" aria-current="page">News Commentary</li>
                </ol>
            </nav>
        </div>

        <div class="row">
            <?php
            $filteredCompanyNews = array_filter($news, function ($item) {
                return $item['category'] === 'commentary';
            });

            // Sort the company news articles by date in descending order
            usort($filteredCompanyNews, function ($a, $b) {
                return strtotime($b['id']) - strtotime($a['id']);
            });

            // $latestCompanyNews = array_slice($filteredCompanyNews, 0, 6);
            foreach ($filteredCompanyNews as $item) {
                if ($video['display']) {
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
            }} ?>

        </div>



    </div>
</section>


<?php
include('footer.php'); ?>