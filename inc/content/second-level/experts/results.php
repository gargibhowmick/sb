<?php
    $view = 'list';
    if(isset($_GET['view'])) {
        $qView = $_GET['view'];
        if($qView=='list'||$qView=='grid') {
            $view = $qView;
        }
    }
?>
<article class="experts-wrapper">
    <?php
        $file = "experts/splash-header-inside.php";
        include($pathForContent . $content . $secLv . $file);
    ?>
    <?php
        $file = "experts/search-experts-overlay.php";
        include($pathForContent . $content . $secLv . $file);
    ?>
    <section class="clearfix list-experts">
        <div class="clearfix header-wrapper">
            <div class="no-pad-wrapper">
                <h2><a class="breadcrumb" href="experts" title="Home"><em class="fa fa-home icon"></em></a><em class="fa fa-angle-double-right separator icon"></em><a class="header-label" href="experts/results" class="label">Experts</a></h2>
                <a class="fa-search-before show-search-overlay" href="experts">Search<span class="hide-accessible-mobile"> Experts</span></a>
            </div>
        </div>
        <div class="faculty-list faculty-list-inside no-pad-wrapper clearfix inside-content">
            <p class="search-text initial-search-text clearfix"><a href="experts" class="show-search-overlay">Search</a> for an expert or<br /> browse the list below.</p>

            <div class="filter-wrapper border-box content clearfix sticky hidden">
                <input id="live-filter-search-<?=$view?>" type="text" class="rounded-input text-filter" placeholder="Filter experts" />
                <div class="filter-controls clearfix">
                    <div class="filter-status"></div>
                    <div class="clear-filter hide-accessible border-box">Clear search</div>
                <span class="search-directions">or <a class="show-search-overlay new-search" href="experts" data-lightbox-type="inline">perform new search</a></span>
                </div>
            </div>

            <?php if($view=='list') { ?>
                <p class="search-text clearfix ital hide-accessible-mobile-tablesaw">Hint: tap on the header for "Name" or "Department" to sort.</p>
            <?php } ?>

            <?php
                $file = "experts/{$view}.php";
                include($pathForContent . $content . $secLv . $file);
            ?>

            <p class="search-text clearfix ital hide-accessible-mobile-tablesaw">Can't find what you're looking for? Keep your search term short &amp; simple to yield the best results, <a href="experts/results" class="clear-search-trigger">browse all experts</a>, or contact the Stony Brook Newsroom for assistance at 631.632.6310</p>

            <div class="toggle-view">
                <a class="view-list<?php if($view=='list') { ?> active<?php } ?>" href="experts/results/?view=list"><em class="icon fa fa-list-ul"></em> List View</a>
                <a class="view-grid<?php if($view=='grid') { ?> active<?php } ?>" href="experts/results/?view=grid"><em class="icon fa fa-th"></em> Photo View</a>
            </div>
        </div>
        
    </section>
</article>