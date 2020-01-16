<header class="banner">
  <div class="container">
    <nav class="navbar navbar-light navbar-expand-lg">
      <a class="navbar-brand mr-auto" href="{{ home_url('/') }}">{{ get_bloginfo('name', 'display') }}</a>
      @if (has_nav_menu('primary_navigation'))
        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'navbar-nav']) !!}
      @endif
    </nav>
  </div>
</header>
