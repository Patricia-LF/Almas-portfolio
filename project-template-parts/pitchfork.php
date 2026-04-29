<?php
/*
 * Template Name: Pitchfork
 */
?>
<?php get_header(); ?>

<section class="pitchfork">
    <div class="pitchfork-container">
        <div class="pitchfork-text-container">
            <h4>Pitchfork</h4>
            <p class="pitchfork-text">
                Design proposal if Pitchfork had printed a magazine in 2026. Inspired by the 90s and punk.
            </p>
        </div>

        <div class="pitchfork-img-container">
            <div class="gallery-item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pitchfork/pitchfork.png" class="gallery-img">
                <div class="gallery-overlay">
                    <span class="gallery-title">Katalog 1</span>
                    <div class="gallery-badges">
                        <span class="badge">Print</span>
                        <span class="badge">Fiktivt</span>
                    </div>
                </div>
            </div>

            <div class="gallery-item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pitchfork/pitchfork2.png" class="gallery-img">
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