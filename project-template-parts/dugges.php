<?php
/*
 * Template Name: Dugges
 */
?>

<?php get_header(); ?>

<main>

    <section class="dugges">
        <div class="project-container">
            <div class="text-badges-container">
                <div class="project-text-container">
                    <h4>Dugges</h4>
                    <p class="project-text">
                        Fictional design for dugge’s newly released beer
                        (hazy ipa) Dolcitro!
                    </p>
                </div>
                <div class="gallery-badges">
                    <span class="badge">Print</span>
                    <span class="badge">Concept</span>
                </div>
            </div>

            <div class="project-img-container">
                <div class="gallery-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/dugges/haze ipa. 1080x1920png.png" class="gallery-img">
                    <div class="gallery-overlay">
                        <span class="gallery-title">Dugges ipa print</span>
                    </div>
                </div>

                <div class="gallery-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/dugges/dolcito mockup_.webp" class="gallery-img">
                    <div class="gallery-overlay">
                        <span class="gallery-title">Mockup</span>
                    </div>
                </div>

                <div class="gallery-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/dugges/hazy ipa, 1080X1080.png" class="gallery-img">
                    <div class="gallery-overlay">
                        <span class="gallery-title">Dugges ipa print</span>
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