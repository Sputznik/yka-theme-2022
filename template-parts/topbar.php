<div>

  <!-- TOP BAR -->
  <div class="yka-topbar">
    <div class="container flex">
      <div class="logo logo-desktop">
        <a href="<?php _e( get_bloginfo('url')  );?>" class="navbar-brand">
          <img src="<?php _e(YKA_THEME_URL.'/images/logo-desktop.png');?>" alt="YKA Logo">
        </a>
        <span class="logo-title">Where Young India Writes</span>
      </div>
      <div class="topbar-buttons">
        <ul class="list-unstyled">
          <li class="li-btn-hindi">
            <a href="#" class="btn btn-hindi">हिन्दी</a>
          </li>
          <li class="li-search-item">
            <a href="<?php _e( get_bloginfo('url').'/?s='  );?>" style="font-size: 25px;color: #000;"><i class="fa fa-search"></i></a>
          </li>
          <li>
            <button class="navbar-toggler" type="button" style="font-size: 25px;color: #d30000;">
              <i class="fa fa-bars"></i>
            </button>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <!-- TOP BAR -->

  <!-- SIDEBAR MENU -->
  <?php
    wp_nav_menu( array(
      'menu'              => 'yka-sidebar-menu',
      'theme_location'    => 'yka-sidebar-menu',
      'depth'             => 2,
      'container'         => 'div',
      'container_class'   => 'container yka-sidebar-collapse',
      'container_id'      => '',
      'menu_class'        => 'list-unstyled sidebar-nav',
    ) );
  ?>
  <!-- SIDEBAR MENU -->
</div>
<?php

  $menu_item_image = YKA_THEME_URL.'/images';

?>

<!-- PRIMARY MENU -->
<div class="primary-menu-wrapper">
  <div class="container">
    <ul class="list-unstyled primary-nav">
      <li>
        <a href="#">
          <img src="<?php _e( $menu_item_image.'/home-feed.png' );?>" alt="Home Feed">
        </a>
      </li>
      <li>
        <a href="#">
          <img src="<?php _e( $menu_item_image.'/quick-bytes.png' );?>" alt="Quick Bytes">
        </a>
      </li>
      <li>
        <a href="#">
          <img src="<?php _e( $menu_item_image.'/yka-blogs.png' );?>" alt="Yka Blogs">
        </a>
      </li>
      <li>
        <a href="#">
          <img src="<?php _e( $menu_item_image.'/yka-action-network.png' );?>" alt="Yka Action Network">
        </a>
      </li>
      <li class="start-writing">
        <a href="#">
          <img src="<?php _e( $menu_item_image.'/start-writing.png' );?>" alt="Start Writing">
        </a>
      </li>
    </ul>
  </div>
  <!-- PRIMARY MENU -->

</div>
