<?php
$GLOBALS['title'] = "Newhydrogen";
$GLOBALS['desc'] = "";
$GLOBALS['keywords'] = "";
$news = include "./data/news-data.php";
include('header.php');

if (isset($_GET['id'])) {
    $newsId = $_GET['id'];
    $item = array_filter($news, function ($item) use ($newsId) {
        return $item['id'] == $newsId;
    });
    $item = reset($item);
}

?>


<section class="news-detail">
    <div class="container">
        <?php if ($item) : ?>
            <h1><?php echo $item['title']; ?></h1>
            <div class="news-detail-info">
                <?php
                foreach ($item['description'] as $paragraph) {
                    echo "
                        <div class=\"newsItem\">
                            {$paragraph[0]}
                        </div>";
                } ?>

<?php if ($item['biosolar']) : ?>
                <div class="news-about">
                    <h4>About BioSolar, Inc.</h4>
                    <p>BioSolar is developing breakthrough technologies to increase the storage capacity, lower the cost and extend the life of lithium-ion batteries for electric vehicles. The need for such breakthroughs is critical to meet the expected demand of the rapidly growing global electric vehicle battery market, which is forecast to exceed $90 billion by 2025. A lithium-ion battery contains two major parts, a lithium-filled cathode and a lithium-receiving anode, that function together as the positive and negative sides of the battery. BioSolar is developing innovative technologies that will enable the use of inexpensive silicon as the anode material to create next generation high energy and high-power lithium-ion batteries for electric vehicles. Founded with the vision of developing breakthrough energy technologies, BioSolar's previous successes include the world's first bio-based backsheet for use in solar panels. <br><br> To learn more about BioSolar, please visit our website at <a href="https://www.biosolar.com" target="_blank" rel="noopener noreferrer">https://www.biosolar.com</a>.</p>
                </div>
                <?php endif; ?>
                <div class="news-about">
                    <h4>About Newhydrogen, Inc.</h4>
                    <p>NewHydrogen is developing a breakthrough technology to produce low-cost green hydrogen using renewable energy. Hydrogen is the cleanest and most abundant fuel in the universe. It is zero-emission and only produces water vapor when used. Unfortunately, hydrogen does not exist in its pure form on Earth so it must be extracted from a source that contains hydrogen. For centuries, scientists have known how to split water into hydrogen and oxygen using a simple and elegant device called an electrolyzer. However, electrolyzers are still very expensive. NewHydrogen plans on developing several component innovations to enable the next generation of low cost electrolyzers. The Company’s initial focus is on replacing and reducing expensive rare earth materials, to help usher in the green hydrogen economy that Goldman Sachs estimated to have a future market value of $12 trillion.</p>
                </div>
                <div class="news-about">
                    <h4>Forward-Looking Statements</h4>
                    <p>Matters discussed in this press release contain forward-looking statements within the meaning of the Private Securities Litigation Reform Act of 1995. When used in this press release, the words "anticipate," "believe," "estimate," "may," "intend," "expect" and similar expressions identify such forward-looking statements. Actual results, performance or achievements could differ materially from those contemplated, expressed or implied by the forward-looking statements contained herein. These forward-looking statements are based largely on the expectations of the Company and are subject to a number of risks and uncertainties. These include, but are not limited to, risks and uncertainties associated with: the impact of economic, competitive and other factors affecting the Company and its operations, markets, the impact on the national and local economies resulting from terrorist actions, the impact of public health epidemics on the global economy and other factors detailed in reports filed by the Company with the United States Securities and Exchange Commission. <br /><br />

                        Any forward-looking statement made by us in this press release is based only on information currently available to us and speaks only as of the date on which it is made. We undertake no obligation to publicly update any forward-looking statement, whether written or oral, that may be made from time to time, whether as a result of new information, future developments or otherwise.</p>
                </div>
                <div class="news-presscontact">
                    <p> Investor Relations Contact:</p>

                    <span>NewHydrogen, Inc.</span>
                    <a href="mailto:ir@newhydrogen.com"> ir@newhydrogen.com
                    </a>
                </div>
            </div>
        <?php endif; ?>
    </div>
</section>


<?php
include('footer.php'); ?>