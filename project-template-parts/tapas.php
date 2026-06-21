<?php
/*
 * Template Name: Tapas bar deli
 */
?>

<?php get_header(); ?>

<main>

    <section class="tapas">
        <div class="project-container">
            <div class="text-badges-container">
                <div class="project-text-container">
                    <h4>Tapas bar deli</h4>
                    <p class="project-text">
                        Tapas bar deli, a restaurant located in
                        Umeå, Sweden.
                    </p>
                    <p class="project-text">In August 2025 they celebrated 20 years of being
                        open.
                    </p>
                    <p class="project-text">I designed a poster, wich they also used
                        for social media. I also created illustrations and
                        patterns for printed t-shirts that were used by the
                        staff.
                    </p>
                    <p class="project-text">instagram: @tapasbardeli</p>
                </div>
                <div class="gallery-badges">
                    <span class="badge">Poster</span>
                    <span class="badge">Illustration</span>
                    <span class="badge">Merchandise</span>
                </div>
            </div>

            <div class="project-img-container">
                <div class="gallery-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/tapas/tapas.png" class="gallery-img">
                    <div class="gallery-overlay">
                        <span class="gallery-title">Illustration</span>
                    </div>
                </div>

                <div class="gallery-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/tapas/tapas-affish-baksida.png" class="gallery-img">
                    <div class="gallery-overlay">
                        <span class="gallery-title">Poster</span>
                    </div>
                </div>

                <div class="gallery-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/tapas/t-shirt-blue.png" class="gallery-img">
                    <div class="gallery-overlay">
                        <span class="gallery-title">T-shirt back</span>
                    </div>
                </div>

                <div class="gallery-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/tapas/t-shirt-white.png" class="gallery-img">
                    <div class="gallery-overlay">
                        <span class="gallery-title">T-shirt front</span>
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