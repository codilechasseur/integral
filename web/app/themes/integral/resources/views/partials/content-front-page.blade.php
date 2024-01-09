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

<div class="bg-dust flex flex-col lg:flex-row">
  <div class="lg:bg-gradient-to-br from-dark-gray to-charcoal lg:w-2/5 px-4 md:px-8 lg:px-16">
    <h3 class="font-serif text-medium-gray text-9xl md:text-11xl lg:text-12xl leading-4 tracking-wider">Unlocking <em class="block text-white">the Potential</em> in Real Estate</h3>
    <p class="text-white text-lg md:text-xl lg:text-3xl leading-10 tracking-tight font-light">Managing real estate investments today has never been more complex and the risks have never been higher. Our proven strategic approach, rooted in financial due diligence and creative problem solving delivers long-term results for our clients.</p>
    <a href="#" class="button">Learn more about services</a>
  </div>

  <div class="antialiased w-full bg-gradient-to-b flex flex-col font-sans from-black items-stretch justify-center h-screen to-gray-900 sm:flex-row sm:items-center">
    <div class="flex flex-col flex-grow items-stretch min-w-md w-full h-full sm:flex-row sm:overflow-hidden">

      <div class="pane active bg-gradient-to-r from-[#6D696A] to-[#858081] cursor-pointer duration-700 ease-in-out flex-grow min-h-14 min-w-14 overflow-hidden relative transition-all">
        <div class="content flex flex-col justify-center leading-tight text-white whitespace-pre max-w-0">
          <div class="ease-in-out font-bold duration-700 opacity-0 relative transform transition-all serif text-9xl text-dark-gray">Three decades in the business allows me to provide an unfiltered perspective.</div>
        </div>
        <div class="absolute top-14 right-10 [writing-mode:vertical-lr] uppercase text-3xl text-white">
          <span class="text-2xs">01</span> Investments
        </div>
        <div class="icon absolute bottom-0 duration-700 ease-in-out flex label right-0 mb-2 ml-3 sm:mb-3 sm:ml-2 transition-all z-30">
          <div class="bg-gray-900 flex items-center justify-center mr-3 rounded-full text-red-500">@svg('images/icon-arrows')</div>
        </div>
      </div>

      <div class="pane bg-medium-gray cursor-pointer duration-700 ease-in-out flex-grow min-h-14 min-w-14 overflow-hidden relative transition-all">
        <div class="content flex flex-col justify-center leading-tight text-white whitespace-pre max-w-0">
          <div class="ease-in-out font-bold duration-700 opacity-0 relative transform transition-all serif text-9xl text-dark-gray">Realize your vision</div>
        </div>
        <div class="absolute top-14 right-10 [writing-mode:vertical-lr] uppercase text-3xl text-white">
          <span class="text-2xs">02</span> Asset & Portfolio Management
        </div>
        <div class="icon absolute bottom-0 right-0 duration-700 ease-in-out flex label mb-2 ml-3 sm:mb-3 sm:ml-2 transition-all z-30">
          <div class="bg-gray-900 flex items-center justify-center rounded-full text-yellow-500">@svg('images/icon-arrow')</div>
        </div>
      </div>

      <div class="pane bg-dust cursor-pointer duration-700 ease-in-out flex-grow min-h-14 min-w-14 overflow-hidden relative transition-all">
        <div class="content flex flex-col justify-center leading-tight text-white whitespace-pre max-w-0">
          <div class="ease-in-out font-bold duration-700 opacity-0 relative transform transition-all serif text-9xl text-dark-gray">Discover the world</div>
        </div>
        <div class="absolute top-14 right-10 [writing-mode:vertical-lr] uppercase text-3xl text-white">
          <span class="text-2xs">03</span> Advisory
        </div>
        <div class="icon absolute bottom-0 duration-700 ease-in-out flex label right-0 mb-2 ml-3 sm:mb-3 sm:ml-2 transition-all z-30">
          <div class="bg-gray-900 flex items-center justify-center mr-3 rounded-full text-green-500">@svg('images/icon-reticle')</div>
        </div>
      </div>

    </div>
  </div>
</div>

<div x-data="{ shown: false }" x-intersect.half="shown = true" class="flex flex-col-reverse lg:flex-row bg-light-gray px-12 py-9 md:p-[11.36vw] gap-x-[14.6590vw]">
  <div class="flex flex-col justify-end lg:w-1/2">
    <h3 x-show="shown" x-transition.opacity.duration.2000ms class="font-serif text-5xl md:text-8xl lg:text-10xl leading-6 tracking-tight mb-6">Our <em>strategic approach</em> reflects our insight-driven perspective.</h3>
    <p x-show="shown" x-transition.opacity.duration.2000ms>Our tactical, phased approach to analyzing and identifying opportunities and mitigating risk in real estate provides our clients with confidence and peace of mind in an often-fluctuating market. With our thorough and thoughtful process and our inherent ability to identify and challenge assumptions, we build lasting value for our clients.</p>
    <a href="" class="button mt-12">Learn more</a>
  </div>

  <div class="lg:w-1/2 mb-12 lg:mb-0">
    <img  x-show="shown" x-transition.opacity.duration.2000ms src="https://picsum.photos/800" class="rounded-full" />
  </div>
</div>

<div x-data="{ shown: false }" x-intersect.half="shown = true" class="flex flex-col-reverse lg:flex-row-reverse bg-light-gray px-12 py-9 md:p-[11.36vw] gap-x-[14.6590vw]">
  <div class="flex flex-col justify-end lg:w-1/2">
    <h3 x-show="shown" x-transition.opacity.duration.2000ms class="font-serif text-5xl md:text-8xl lg:text-10xl leading-6 tracking-tight mb-6">The <em>values we share</em> with our clients create long-term partnerships.</h3>
    <p x-show="shown" x-transition.opacity.duration.2000ms>A statement about how shared values drive great collaborations. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
    <a href="" class="button mt-12">Learn more</a>
  </div>

  <div class="lg:w-1/2 mb-12 lg:mb-0">
    <img class="w-full" x-show="shown" x-transition.opacity.duration.2000ms src="https://picsum.photos/400/600/" />
  </div>
</div>
