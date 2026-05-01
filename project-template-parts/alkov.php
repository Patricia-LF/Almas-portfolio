<?php
/*
 * Template Name: Alkov
 */
?>

<?php get_header(); ?>

<main>

    <section class="alkov">
        <div class="alkov-container">
            <div class="alkov-text-container">
                <h4>Alkov</h4>
                <p class="alkov-text">
                    During this project I have created a graphic
                    profile for Bar Alkov at Järntorget 6, Gothenburg.</p>

                <p class="alkov-text">The project includes creating a menu,
                    producing merch, some fun for Instagram and
                    the logo.</p>

                <p class="alkov-text">Check them out on instagram</p>
                <p class="alkov-text">@baralkov</p>
            </div>

            <div class="alkov-img-container">
                <div class="gallery-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/alkov/alkov.png" class="gallery-img">
                    <div class="gallery-overlay">
                        <span class="gallery-title">Katalog 1</span>
                        <div class="gallery-badges">
                            <span class="badge">Print</span>
                            <span class="badge">Fiktivt</span>
                        </div>
                    </div>
                </div>

                <div class="gallery-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/alkov/Opening.png" class="gallery-img">
                    <div class="gallery-overlay">
                        <span class="gallery-title">Katalog 1</span>
                        <div class="gallery-badges">
                            <span class="badge">Print</span>
                            <span class="badge">Fiktivt</span>
                        </div>
                    </div>
                </div>

                <div class="gallery-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/alkov/alkov-window.jpg" class="gallery-img">
                    <div class="gallery-overlay">
                        <span class="gallery-title">Katalog 1</span>
                        <div class="gallery-badges">
                            <span class="badge">Print</span>
                            <span class="badge">Fiktivt</span>
                        </div>
                    </div>
                </div>

                <div class="gallery-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/alkov/resturant-front.png" class="gallery-img">
                    <div class="gallery-overlay">
                        <span class="gallery-title">Katalog 1</span>
                        <div class="gallery-badges">
                            <span class="badge">Print</span>
                            <span class="badge">Fiktivt</span>
                        </div>
                    </div>
                </div>

                <div class="gallery-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/alkov/t-shirt.png" class="gallery-img">
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