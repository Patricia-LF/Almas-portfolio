<?php
/*
 * Template Name: Illustrations
 */
?>

<?php get_header(); ?>

<main>

    <section id="illustrations">
        <div class="project-container">
            <div class="project-text-container">
                <h4>Illustrations</h4>
                <p class="project-text">A selection of different illustrations</p>
            </div>

            <div class="project-img-container">
                <div class="gallery-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/illustrations/1.POWerprint.webp" class="gallery-img">
                    <div class="gallery-overlay">
                        <span class="gallery-title">POWerprint</span>
                    </div>
                </div>

                <div class="gallery-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/illustrations/2.swish.png" class="gallery-img">
                    <div class="gallery-overlay">
                        <span class="gallery-title">Swish</span>
                    </div>
                </div>

                <div class="gallery-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/illustrations/3.KONSERT-blue.png" class="gallery-img">
                    <div class="gallery-overlay">
                        <span class="gallery-title">Consert flyer - blue</span>
                    </div>
                </div>

                <div class="gallery-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/illustrations/4.KONSERT-pink.png" class="gallery-img">
                    <div class="gallery-overlay">
                        <span class="gallery-title">Consert flyer - pink</span>
                    </div>
                </div>

                <div class="gallery-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/illustrations/5.mamma.webp" class="gallery-img">
                    <div class="gallery-overlay">
                        <span class="gallery-title">Mother</span>
                    </div>
                </div>

                <div class="gallery-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/illustrations/6.fisk.webp" class="gallery-img">
                    <div class="gallery-overlay">
                        <span class="gallery-title">Fish</span>
                    </div>
                </div>

                <div class="gallery-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/illustrations/7.Fisk-mönster.png" class="gallery-img">
                    <div class="gallery-overlay">
                        <span class="gallery-title">Fish patterns</span>
                    </div>
                </div>

                <div class="gallery-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/illustrations/8.kaffemaskin.png" class="gallery-img">
                    <div class="gallery-overlay">
                        <span class="gallery-title">Coffee machine</span>
                    </div>
                </div>

                <div class="gallery-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/illustrations/9.tyge-affish.webp" class="gallery-img">
                    <div class="gallery-overlay">
                        <span class="gallery-title">Tyge poster</span>
                    </div>
                </div>

                <div class="gallery-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/illustrations/10.Mormors-pannkakor.webp" class="gallery-img">
                    <div class="gallery-overlay">
                        <span class="gallery-title">Mormors pannkakor</span>
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