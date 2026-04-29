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
        <!-- <nav class="nav-container">
            <ul role="list" class="nav-grid">
                <li id="nav-img"> -->
        <a href="/" class="signature-fixed">
            <span>Alma</span>
            <span>Hammar</span>
        </a>

        <button class="hamburger-btn" aria-label="Open menu">
            <div class="hamb-line"></div>
            <div class="hamb-line"></div>
        </button>
        <!-- </li> -->

        <!-- <li id="links" class="nav-list"> -->
        <nav class="nav-top">
            <a href="#projects" class="nav-link">Projects</a>
            <a href="#contact" class="nav-link">Contact</a>
        </nav>
        <!--      </li>
                <li id="w-node-_76044d79-fc02-f18d-681f-a792281eef66-281eef23">
                    <div class="navigation__menu-btn">
                        <div data-w-id="76044d79-fc02-f18d-681f-a792281eef68" class="open-wrap-2"></div>
                        <div class="close-wrap">
                            <div class="navigation-text-2">Close</div>
                            <div class="close-btn"></div>
                        </div>
                </li>
            </ul> -->

        <!-- Hamburger-overlay -->
        <div class="main-navigation" aria-hidden="true">
            <button class="close-btn"><img src="<?php echo get_template_directory_uri(); ?>/assets/icons/close-svgrepo-com.svg"></button>
            <div class="nav-items-container">
                <a href="#projects" class="nav-link-overlay">Projects</a>
                <a href="#contact" class="nav-link-overlay">Contact</a>
            </div>
            <div class="navigation-footer">
                <a href="https://instagram.com/hammarensgraf_" class="nav-contact-link">@hammarensgraf_</a>
                <a href="mailto:almahammar@gmail.com" class="nav-contact-link">almahammar@gmail.com</a>
                <a href="https://linkedin.com/in/alma-hammar-0336011b4" class="nav-contact-link">LinkedIn</a>
            </div>
        </div>

        <!--     <div class="main-wrapper">
                <div class="main-navigation" style="display: flex; filter: blur(0px); transform: translate3d(0px, 0vh, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;">
                    <div class="nav-items-container">
                        <a href="#projects" class="nav-link-overlay">Projects</a>
                        <a href="#about" class="nav-link-overlay">About</a>
                        <a href="#contact" class="nav-link-overlay">Contact</a>
                    </div>

                    <div class="navigation-footer">
                        <a href="https://instagram.com/hammarensgraf_" class="nav-contact-link">@hammarensgraf_</a>
                        <a href="mailto:bu@spkt.se" class="nav-contact-link">almahammar@gmail.com</a>
                        <a href="linkedin.com/in/alma-hammar-0336011b4" class="nav-contact-link">LinkedIn</a>
                    </div>
                </div>
            </div>
        </nav> -->
    </header>