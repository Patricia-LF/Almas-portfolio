<?php
/*
 * Template Name: Winebar
 */
?>
<?php get_header(); ?>

<main>
    <section class="winebar">
        <div class="winebar-container">
            <div class="text-badges-container">
                <div class="winebar-text-container">
                    <h4>Winebar designs</h4>
                    <p class="winebar-text">
                        Here is a collection of posters, for Instagram and
                        prints for different wine bars in Stockholm.
                    </p>
                </div>
                <div class="gallery-badges">
                    <span class="badge">Posters</span>
                    <span class="badge">Concepts</span>
                </div>
            </div>

            <div class="winebar-img-container">
                <div class="gallery-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/winebar-designs/1AFFISCH vinioni.webp" class="gallery-img">
                    <div class="gallery-overlay">
                        <span class="gallery-title">Vinioni poster</span>
                    </div>
                </div>

                <div class="gallery-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/winebar-designs/2vinino-natten.png" class="gallery-img">
                    <div class="gallery-overlay">
                        <span class="gallery-title">Vinioni night poster</span>
                    </div>
                </div>

                <div class="gallery-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/winebar-designs/3ruths.png" class="gallery-img">
                    <div class="gallery-overlay">
                        <span class="gallery-title">Ruths</span>
                    </div>
                </div>

                <div class="gallery-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/winebar-designs/4tygetåg.jpg" class="gallery-img">
                    <div class="gallery-overlay">
                        <span class="gallery-title">Tyge train postcard</span>
                    </div>
                </div>

                <div class="gallery-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/winebar-designs/5tygebak.jpg" class="gallery-img">
                    <div class="gallery-overlay">
                        <span class="gallery-title">Tyge train postcard</span>
                    </div>
                </div>

                <div class="gallery-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/winebar-designs/6tyge.jpg" class="gallery-img">
                    <div class="gallery-overlay">
                        <span class="gallery-title">Tyge postcard</span>
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