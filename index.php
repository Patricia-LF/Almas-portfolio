<?php get_header(); ?>

<main>

    <?php get_template_part('template-parts/hero'); ?>
    <?php get_template_part('template-parts/project-cards'); ?>
    <?php get_template_part('template-parts/contact'); ?>

    <button id="backToTop" class="start-btn" aria-label="Back to top">
        ↑
    </button>

</main>

<?php get_footer(); ?>