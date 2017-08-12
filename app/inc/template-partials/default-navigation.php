<div class="main-menu container-fluid">
  <div class="row">
    <div class="container">
      <div class="row content">
        <div class="main-menu-logo col-xs-6 col-sm-6 col-md-2 navigation-logo">
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
                'container'=> false,
                'fallback_cb' => 'default_header_nav'
              )); ?>
          </div>
          <div class="col-sm-2 text-right navigation-search">
            <span>Search&nbsp;&nbsp;<i class="fa fa-search" aria-hidden="true"></i></span>
          </div>
          <div class="mobile-menu-toggle open col-xs-6 col-sm-6 visible-xs visible-sm">
            <i class="fa fa-circle-o" aria-hidden="true"></i>&nbsp;<span>MENU</span>
          </div>
      </div>
    </div>
  </div>
</div>

<div class="navigation-search-form">
  <?php // get_search_form(); ?>
</div>

<div class="mobile-menu visible-xs visible-sm">
  <div class="mobile-menu-toggle close">
    <span>CLOSE</span>&nbsp;<i class="fa fa-times" aria-hidden="true"></i>
  </div>
  <h4>Menu</h4>
  <?php wp_nav_menu( array( 'theme_location' => 'main_navigation_menu', 'fallback_cb' => 'default_header_nav') ); ?>
</div>