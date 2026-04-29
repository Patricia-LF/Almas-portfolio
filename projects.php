<?php
/*
 * Template Name: Projects
 */
?>

<?php get_header(); ?>

<main>
    <h3>Projects</h3>
    <?php get_template_part('project-template-parts/illustrations'); ?>
    <?php get_template_part('project-template-parts/alkov'); ?>
    <?php get_template_part('project-template-parts/sjömat'); ?>
    <?php get_template_part('project-template-parts/winebar-designs'); ?>
    <?php get_template_part('project-template-parts/tapas'); ?>

    <?php get_template_part('project-template-parts/dugges'); ?>
    <?php get_template_part('project-template-parts/pitchfork'); ?>
    <?php get_template_part('project-template-parts/potejto'); ?>
    <?php get_template_part('project-template-parts/binas'); ?>
    <?php get_template_part('project-template-parts/motion'); ?>
</main>

<?php get_footer(); ?>