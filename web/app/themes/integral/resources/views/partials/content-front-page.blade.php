<div class="text-white h-screen relative">
  <img src="@asset('images/hero-home-mobile.jpg')" class="md:hidden h-screen w-screen object-cover" />
  <img src="@asset('images/hero-home-tablet.jpg')" class="hidden md:block lg:hidden h-screen w-screen object-cover" />
  <img src="@asset('images/hero-home-desktop.jpg')" class="hidden lg:block h-screen w-screen object-cover" />

  <div class="absolute bottom-0 left-0 px-4 md:px-8 lg:px-16 pb-6 md:pb-8 lg:pb-12">
    <h2 class="font-serif text-10xl leading-11 tracking-tight">integral:</h2>

    <div class="flex gap-x-5 md:gap-x-7 text-base mb-5 md:mb-7">
      <p>[in • teg • ruhl]</p>
      <p>adjective</p>
    </div>

    <hr />

    <ol class="list-decimal list-inside mt-7">
      <li>Founded on integrity, having a strong moral compass</li>
      <li>Essential to a full and comprehensive perspective</li>
      <li>Built on astute insights and analysis</li>
    </ol>
  </div>
</div>

<div class="bg-dust flex flex-col lg:flex-row h-screen">
  <div class="flex flex-col justify-end lg:bg-gradient-to-br from-dark-gray to-charcoal lg:w-2/5 px-4 md:px-8 lg:px-16">
    <h3 class="font-serif text-medium-gray text-9xl md:text-11xl lg:text-12xl leading-4 tracking-wider">Unlocking <em class="block text-white">the Potential</em> in Real Estate</h3>
    <p class="text-white text-lg md:text-xl lg:text-3xl leading-10 tracking-tight font-light">Managing real estate investments today has never been more complex and the risks have never been higher. Our proven strategic approach, rooted in financial due diligence and creative problem solving delivers long-term results for our clients.</p>
    <a href="#" class="button"><span><span>Learn more about services</span></span></a>
  </div>

  <div class="flex flex-row w-full overflow-hidden">
    <div class="pane active bg-gradient-to-r from-[#6D696A] to-[#858081]">
      <div class="content font-serif text-7xl text-dark-gray">
        Three decades in the business allows me to provide an unfiltered perspective.
      </div>

      <div class="absolute right-0 top-0 h-full flex justify-between items-center [writing-mode:vertical-lr] uppercase text-3xl text-white py-14 w-[120px]">
        <div><span class="text-2xs">01</span> Investments</div>
        <div class="bg-gray-900 flex items-center justify-center">@svg('images/icon-arrows')</div>
      </div>
    </div>

    <div class="pane bg-medium-gray">
      <div class="content font-serif text-7xl">
        Realize your vision
      </div>

      <div class="absolute right-0 top-0 h-full flex justify-between items-center [writing-mode:vertical-lr] uppercase text-3xl text-white py-14 w-[120px]">
        <div><span class="text-2xs">02</span> Asset & Portfolio Management</div>
        <div class="bg-gray-900 flex items-center justify-center">@svg('images/icon-arrow')</div>
      </div>
    </div>

    <div class="pane bg-dust">
      <div class="content font-serif text-7xl">
        Discover the world
      </div>

      <div class="absolute right-0 top-0 h-full flex justify-between items-center [writing-mode:vertical-lr] uppercase text-3xl text-white py-14 w-[120px]">
        <div><span class="text-2xs">03</span> <span>Advisory</span></div>
        <div class="bg-gray-900 flex items-center justify-center">@svg('images/icon-reticle')</div>
      </div>
    </div>
  </div>
</div>

<div x-data="{ shown: false }" x-intersect.half="shown = true" class="flex flex-col-reverse lg:flex-row bg-light-gray px-12 py-9 md:p-[11.36vw] gap-x-[14.6590vw]">
  <div class="flex flex-col justify-end lg:w-1/2">
    <h3 x-show="shown" x-transition.opacity.duration.2000ms class="font-serif text-5xl md:text-8xl lg:text-10xl leading-6 tracking-tight mb-6">Our <em>strategic approach</em> reflects our insight-driven perspective.</h3>
    <p x-show="shown" x-transition.opacity.duration.2000ms>Our tactical, phased approach to analyzing and identifying opportunities and mitigating risk in real estate provides our clients with confidence and peace of mind in an often-fluctuating market. With our thorough and thoughtful process and our inherent ability to identify and challenge assumptions, we build lasting value for our clients.</p>
    <a href="" class="button dark mt-12"><span><span>Learn more</span></span></a>
  </div>

  <div class="lg:w-1/2 mb-12 lg:mb-0">
    <img  x-show="shown" x-transition.opacity.duration.2000ms src="https://picsum.photos/800" class="rounded-full" />
  </div>
</div>

<div x-data="{ shown: false }" x-intersect.half="shown = true" class="flex flex-col-reverse lg:flex-row-reverse bg-light-gray px-12 py-9 md:p-[11.36vw] gap-x-[14.6590vw]">
  <div class="flex flex-col justify-end lg:w-1/2">
    <h3 x-show="shown" x-transition.opacity.duration.2000ms class="font-serif text-5xl md:text-8xl lg:text-10xl leading-6 tracking-tight mb-6">The <em>values we share</em> with our clients create long-term partnerships.</h3>
    <p x-show="shown" x-transition.opacity.duration.2000ms>A statement about how shared values drive great collaborations. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
    <a href="" class="button dark mt-12"><span><span>Learn more</span></span></a>
  </div>

  <div class="lg:w-1/2 mb-12 lg:mb-0">
    <img class="w-full" x-show="shown" x-transition.opacity.duration.2000ms src="https://picsum.photos/400/600/" />
  </div>
</div>
