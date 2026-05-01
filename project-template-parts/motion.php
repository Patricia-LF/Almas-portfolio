<?php
/*
 * Template Name: Motion design
 */
?>

<?php get_header(); ?>

<main>

    <section class="motion">
        <div class="motion-container">
            <div class="potejto-text-container">
                <h4>Motion design</h4>
                <p class="motion-text">
                    Here we have two animations. A coffee machine
                    and the dachshund Sture on a walk.
                </p>
            </div>

            <div class="motion-img-container">
                <div class="gallery-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/coffee.jpg" class="gallery-img">
                    <div class="gallery-overlay">
                        <span class="gallery-title">Katalog 1</span>
                        <div class="gallery-badges">
                            <span class="badge">Print</span>
                            <span class="badge">Fiktivt</span>
                        </div>
                    </div>
                </div>

                <div class="gallery-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/dog.jpg" class="gallery-img">
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

    <?php get_template_part('template-parts/contact'); ?>

</main>

<?php get_footer(); ?>