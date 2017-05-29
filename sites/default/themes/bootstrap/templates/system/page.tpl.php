<?php
/**
 * @file
 * Default theme implementation to display a single Drupal page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.tpl.php template in this directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - $base_path: The base URL path of the Drupal installation. At the very
 *   least, this will always default to /.
 * - $directory: The directory the template is located in, e.g. modules/system
 *   or themes/bartik.
 * - $is_front: TRUE if the current page is the front page.
 * - $logged_in: TRUE if the user is registered and signed in.
 * - $is_admin: TRUE if the user has permission to access administration pages.
 *
 * Site identity:
 * - $front_page: The URL of the front page. Use this instead of $base_path,
 *   when linking to the front page. This includes the language domain or
 *   prefix.
 * - $logo: The path to the logo image, as defined in theme configuration.
 * - $site_name: The name of the site, empty when display has been disabled
 *   in theme settings.
 * - $site_slogan: The slogan of the site, empty when display has been disabled
 *   in theme settings.
 *
 * Navigation:
 * - $main_menu (array): An array containing the Main menu links for the
 *   site, if they have been configured.
 * - $secondary_menu (array): An array containing the Secondary menu links for
 *   the site, if they have been configured.
 * - $breadcrumb: The breadcrumb trail for the current page.
 *
 * Page content (in order of occurrence in the default page.tpl.php):
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title: The page title, for use in the actual HTML content.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 * - $messages: HTML for status and error messages. Should be displayed
 *   prominently.
 * - $tabs (array): Tabs linking to any sub-pages beneath the current page
 *   (e.g., the view and edit tabs when displaying a node).
 * - $action_links (array): Actions local to the page, such as 'Add menu' on the
 *   menu administration interface.
 * - $feed_icons: A string of all feed icons for the current page.
 * - $node: The node object, if there is an automatically-loaded node
 *   associated with the page, and the node ID is the second argument
 *   in the page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - $page['help']: Dynamic help text, mostly for admin pages.
 * - $page['highlighted']: Items for the highlighted content region.
 * - $page['content']: The main content of the current page.
 * - $page['sidebar_first']: Items for the first sidebar.
 * - $page['sidebar_second']: Items for the second sidebar.
 * - $page['header']: Items for the header region.
 * - $page['footer']: Items for the footer region.
 *
 * @see bootstrap_preprocess_page()
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see bootstrap_process_page()
 * @see template_process()
 * @see html.tpl.php
 *
 * @ingroup templates
 */
?>
<section class="page-wrapper text-center">
<section class="top-section-wrapper red-bg main-g-section">
  <div class="top-section-container container">
    
      <div class="logo-box">
        <?php if ($logo): ?>
        <a class="logo" href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>">
          <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
        </a>
      <?php endif; ?>
      </div>
      <div class="site-slogan">
        <?php if (!empty($site_slogan)): ?>
          <p><?php print $site_slogan; ?></p>
        <?php endif; ?>
      </div>
      <div class="down-arrow arrow-white">
        <span class="down-arrow-box">
          <span class="glyphicon glyphicon-menu-down" aria-hidden="true"></span>
        </span>
      </div>
  </div>
</section>
<section class="main-content-wrapper main-g-section">
  <div class="main-content-wrapper container">
      <?php print render($page['content']); ?>
  </div>
</section>
<section class="services-wrapper white-bg main-g-section">
  <div class="services-container container">
    <div class="service-container-inner">
      <?php print render($page['services']); ?>  
    </div>
    <div class="down-arrow arrow-black">
        <span class="down-arrow-box">
          <span class="glyphicon glyphicon-menu-down" aria-hidden="true"></span>
        </span>
      </div>
  </div>
  
</section>
<section class="clients-wrapper main-g-section">
  <div class="clients-container container">
    <div class="clients-container-inner">
      <?php print render($page['clients']); ?>
    </div>
    <div class="down-arrow arrow-black">
        <span class="down-arrow-box">
          <span class="glyphicon glyphicon-menu-down" aria-hidden="true"></span>
        </span>
      </div>
  </div>
  
</section>
<section class="find-us-wrapper main-g-section">
  <div class="find-us-container">
    <div class="find-us-container-inner">
      <?php print render($page['find_us']); ?>
    </div>
    <div class="down-arrow arrow-red">
        <span class="down-arrow-box">
          <span class="glyphicon glyphicon-menu-down" aria-hidden="true"></span>
        </span>
      </div>  
  </div>
  
</section>
<section class="contact-wrapper main-g-section">
  <div class="contact-container container">
    <?php print render($page['contact']); ?>
  </div>
</section>
</section>