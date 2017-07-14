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
<script>
jQuery(document).ready(function(){
    jQuery(".menu-icon").click(function(){
        jQuery(".menu-list ").toggleClass("menu-konacno");

    });

});
</script>
<header id="navbar" role="banner" class="navbar-container">
  <div class="responsive-menu">
       <div id="menu-icon" class="menu-icon "> <i class="fa fa-bars" aria-hidden="true"></i> </div>
       <div class="menu-list">
         <ul>
          <h3>Slike po porudzbini</h3>
           <ul>
             <li> <a href="#"> Poruci Jednodelne</a> </li>
             <li><a href="#"> Poruci Visedelne</a> </li>
             <li> <a href="#"> Poruci Kolaz</a></li>
           </ul>
         </li>
         <h3>Prodajna Galerija</h3>
           <ul>
             <li> <a href="#"> Galerija Jednodelne</a> </li>
             <li><a href="#"> Galerija Visedelne</a> </li>
             <li> <a href="#"> Galerija Svetlece</a></li>
           </ul></li>
         <h3><a href="#">Zadovoljni kupci</a></h3>
       </ul>
   </div>
  </div>
  <?php print render ($page['text_blocks']); ?>
  <div class="cart">
  <a href="<?php echo $base_path?>/cart" class="fa fa-shopping-cart" aria-hidden="true"></a>
  <a type="button" class="kontakt" href="<?php echo $base_path?>/kontakt">Kontakt
</a>
</div>

  <div class="header-menu">
    <div class="<?php print $container_class; ?>">
      <div class="navbar-header">
        <?php if ($logo): ?>
          <a class="logo navbar-btn pull-left" href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>">
            <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
          </a>
        <?php endif; ?>

        <?php if (!empty($site_name)): ?>
          <a class="name navbar-brand" href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>"><?php print $site_name; ?></a>
        <?php endif; ?>

        <?php if (!empty($primary_nav) || !empty($secondary_nav) || !empty($page['navigation'])): ?>
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
            <span class="sr-only"><?php print t('Toggle navigation'); ?></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        <?php endif; ?>
      </div>

      <?php if (!empty($primary_nav) || !empty($secondary_nav) || !empty($page['navigation'])): ?>
        <div class="navbar-2" id="navbar-collapse">
          <nav role="navigation">
            <?php if (!empty($primary_nav)): ?>
              <?php print render($primary_nav); ?>
            <?php endif; ?>
            <?php if (!empty($secondary_nav)): ?>
              <?php print render($secondary_nav); ?>
            <?php endif; ?>
            <?php if (!empty($page['navigation'])): ?>
              <?php print render($page['navigation']); ?>
            <?php endif; ?>
            <div class="block-wrap">
              <div class="home-link">
                <h2 class="home-3dela">Slike iz tri dela</h2>
                <h2 class="home-platno">Slike iz tri dela</h2>
              </div>
            <div class="blockpreview1">
              <p class="dd-block">Slike po porudžbini</p>
               <div class="arrow-up"></div>
              <div class="slike-po-porudzbini">
              <?php print render($page['preview_block1']); ?>
            </div>
            </div>
            <div class="blockpreview2">
              <p class="dd-block" >Prodajna galerija</p>
                <div class="arrow-up1"></div>
              <div class="prodajna-galerija">
                <?php print render($page['preview_block2']);?>
              </div>
            </div>
            <div class="galerija-kupci"><a href="<?php echo $base_path?>zadovoljni-kupci">Galerija zadovoljnih kupaca</a>
            </div>
          </div>
          </nav>
        </div>
      <?php endif; ?>
    </div>
  </div>


</header>

<div class="main-container <?php print $container_class; ?>">

  <header role="banner" id="page-header" class="git-header">
      <h1>G.I.T SLIKE</h1>
  </header> <!-- /#page-header -->

  <div class="row front-top">
      <div class="front-img">
          <img src="<?php echo $base_path?>sites/default/files/front.png"/>
      </div>
    <?php if (!empty($page['sidebar_second'])): ?>
      <aside class="about" role="complementary">
        <?php print render($page['sidebar_second']); ?>
      </aside>  <!-- /#sidebar-second -->
    <?php endif; ?>
  </div>
  <div class="row front-bot">
  <?php if (!empty($page['page_video'])): ?>
    <div class="video-text">
       <h3>  Naslov neki ovde</h3>
                Lorem ipsum dolor sit amet, graeci periculis dissentias has id, dicam mucius noster eu nam.
                Causae delicatissimi vel ne, qui id dicat nominavi gloriatur. Aliquip philosophia vis eu, nisl
                habeo accusam vim cu, vim ei eirmod consequuntur. Quidam corrumpit voluptaria eam te, duo esse
                impetus dignissim an, ei ignota intellegebat has. Mei admodum interpretaris ei, utinam scriptorem
                 duo ad, vis ei dolor maiorum. Te sea illud falli lobortis.

          Sumo dolor option ut vim, ad mundi putant iracundia nec, sit ex epicuri
           nostrum. Id stet nominavi deseruisse sit. Ea discere albucius oportere est, an
           oratio nostro percipit nam, ex sit accusamus pertinacia. Cu per iusto disputando
           comprehensam. Velit erant cu pro. Nec at magna primis dignissim.
      <?php print render($page['page_kontakt']); ?>
    </div>
    <aside class="front-video video-bot" role="complementary">
      <?php print render ($page['page_video']); ?>
    </aside>  <!-- /#page_bottom -->
  <?php endif; ?>
</div>
</div>
