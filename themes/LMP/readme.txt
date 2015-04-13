== H5 Theme ==

Theme Name:  H5
Theme URI:   http://digwp.com/
Description: A minimalist WordPress starter theme built with HTML5.
Version:     1.1
Author:      Jeff Starr
Author URI:  http://perishablepress.com/
License:     GNU General Public License v2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html



== Installation ==

1. Unzip, upload, activate, done (typical WP theme installation).
2. All done. Now go forth and use this starter theme to create something awesome.



== Upgrading ==

H5 is a starter theme, which means it's designed for use as a starting point for building your own themes. Upgrading to the latest version is only recommended if you have not made any changes to the theme.



== Changelog ==

= Version 1.1 =

- summary: much needed update to bring theme up to date according to changes in HTML5 and WP API
- restructured directories, moved subdirectories into /lib/
- localized all text with "h5" text domain
- updated/reformatted style.css
- updated/reformatted header.php
- updated/reformatted footer.php
- updated/reformatted comments.php
- removed links.php (deprecated)
- removed hard-coded links from footer and sidebar
- removed h5.js, replaced with google-hosted HTML5 shim
- removed "clear: none;" where not needed in style.css
- removed "display: block;" for HTML5 selectors in style.css
- added readme.txt and changelog
- added theme support for featured images
- added theme support for automatic feed links
- added conditional wp_enqueue_script for comment-reply script
- added default content width in functions.php
- added <?php post_class(); ?> to post markup
- added class "page-nav" to page nav
- added class "h5-search-form" to search form
- added new class selectors to style.css
- added fresh CSS for comments and comment form
- added "depth" parameter to wp_list_pages()
- added the_post_thumbnail() to single.php
- added add_theme_support('custom-header');
- added add_theme_support('custom-background');
- added /inc/post-details.php, now included in image.php and single.php
- replaced screenshot.png with full-size version
- replaced page <header> with <div class="header"> in header.php
- replaced page <nav> with <div class="nav"> in header.php
- replaced post-wrap <section> with <div class="section"> in all relevant files
- replaced sidebar <aside> with <div class="sidebar">
- replaced page <footer> with <div class="footer"> in footer.php
- replaced minimal Custom Page template with full Page template
- replaced all instances of bloginfo('url'); with echo home_url('/');
- general code clean up, testing, and maintenance

= Version 1.0 =

* Initial release!


