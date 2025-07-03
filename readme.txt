=== MyCustomTheme ===
Contributors: Jules
Requires at least: 5.0
Tested up to: 6.4
Requires PHP: 7.4
License: GNU General Public License v2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
Tags: custom-header, custom-logo, custom-menu, featured-images, footer-widgets, blog, one-column, responsive-layout, theme-options, accessibility-ready, translation-ready

MyCustomTheme - A versatile, modern, and lightweight WordPress theme designed for blogs and simple websites.

== Description ==

MyCustomTheme is a custom-built WordPress theme focusing on clarity, ease of use, and modern web standards. It provides a clean foundation for bloggers and small website owners who need a professional online presence. The theme features a responsive design, ensuring your content looks great on all devices. Key highlights include a customizable header with logo or site title options, a prominent display of recent posts on the homepage using a card layout, and clear templates for single posts and pages. It leverages the WordPress Customizer for straightforward modifications.

== Installation ==

1.  Download the `MyCustomTheme.zip` file from [Source - if applicable, otherwise remove this line].
2.  In your WordPress admin panel, go to Appearance > Themes.
3.  Click the "Add New" button.
4.  Click the "Upload Theme" button.
5.  Choose the `MyCustomTheme.zip` file you downloaded and click "Install Now".
6.  Once installed, click "Activate".

Alternatively, you can install via FTP:
1.  Unzip the `MyCustomTheme.zip` file.
2.  Upload the extracted `mycustomtheme` folder to your WordPress installation's `wp-content/themes/` directory.
3.  In your WordPress admin panel, go to Appearance > Themes.
4.  Find MyCustomTheme and click "Activate".

== How the Theme Works ==

MyCustomTheme follows the standard WordPress template hierarchy to display your content.
- `functions.php` is used to initialize theme features (like menus, widgets, custom logo), enqueue stylesheets and scripts, and manage other theme-specific functionalities.
- The theme uses a combination of top-level template files (e.g., `index.php`, `page.php`, `single.php`) and modular template parts (located in the `template-parts/` directory) to build pages. This approach promotes code reusability and organization.
- The homepage is controlled by `front-page.php`, which is specifically designed to showcase recent content.
- CSS custom properties are used for colors, typography, and spacing, making visual customizations more accessible via child themes or custom CSS.

== Theme Structure ==

Here's an overview of key files and directories within MyCustomTheme:

*   `style.css`: Contains the main theme header information required by WordPress. Actual styling rules are primarily in `assets/css/main.css`.
*   `assets/css/main.css`: The primary stylesheet containing all visual styling for the theme.
*   `assets/js/navigation.js`: JavaScript file for handling the responsive mobile menu toggle and accessibility features.
*   `functions.php`: Core file for theme setup, enabling features, registering navigation menus and widget areas, and enqueuing scripts and styles.
*   `header.php`: Defines the `<head>` section of the site and the site header, including the site title/logo and primary navigation menu.
*   `footer.php`: Defines the site footer, including the footer widget area and copyright information.
*   `front-page.php`: Template for the site's front page. Displays a custom layout, typically featuring the 3 most recent posts in a card format.
*   `index.php`: The default template for blog post listings (archives, categories, main blog page if no static front page is set).
*   `single.php`: Template for displaying a single blog post, including full content, metadata, and comments.
*   `page.php`: Template for displaying individual static WordPress Pages.
*   `template-parts/`: This directory contains reusable sections of templates.
    *   `content-post.php`: Used for displaying individual post summaries in loops (e.g., on the blog index and the front page cards). Includes title, featured image, excerpt, and "Read More" link.
    *   `content-home.php`: Contains the specific WordPress query and loop for displaying the 3 recent posts on the `front-page.php`.
    *   `content-none.php`: Displays a message when no posts are found for a given query.
*   `inc/`: This directory contains placeholder files for potential modular PHP functions like custom headers, template tags, etc. (Currently basic structure from Underscores).
*   `readme.txt`: This file, providing information about the theme.

== Features ==

*   **Responsive Design:** MyCustomTheme is built to be fully responsive, ensuring your website looks and functions well on desktops, tablets, and mobile phones. Includes a toggle-based mobile navigation menu.
*   **Custom Logo:** Easily upload and display your brand's logo via the WordPress Customizer (Appearance > Customize > Site Identity). The logo display is constrained to a maximum width of 180px and maximum height of 60px to maintain header consistency.
*   **Customizable Navigation Menu:** Supports one primary navigation menu, which can be managed through Appearance > Menus.
*   **Featured Images:** Enables and encourages the use of featured images for posts and pages. These are displayed prominently in post listings, single posts, and on the homepage cards.
*   **Footer Widgets:** Includes one widget area in the footer (`Footer`). You can add various widgets, including navigation menus, via Appearance > Widgets. Footer navigation menus are styled for a clean, vertical list appearance.
*   **Homepage Recent Posts Cards:** The front page features a dynamic section displaying your 3 most recent blog posts in an attractive, responsive card layout. Each card includes the post's featured image, title, excerpt, and a "Read More" link.
*   **Basic & Simple Templates:** Provides clean, well-structured, and easy-to-understand templates for static pages (`page.php`), the blog index (`index.php`), and single posts (`single.php`).
*   **Modern CSS:** Utilizes modern CSS techniques, including Flexbox and Grid for layout, and CSS custom properties for colors, typography, and spacing. This makes the theme easier to customize and maintain.
*   **Accessibility Ready (Basic):** Incorporates basic accessibility features like skip links, ARIA attributes for the mobile menu, and semantic HTML.
*   **Translation Ready:** Basic setup for theme translation is included.

== Customization Guide ==

MyCustomTheme leverages the WordPress Customizer for most of its settings, allowing you to preview changes live.

1.  **Accessing the Customizer:**
    *   In your WordPress admin panel, go to **Appearance > Customize**.

2.  **Site Identity:**
    *   **Logo:** Upload your custom logo image. It will be displayed in the header. If no logo is uploaded, the Site Title will be shown.
    *   **Site Title:** Set the main title for your website.
    *   **Tagline:** Set a short tagline or description for your site.
    *   **Site Icon (Favicon):** Upload an image to be used as your site's favicon.

3.  **Menus (Appearance > Menus & Customizer > Menus):**
    *   **Creating a Menu:** Go to Appearance > Menus. Click "create a new menu", give it a name (e.g., "Main Menu"), and add items (pages, posts, custom links, categories).
    *   **Assigning the Menu:** After creating your menu, under "Menu Settings" > "Display location", check the box for "Primary Menu". Save the menu. You can also manage menu locations in the Customizer under "Menus" > "View All Locations".

4.  **Widgets (Appearance > Widgets & Customizer > Widgets):**
    *   MyCustomTheme provides one widget area: **Footer**.
    *   Drag and drop available widgets (e.g., Navigation Menu, Text, Categories, Recent Posts) into the "Footer" widget area.
    *   Configure each widget as needed (e.g., select a menu for the Navigation Menu widget, add content for the Text widget).

== Changelog ==

= 1.0.0 =
* Initial release of MyCustomTheme.
* Features include responsive design, custom logo, primary navigation, footer widgets, homepage cards for recent posts, and basic page/post templates.
* Modern CSS with custom properties.
* Basic accessibility and translation readiness.

== Frequently Asked Questions ==

*   (This section can be populated later if common questions arise)

---
Thank you for using MyCustomTheme!
