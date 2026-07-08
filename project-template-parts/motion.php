<?php
/*
 * Template Name: Motion design
 */
?>

<?php get_header(); ?>

<main>

    <section class="motion">
        <div class="project-container">
            <div class="project-text-container">
                <h4>Motion design</h4>
                <p class="project-text">
                    Here we have two animations. A coffee machine
                    and the dachshund Sture on a walk.
                </p>
            </div>

            <div class="project-img-container">
                <div class="gallery-item" data-video="<?php echo get_template_directory_uri(); ?>/assets/motion/coffee.mp4">

                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/motion-design/coffee.png" alt="Coffee machine">

                    <div class="gallery-overlay">
                        <span class="gallery-title">Coffee machine</span>
                    </div>
                </div>

                <div class="gallery-item" data-video="<?php echo get_template_directory_uri(); ?>/assets/motion/dog.mp4">

                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/motion-design/dog.png" alt="Sture the dog">

                    <div class="gallery-overlay">
                        <span class="gallery-title">Sture the dog</span>
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