<header class="banner">
  <div class="container-fluid full-width">

    <a class="brand <?=$_GET['extra']?>" href="<?= esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a>

    <div class="nav-holder <?=$_GET['extra']?>">
      <h2 class="description"><div><?=get_bloginfo( "description")?></div></h2>

      <nav class="nav-primary">
        <?php
        if (has_nav_menu('primary_navigation')) :
          wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']);
        endif;
        ?>
      </nav>
    </div>
  </div>
</header>
