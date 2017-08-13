<div class="main-menu container-fluid">

  <div class="row menu-container">
    <div class="container">
      <div class="row content">
        <div class="mobile-menu-toggle open col-xs-2 col-sm-2 visible-xs visible-sm">
          <i class="fa fa-align-left" aria-hidden="true"></i>
        </div>
        <div class="main-menu-logo col-xs-8 col-sm-8 col-md-2 navigation-logo">
          <?php
            if ( get_theme_mod( 'custom_logo' ) ) {
              $custom_logo_id = get_theme_mod( 'custom_logo' );
              $image = wp_get_attachment_image_src( $custom_logo_id , 'menu-logo' );
              ?>
              <a href="<?php echo get_home_url(); ?>">
                <img class="menu-logo" src="<?php echo $image[0]; ?>" alt="Logo">
              </a>
            <?php } ?>
        </div>
        <div class="main-menu-items col-sm-8 hidden-xs hidden-sm center-text navigation-links">
          <?php wp_nav_menu( array(
              'theme_location' => 'main_navigation_menu',
              'fallback_cb' => 'default_header_nav',
              'container' => '',
              'menu_class'=> 'menu'
            )); ?>
        </div>
        <div class="col-xs-2 text-right navigation-search">
          <span class="hidden-xs hidden-sm">Search&nbsp;&nbsp;</span><i class="fa fa-search" aria-hidden="true"></i>
        </div>
      </div>
    </div>
  </div> <!-- End desktop menu -->

  <div class="row mobile-menu-container">
    <div class="container">
      <div class="row content">
        <div class="col-sm-12 visible-xs visible-sm mobile-navigation-links">
          <?php wp_nav_menu( array(
            'theme_location' => 'main_navigation_menu',
            'fallback_cb' => 'default_header_nav',
            'container' => '',
            'menu_class'=> 'mobile-menu'
          ) ); ?>
        </div>
      </div>
    </div>
  </div><!-- End mobile menu -->

</div>

<div class="navigation-search-form">
  <?php // get_search_form(); ?>
</div>
