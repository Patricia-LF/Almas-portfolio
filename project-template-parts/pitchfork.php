<?php
/*
 * Template Name: Pitchfork
 */
?>
<?php get_header(); ?>

<main>

    <section class="pitchfork">
        <div class="project-container">
            <div class="project-text-container">
                <h4>Pitchfork</h4>
                <p class="project-text">
                    Design proposal if Pitchfork had printed a magazine in 2026. Inspired by the 90s and punk.
                </p>
            </div>

            <div class="project-img-container">
                <div class="gallery-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pitchfork/pitchfork.jpg" class="gallery-img">
                    <div class="gallery-overlay">
                        <span class="gallery-title">Magazine front page</span>
                    </div>
                </div>

                <div class="gallery-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pitchfork/pitchfork2.webp" class="gallery-img">
                    <div class="gallery-overlay">
                        <span class="gallery-title">Magazine spread</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php get_template_part('template-parts/contact'); ?>

    <button id="backToTop" class="start-btn" aria-label="Back to top">
        ↑
    </button>

</main>

<?php get_footer(); ?>