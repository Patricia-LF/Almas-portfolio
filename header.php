<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php print bloginfo('name'); ?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900">
    <link rel=" stylesheet" href="<?= get_stylesheet_directory_uri(); ?>/style.css">
    <link rel=" stylesheet" href="<?= get_stylesheet_directory_uri(); ?>/css/hero.css">
    <link rel=" stylesheet" href="<?= get_stylesheet_directory_uri(); ?>/css/project-cards.css">
    <link rel=" stylesheet" href="<?= get_stylesheet_directory_uri(); ?>/css/contact.css">
    <link rel=" stylesheet" href="<?= get_stylesheet_directory_uri(); ?>/css/projects.css">
    <link rel=" stylesheet" href="<?= get_stylesheet_directory_uri(); ?>/css/footer.css">

    <?php wp_head(); ?>
</head>

<body>
    <header>
        <a href="/" class="signature-fixed">
            <span>Alma</span>
            <span>Hammar</span>
        </a>

        <button class="hamburger-btn" aria-label="Open menu">
            <div class="hamb-line"></div>
            <div class="hamb-line"></div>
        </button>

        <nav class="nav-top">
            <?php if (is_front_page()): ?>
                <a href="#projects" class="nav-link">Projects</a>
            <?php else: ?>
                <a href="/" class="nav-link">Start</a>
            <?php endif; ?>
            <a href="#contact" class="nav-link">Contact</a>
        </nav>

        <!-- Hamburger-overlay -->
        <div class="main-navigation" aria-hidden="true">
            <button class="close-btn"><img src="<?php echo get_template_directory_uri(); ?>/assets/icons/close-svgrepo-com.svg"></button>
            <div class="nav-items-container">
                <?php if (is_front_page()): ?>
                    <a href="#projects" class="nav-link-overlay">Projects</a>
                <?php else: ?>
                    <a href="/" class="nav-link-overlay">Start</a>
                <?php endif; ?>
                <a href="#contact" class="nav-link-overlay">Contact</a>
            </div>
            <!--  <div class="navigation-footer">
                <a href="https://instagram.com/hammarensgraf_" class="nav-contact-link">@hammarensgraf_</a>
                <a href="mailto:almahammar@hotmail.com" class="nav-contact-link">almahammar@hotmail.com</a>
                <a href="https://linkedin.com/in/alma-hammar-0336011b4" class="nav-contact-link">LinkedIn</a>
            </div> -->
        </div>
    </header>