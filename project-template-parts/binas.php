<?php
/*
 * Template Name: Binas historia
 */
?>

<?php get_header(); ?>


<section class="bin">
    <div class="bin-container">
        <div class="bin-text-container">
            <h4>Binas historia</h4>
            <p class="bin-text">
                I have placed and set the text for the story of the
                bees, as well as an alternative cover. (fictitious
                design)
            </p>
        </div>

        <div class="bin-img-container">
            <div class="gallery-item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/binas historia/front-binashistoria.png" class="gallery-img">
                <div class="gallery-overlay">
                    <span class="gallery-title">Book cover front</span>
                    <div class="gallery-badges">
                        <span class="badge">Print</span>
                        <span class="badge">Concept</span>
                    </div>
                </div>
            </div>

            <div class="gallery-item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/binas historia/back-binashistoria.png" class="gallery-img">
                <div class="gallery-overlay">
                    <span class="gallery-title">Book cover back</span>
                    <div class="gallery-badges">
                        <span class="badge">Print</span>
                        <span class="badge">Concept</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>