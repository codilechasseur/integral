<header
  x-data="{atTop:true}"
  @scroll.window="atTop = window.pageYOffset>1?false:true"
  class="fixed z-20 w-full flex justify-between px-4 md:px-8 lg:px-16 transition-all duration-700"
  :class="(atTop === false)?'bg-light-gray text-charcoal py-3 md:py-4 lg:py-6':'text-white bg-transparent py-6 md:py-8 lg:py-12'"
>
  <a class="brand z-20" href="{{ home_url('/') }}">
    @svg('images/logo', 'w-[164px] lg:w-[234px]')
  </a>

  @if (has_nav_menu('primary_navigation'))
    <nav
      class="nav-primary opacity-0 invisible lg:visible lg:opacity-100 transition-opacity lg:block fixed lg:relative left-0 top-0 h-full w-full bg-charcoal lg:bg-transparent lg:w-auto lg:h-auto"
      aria-label="{{ wp_get_nav_menu_name('primary_navigation') }}"
    >
      {!! wp_nav_menu([
        'theme_location' => 'primary_navigation',
        'menu_class'     => '
          flex flex-col lg:flex-row
          items-center lg:items-start justify-center
          h-full
          w-full
          gap-y-8 lg:gap-x-14
          uppercase lg:normal-case text-lg font-light',
        'echo'           => false
      ]) !!}
    </nav>

    <div class="c-hamburger c-hamburger--collapse lg:hidden z-20">
      <div class="c-hamburger-inner">
        <span class="c-hamburger-bar pointer-events-none"></span>
        <span class="c-hamburger-bar pointer-events-none"></span>
        <span class="c-hamburger-bar pointer-events-none"></span>
      </div>
    </div>
  @endif
</header>
