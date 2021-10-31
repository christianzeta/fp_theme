<?php
    get_header();
?>

<header id="main-header">
    <h1><?php the_field('change_page_title') ?></h1>
</header>
<main id="content-area">
    <section id="main-content">
        <div id="main-content-image">
            <img src="<?php the_field('main_image'); ?>" width="100%" height="100%" />
        </div>
        <div id="main-content-text">
            <p><?php the_field('main_text') ?></p>
        </div>
    </section>
</main>
<footer id="main-footer">

</footer>

<?php
    get_footer();
?>

