<?php
/*
 * Template Name: Tapas bar deli
 */
?>

<?php get_header(); ?>

<section class="tapas">
    <div class="tapas-container">
        <div class="tapas-text-container">
            <h4>Tapas bar deli</h4>
            <p class="tapas-text">
                Tapas bar deli, a restaurant located in
                Umeå, Sweden.
            </p>
            <p class="tapas-text">In August 2025 they celebrated 20 years of being
                open.
            </p>
            <p class="tapas-text">I designed a poster, wich they also used
                for social media. I also created illustrations and
                patterns for printed t-shirts that were used by the
                staff.
            </p>
            <p class="tapas-text">instagram: @tapasbardeli</p>
        </div>

        <div class="tapas-img-container">
            <div class="gallery-item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/tapas/tapas.png" class="gallery-img">
                <div class="gallery-overlay">
                    <span class="gallery-title">Katalog 1</span>
                    <div class="gallery-badges">
                        <span class="badge">Print</span>
                        <span class="badge">Fiktivt</span>
                    </div>
                </div>
            </div>

            <div class="gallery-item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/tapas/tapas-affish-baksida.png" class="gallery-img">
                <div class="gallery-overlay">
                    <span class="gallery-title">Katalog 1</span>
                    <div class="gallery-badges">
                        <span class="badge">Print</span>
                        <span class="badge">Fiktivt</span>
                    </div>
                </div>
            </div>

            <div class="gallery-item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/tapas/t-shirt-blue.png" class="gallery-img">
                <div class="gallery-overlay">
                    <span class="gallery-title">Katalog 1</span>
                    <div class="gallery-badges">
                        <span class="badge">Print</span>
                        <span class="badge">Fiktivt</span>
                    </div>
                </div>
            </div>

            <div class="gallery-item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/tapas/t-shirt-white.png" class="gallery-img">
                <div class="gallery-overlay">
                    <span class="gallery-title">Katalog 1</span>
                    <div class="gallery-badges">
                        <span class="badge">Print</span>
                        <span class="badge">Fiktivt</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>