<?php
/*
 * Template Name: Projekt
 */
?>

<?php get_header(); ?>

<main>

    <section class="project">
        <div class="project-container">

            <div class="text-badges-container">
                <div class="project-text-container">
                    <h4><?php the_title(); ?></h4>

                    <?php
                    // Output the page content (written in the normal WordPress editor)
                    the_content();
                    ?>
                </div>

                <div class="gallery-badges">
                    <?php
                    // Show each badge only if it has been filled in
                    $badge_1 = get_field('badge_1');
                    $badge_2 = get_field('badge_2');
                    $badge_3 = get_field('badge_3');

                    if ($badge_1) : ?>
                        <span class="badge"><?php echo esc_html($badge_1); ?></span>
                    <?php endif; ?>

                    <?php if ($badge_2) : ?>
                        <span class="badge"><?php echo esc_html($badge_2); ?></span>
                    <?php endif; ?>

                    <?php if ($badge_3) : ?>
                        <span class="badge"><?php echo esc_html($badge_3); ?></span>
                    <?php endif; ?>
                </div>
            </div>

            <div class="project-img-container">
                <?php
                // Read the WordPress gallery shortcode saved on the page (if any)
                global $post;
                $gallery_ids = array();

                if (preg_match('/\[gallery ids="([^"]+)"/', $post->post_content, $matches)) {
                    $gallery_ids = explode(',', $matches[1]);
                }

                if (!empty($gallery_ids)) :
                    foreach ($gallery_ids as $image_id) :
                        $image_url = wp_get_attachment_image_url($image_id, 'large');
                        $image_title = get_the_title($image_id);
                        if (!$image_url) continue;
                ?>
                        <div class="gallery-item">
                            <img src="<?php echo esc_url($image_url); ?>" class="gallery-img">
                            <div class="gallery-overlay">
                                <span class="gallery-title"><?php echo esc_html($image_title); ?></span>
                            </div>
                        </div>
                <?php
                    endforeach;
                endif;
                ?>
            </div>

        </div>
    </section>

    <?php get_template_part('template-parts/contact'); ?>

    <button id="backToTop" class="start-btn" aria-label="Back to top">
        ↑
    </button>

</main>

<?php get_footer(); ?>