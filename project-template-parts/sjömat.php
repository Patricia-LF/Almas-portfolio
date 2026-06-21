<?php
/*
 * Template Name: Sjömat
 */
?>
<?php get_header(); ?>

<main>

    <section class="sjomat">
        <div class="project-container">
            <div class="text-badges-container">
                <div class="project-text-container">
                    <h4>Sjömat X pappas delikatesser</h4>
                    <p class="project-text">
                        In collaboration with Sjömat and pappas delikatesser. Two Swedish companies in the fish trade I have developed suggestions for cover designs for their catalog for 2026.
                        I was assigned a spread focusing on the family business Silleriet. In an interview with Sofie and Örjan, their most important points in their business are highlighted. I have then designed a spread to promote their company.
                    </p>
                </div>
                <div class="gallery-badges">
                    <span class="badge">Print</span>
                    <span class="badge">Spread design</span>
                </div>
            </div>

            <div class="project-img-container">
                <div class="gallery-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/sjomat/Sjomat_Katalog1.webp" class="gallery-img">
                    <div class="gallery-overlay">
                        <span class="gallery-title">Catalog with fish print</span>
                    </div>
                </div>
                <div class="gallery-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/sjomat/Sjomat_Katalog2.webp" class="gallery-img">
                    <div class="gallery-overlay">
                        <span class="gallery-title">Catalog contents</span>
                    </div>
                </div>
                <div class="gallery-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/sjomat/Sjomat_Katalog3.webp" class="gallery-img">
                    <div class="gallery-overlay">
                        <span class="gallery-title">Catalog recipies</span>
                    </div>
                </div>
                <div class="gallery-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/sjomat/Mockup katalog_sjomat4.webp" class="gallery-img">
                    <div class="gallery-overlay">
                        <span class="gallery-title">Mockup catalog</span>
                    </div>
                </div>
                <div class="gallery-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/sjomat/Fisk_RED5.png" class="gallery-img">
                    <div class="gallery-overlay">
                        <span class="gallery-title">Fish print red</span>
                    </div>
                </div>
                <div class="gallery-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/sjomat/Fisk6.png" class="gallery-img">
                    <div class="gallery-overlay">
                        <span class="gallery-title">Fish print black</span>
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