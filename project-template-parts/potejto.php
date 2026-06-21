<?php
/*
 * Template Name: Potejto
 */
?>

<?php get_header(); ?>

<main>

    <section class="potejto">
        <div class="project-container">
            <div class="text-badges-container">
                <div class="project-text-container">
                    <h4>Potejto</h4>
                    <p class="project-text">
                        During my graphic design course, I was
                        assigned the country of England and was
                        supposed to create a restaurant concept
                        based on it, for a fictional restaurant that
                        was to be opened in Gothenburg.
                    </p>
                </div>
                <div class="gallery-badges">
                    <span class="badge">Print</span>
                    <span class="badge">Concept</span>
                </div>
            </div>

            <div class="project-img-container">
                <div class="gallery-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/potejto/blue.png" class="gallery-img">
                    <div class="gallery-overlay">
                        <span class="gallery-title">Potejto print</span>
                    </div>
                </div>

                <div class="gallery-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/potejto/brouchur.webp" class="gallery-img">
                    <div class="gallery-overlay">
                        <span class="gallery-title">Brochure</span>
                    </div>
                </div>

                <div class="gallery-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/potejto/coaster.webp" class="gallery-img">
                    <div class="gallery-overlay">
                        <span class="gallery-title">Coaster</span>
                    </div>
                </div>

                <div class="gallery-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/potejto/menu.png" class="gallery-img">
                    <div class="gallery-overlay">
                        <span class="gallery-title">Menu</span>
                    </div>
                </div>

                <div class="gallery-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/potejto/merch_keps_potejto.webp" class="gallery-img">
                    <div class="gallery-overlay">
                        <span class="gallery-title">Cap</span>
                    </div>
                </div>

                <div class="gallery-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/potejto/potejto-front&back.webp" class="gallery-img">
                    <div class="gallery-overlay">
                        <span class="gallery-title">Brochure</span>
                    </div>
                </div>

                <div class="gallery-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/potejto/print-potejto.webp" class="gallery-img">
                    <div class="gallery-overlay">
                        <span class="gallery-title">Potejto print</span>
                    </div>
                </div>

                <div class="gallery-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/potejto/print-transparant.webp" class="gallery-img">
                    <div class="gallery-overlay">
                        <span class="gallery-title">Transparent print</span>
                    </div>
                </div>

                <div class="gallery-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/potejto/Takeaway-bag.webp" class="gallery-img">
                    <div class="gallery-overlay">
                        <span class="gallery-title">Takeaway bag</span>
                    </div>
                </div>

                <div class="gallery-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/potejto/tshrt_blue.webp" class="gallery-img">
                    <div class="gallery-overlay">
                        <span class="gallery-title">T-shirt</span>
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