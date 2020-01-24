<header class="banner">
  <div class="container">
    <nav class="navbar navbar-primary" role="navigation">
      <a class="navbar-brand" href="{{ home_url('/') }}">{{ get_bloginfo('name', 'display') }}</a>
      @if (has_nav_menu('primary_navigation'))
        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'navbar-nav']) !!}
      @endif
    </nav>
  </div>

  <nav class="navbar navbar-secondary" role="navigation">
    <div class="container">
      @if (has_nav_menu('secondary_navigation'))
        {!! wp_nav_menu(['theme_location' => 'secondary_navigation', 'menu_class' => 'navbar-nav']) !!}
      @endif
      <?php get_search_form(); ?>
    </div>
  </nav>

  @if (!is_front_page() && function_exists('yoast_breadcrumb'))
    <nav aria-label="breadcrumb" class="container">
      {!! yoast_breadcrumb('<ol class="breadcrumb">','</ol>') !!}
    </nav>
  @endif
</header>
