# Alma Hammar — Portfolio

A custom WordPress theme built as a portfolio site for graphic design student Alma Hammar. The site showcases her projects across print, illustration, motion design, and branding.

**Live site:** [hammargraphics.com](http://hammargraphics.com)

---

## Tech Stack

- **CMS:** WordPress (hosted on Strato)
- **Theme:** Custom PHP theme (no page builder)
- **Frontend:** Vanilla JS, CSS custom properties
- **Plugins:** Advanced Custom Fields (ACF) — free tier

---

## Project Structure

```
Portfolio/
├── assets/
│   ├── icons/            # SVG icons
│   ├── images/           # Project images per folder
│   └── motion/           # Video files (.mp4)
├── css/
│   ├── about.css
│   ├── contact.css
│   ├── footer.css
│   ├── hero.css
│   ├── project-cards.css
│   └── projects.css
├── fonts/                # Self-hosted web fonts (.woff2)
│   ├── BrittanySignatureRegular.woff2
│   ├── LemonTuesday.woff2
│   └── TAN MERINGUE.woff2
├── js/
│   ├── lightbox.js       # Image/video lightbox
│   ├── nav.js            # Navigation overlay toggle
│   └── top.js            # Back to top button
├── page-templates/
│   └── project-template.php  # Reusable template for new projects (uses ACF)
├── project-template-parts/   # Individual project page templates
│   ├── alkov.php
│   ├── binas.php
│   ├── dugges.php
│   ├── illustrations.php
│   ├── motion.php
│   ├── pitchfork.php
│   ├── potejto.php
│   ├── sjomat.php
│   ├── tapas.php
│   └── winebar-designs.php
├── template-parts/            # Reusable partials
│   ├── contact.php
│   ├── hero.php
│   └── project-cards.php
├── CV-260706.pdf
├── footer.php
├── functions.php
├── header.php
├── index.php
├── projects.php
├── projects-header.php
└── style.css             # Theme registration + @font-face declarations
```

---

## Features

- **Custom navigation** with a fixed signature/hamburger that stays on scroll, and a fullscreen overlay menu
- **Image lightbox** — click any gallery image to open it fullscreen; close with button or backdrop click
- **Video lightbox** — motion design page supports video thumbnails with hover titles, opening in a fullscreen lightbox on click
- **Hover overlays** — gallery images show title on hover with `pointer-events: none` so click-through to lightbox is preserved
- **Wiggle animation** — hero image plays a CSS keyframe animation on page load
- **Back to top button** — appears on project pages
- **CV download** — linked from the hero section
- **Reusable project template** — new projects can be added via WordPress admin using the "Projekt" page template, with ACF fields for badges and a native WordPress gallery for images

---

## Local Development

The project was developed using **WordPress Studio** (by Automattic) on Windows.

To run locally:

1. Install [WordPress Studio](https://developer.wordpress.com/studio/)
2. Create a new site and copy the `Portfolio` theme folder into `wp-content/themes/`
3. Activate the theme under **Appearance → Themes** in wp-admin
4. Install the **Advanced Custom Fields** plugin (free) and set up a field group named "Projektdetaljer" with text fields `badge_1`, `badge_2`, `badge_3`, shown on pages using the "Projekt" template

---

## Deployment

The site is hosted on **Strato** using their WordPress & Co. managed installation.

For future deployments or migrations:

- Export the database via phpMyAdmin (Custom export, with DROP TABLE and TRUNCATE options enabled, excluding `wp_options`)
- Replace the table prefix in the SQL file to match the target installation's prefix (e.g. `wp_` → `pyj4_`)
- Replace collation `utf8mb4_0900_ai_ci` → `utf8mb4_unicode_ci` if the target server runs an older MySQL/MariaDB version
- Remove WordPress default posts (ID 1, 2, 3) from the `INSERT INTO wp_posts` statement to avoid SQL syntax errors from unescaped HTML
- Upload the theme folder via SFTP to `wp-content/themes/`
- Update `siteurl` and `home` in the `wp_options` table after import
- Run **Settings → Permalinks → Save Changes** in wp-admin after import to regenerate rewrite rules
- Add `_wp_page_template` entries to `wp_postmeta` for each project page, pointing to the correct file in `project-template-parts/`

---

## Adding a New Project

1. In wp-admin, go to **Pages → Add New**
2. Set the page template to **"Projekt"** under Page Attributes
3. Write the project description in the editor
4. Add a WordPress gallery block with the project images (each image's Title field in the media library becomes the hover label)
5. Fill in the ACF badge fields (e.g. "Print", "Concept")
6. Publish the page
7. To feature the project on the home page, add it manually to `template-parts/project-cards.php`

---

## License

Copyright © 2026 Alma Hammar. All Rights Reserved.

The design, images, and visual content in this repository are the intellectual property of Alma Hammar and may not be reproduced, distributed, or used without explicit written permission.

Theme code developed by [Patricia Loayza Frykberg](https://patriciafrykberg.se/portfolio).
