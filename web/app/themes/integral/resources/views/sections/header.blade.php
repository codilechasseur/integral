<header class="fixed z-10 w-full flex justify-between bg-transparent px-4 md:px-8 lg:px-16 py-6 md:py-8 lg:py-12">
  <a class="brand z-10" href="{{ home_url('/') }}">
    @svg('images/logo')
  </a>

  @if (has_nav_menu('primary_navigation'))
    <nav
      class="nav-primary opacity-0 invisible transition-opacity lg:block fixed lg:relative left-0 top-0 h-full w-full bg-charcoal lg:bg-transparent lg:w-auto lg:h-auto"
      aria-label="{{ wp_get_nav_menu_name('primary_navigation') }}"
    >
      {!! wp_nav_menu([
        'theme_location' => 'primary_navigation',
        'menu_class'     => '
          flex flex-col lg:flex-row
          items-center justify-center
          h-full
          w-full
          gap-y-8 lg:gap-x-14
          uppercase lg:normal-case text-white text-lg font-light',
        'echo'           => false
      ]) !!}
    </nav>

    <div class="c-hamburger c-hamburger--collapse lg:hidden z-10">
      <div class="c-hamburger-inner">
        <span class="c-hamburger-bar pointer-events-none"></span>
        <span class="c-hamburger-bar pointer-events-none"></span>
        <span class="c-hamburger-bar pointer-events-none"></span>
      </div>
    </div>
  @endif
</header>
