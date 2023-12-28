<header class="fixed z-10 w-full flex justify-between bg-transparent px-16 py-12">
  <a class="brand" href="{{ home_url('/') }}">
    @svg('images/logo')
  </a>

  @if (has_nav_menu('primary_navigation'))
    <nav class="nav-primary" aria-label="{{ wp_get_nav_menu_name('primary_navigation') }}">
      {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav flex gap-x-14 text-white text-lg font-light', 'echo' => false]) !!}
    </nav>
  @endif
</header>
