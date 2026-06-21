<?php
/*
 * Template Name: Motion design
 */
?>

<?php get_header(); ?>

<main>

    <section class="motion">
        <div class="motion-container">
            <div class="motion-text-container">
                <h4>Motion design</h4>
                <p class="motion-text">
                    Here we have two animations. A coffee machine
                    and the dachshund Sture on a walk.
                </p>
            </div>

            <div class="motion-img-container">
                <div class="gallery-item" data-video="<?php echo get_template_directory_uri(); ?>/assets/motion/coffee.mp4">
                    <video src="<?php echo get_template_directory_uri(); ?>/assets/motion/Coffee.mp4" class="gallery-thumb-video" muted preload="metadata"></video>
                    <div class="gallery-overlay">
                        <span class="gallery-title">Coffee machine</span>
                    </div>
                </div>

                <div class="gallery-item" data-video="<?php echo get_template_directory_uri(); ?>/assets/motion/dog.mp4">
                    <video src="<?php echo get_template_directory_uri(); ?>/assets/motion/dog.mp4" class="gallery-thumb-video" muted preload="metadata"></video>
                    <div class="gallery-overlay">
                        <span class="gallery-title">Sture</span>
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