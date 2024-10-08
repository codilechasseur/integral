<div x-data="{ shownHero: false }" x-intersect.half="shownHero = true" class="bg-charcoal text-white h-[100svh] lg:h-screen relative">
  <img src="@asset('images/hero-home-mobile.jpg')" class="md:hidden h-[100svh] w-screen object-cover " />
  <img src="@asset('images/hero-home-tablet.jpg')" class="hidden md:block lg:hidden h-[100svh] w-screen object-cover" />
  <img src="@asset('images/hero-home-desktop.jpg')" class="hidden lg:block h-screen w-screen object-cover" />

  <div x-show="shownHero" x-transition.opacity.duration.3000ms class="absolute bottom-0 left-0 px-4 md:px-8 lg:px-16 pb-6 md:pb-8 lg:pb-12">
    <h2 class="font-serif text-10xl leading-11 tracking-[2.16px] md:tracking-[2.76px] lg:tracking-[3.36px] mb-6 md:mb-8 lg:mb-10">integral:</h2>

    <div class="flex gap-x-5 md:gap-x-7 text-base mb-5 md:mb-7 font-light">
      <p>[in • TEG • ruhl]</p>
      <p>adjective</p>
    </div>

    <hr class="border-2" />

    <ol class="list-decimal list-inside mt-7 flex flex-col space-y-3 font-light">
      <li>Founded on <strong>integrity</strong>, having a strong moral compass</li>
      <li>Meaningful projects with an <strong>essential</strong> purpose</li>
      <li>Built on astute <strong>insights</strong> and analysis</li>
    </ol>
  </div>
</div>

<div class="bg-dust flex flex-col xl:flex-row xl:h-[80vh] min-h-[700px]">
  <div class="flex flex-col justify-end bg-gradient-to-b xl:bg-gradient-to-br from-dark-gray to-charcoal xl:w-2/5 px-4 pt-36 pb-4 md:px-8 xl:pt-0 xl:p-16 gap-y-12 xl:min-w-[650px]">
    <h3 class="lg:mt-32 font-serif text-medium-gray text-9xl md:text-11xl xl:text-12xl leading-4 tracking-wider">Unlocking <em class="block text-white">the Potential</em> in Real Estate</h3>
    <p class="text-white text-lg md:text-xl xl:text-3xl leading-10 tracking-tight font-light">Managing real estate investments today has never been more complex and the risks have never been higher. Our proven strategic approach, rooted in experienced due diligence and creative problem-solving, delivers long-term results.</p>
    <a href="/what-we-do" class="button"><span><span>Learn more</span></span></a>
  </div>

  <div class="flex flex-col-reverse lg:flex-col xl:flex-row w-full overflow-hidden">
    <div data-url="/what-we-do/#investments" class="flex flex-col-reverse xl:block pane active bg-gradient-to-r from-[#6D696A] to-[#858081]">
      <div class="content">
        <p class="font-serif text-2xl md:text-5xl lg:text-7xl leading-8 text-dark-gray">We see exceptional opportunity in the midst of complex and changing real estate markets.</p>

        <div class="link text-white font-light text-2xs lg:text-base opacity-0 transition-opacity ease-in-out lg:delay-500">
          <a href="/what-we-do/#investments" class="button"><span><span>Learn more</span></span></a>
        </div>
      </div>

      <div class="xl:absolute xl:right-0 xl:top-0 h-full flex justify-between items-center xl:[writing-mode:vertical-lr] uppercase text-sm md:text-xl lg:text-3xl text-white p-4 md:p-8 xl:py-14 xl:px-0 xl:w-[120px]">
        <div class="flex gap-x-2 items-top xl:items-baseline"><span class="pt-0.5 text-3xs ld:text-2xs">01</span> Investments</div>
        <div class="bg-gray-900 flex items-center justify-center">@svg('images/icon-arrows', 'w-[30px] h-[30px] md:w-[36px] md:h-[36px] lg:w-[60px] lg:h-[60px]')</div>
      </div>
    </div>

    <div data-url="/what-we-do/#assets" class="flex flex-col-reverse xl:block pane bg-medium-gray">
      <div class="content">
        <p class="font-serif text-2xl md:text-5xl lg:text-7xl leading-8 text-dark-gray">Real estate owners need experience and a steady hand to navigate these uncertain times.</p>

        <div class="link text-white font-light text-2xs lg:text-base opacity-0 transition-opacity ease-in-out lg:delay-500">
          <a href="/what-we-do/#assets" class="button"><span><span>Learn more</span></span></a>
        </div>
      </div>

      <div class="xl:absolute xl:right-0 xl:top-0 h-full flex justify-between items-center xl:[writing-mode:vertical-lr] uppercase text-sm md:text-xl lg:text-3xl leading-7 tracking-wide text-white p-4 md:p-8 xl:py-14 xl:px-0 xl:w-[120px]">
        <div class="flex gap-x-2 items-top xl:items-baseline"><span class="pt-0.5 text-3xs lg:text-2xs">02</span> Asset & Portfolio Management</div>
        <div class="bg-gray-900 flex items-center justify-center">@svg('images/icon-arrow', 'w-[30px] h-[30px] md:w-[36px] md:h-[36px] lg:w-[60px] lg:h-[60px]')</div>
      </div>
    </div>

    <div data-url="/what-we-do/#advisory" class="flex flex-col-reverse xl:block pane bg-dust">
      <div class="content">
        <p class="font-serif text-2xl md:text-5xl lg:text-7xl leading-8 text-dark-gray">We proudly deliver an individualized perspective for every investor’s distinct challenges and needs.</p>

        <div class="link text-white font-light text-2xs lg:text-base opacity-0 transition-opacity ease-in-out lg:delay-500">
          <a href="/what-we-do/#advisory" class="button"><span><span>Learn more</span></span></a>
        </div>
      </div>

      <div class="xl:absolute xl:right-0 xl:top-0 h-full flex justify-between items-center xl:[writing-mode:vertical-lr] uppercase text-sm md:text-xl lg:text-3xl text-white p-4 md:p-8 xl:py-14 xl:px-0 xl:w-[120px]">
        <div class="flex gap-x-2 items-top xl:items-baseline"><span class="pt-0.5 xl:pt-0 text-3xs lg:text-2xs">03</span> <span>Advisory</span></div>
        <div class="bg-gray-900 flex items-center justify-center">@svg('images/icon-reticle', 'w-[30px] h-[30px] md:w-[36px] md:h-[36px] lg:w-[60px] lg:h-[60px]')</div>
      </div>
    </div>
  </div>
</div>

<section class="bg-light-gray">
  <div x-data="{ shownOne: false }" x-intersect.half="shownOne = true" class="flex flex-col-reverse lg:flex-row px-12 py-9 md:py-16 md:px-32 lg:py-32 gap-x-[14.6590vw] transition ease-in-out">
    <div class="flex flex-col justify-end lg:w-1/2">
      <h3 x-show="shownOne" x-transition.opacity.duration.2000ms class="font-serif text-5xl md:text-8xl lg:text-10xl leading-6 tracking-tight mb-6">Our <em>strategic approach</em> reflects our insight-driven perspective.</h3>
      <p class="font-light leading-11" x-show="shownOne" x-transition.opacity.duration.2000ms>Our tactical, phased approach to analyzing and identifying opportunities and mitigating risk in real estate provides confidence and peace of mind in often-uncertain markets. With our thorough and thoughtful process and our inherent ability to identify and challenge assumptions, we build lasting value.</p>
      <a href="/about/#strategic-approach" class="button dark mt-12"><span><span>Learn more</span></span></a>
    </div>

    <div class="lg:w-1/2 mb-12 lg:mb-0">
      <img  x-show="shownOne" x-transition.opacity.duration.2000ms src="@asset('images/home-strategic-approach.png')" class="rounded-full" />
    </div>
  </div>
</section>

<section class="bg-[#D3D0D0]">
  <div x-data="{ shownTwo: false }" x-intersect.half="shownTwo = true" class="flex flex-col-reverse lg:flex-row-reverse px-12 py-9 md:py-16 md:px-32 lg:py-32 gap-x-[14.6590vw] transition ease-in-out">
    <div class="flex flex-col justify-end lg:w-1/2">
      <h3 x-show="shownTwo" x-transition.opacity.duration.2000ms class="font-serif text-5xl md:text-8xl lg:text-10xl leading-6 tracking-tight mb-6">The <em>values we share</em> with our investors create excellent alignment and lasting partnerships.</h3>
      <p class="font-light leading-11" x-show="shownTwo" x-transition.opacity.duration.2000ms>How we work is the foundation of our success. We are a collaborative, experienced partner who proudly lives by our values. Every day, we foster long-term, trusted relationships as we build a legacy and value together.</p>
      <a href="/about/#our-values" class="button dark mt-12"><span><span>Learn more</span></span></a>
    </div>

    <div class="lg:w-1/2 mb-12 lg:mb-0">
      <img class="w-full" x-show="shownTwo" x-transition.opacity.duration.2000ms src="@asset('images/home-shared-values.jpg')" />
    </div>
  </div>
</section>
