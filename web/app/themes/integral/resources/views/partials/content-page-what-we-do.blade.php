<div class="text-white h-screen relative">
  <img src="@asset('images/hero-what-we-do-mobile.jpg')" class="md:hidden h-screen w-screen object-cover" />
  <img src="@asset('images/hero-what-we-do-tablet.jpg')" class="hidden md:block lg:hidden h-screen w-screen object-cover" />
  <img src="@asset('images/hero-what-we-do-desktop.jpg')" class="hidden lg:block h-screen w-screen object-cover" />

  <div class="absolute bottom-0 left-0 px-4 md:px-8 lg:px-16 pb-6 md:pb-8 lg:pb-12 lg:w-1/2 lg:max-w-[778px] flex flex-col gap-y-6 lg:gap-y-10">
    <h2 class="font-serif text-4xl md:text-8xl lg:text-10xl leading-8 md:leading-6 tracking-tight">Our work and our approach have been <em>honed over decades</em> of experience in a constantly evolving industry.</h2>

    <p class="text-xs md:text-sm lg:text-base leading-11 font-light">Integral Strategic Real Estate proudly provides an individualized investment approach to institutional investors and high-net-worth families. Thirty years in the industry has transformed our best practices and developed our phased, pragmatic and trusted process for Investments, Asset & Portfolio Management and Advisory services.</p>
  </div>
</div>

<section class="first progress-wrapper bg-light-gray">
  <div class="progress-indicator"></div>

  <div x-data="{ shown: false }" x-intersect.half="shown = true" class="progress-item flex flex-col-reverse lg:flex-row p-12 md:py-16 md:px-32 lg:py-28 gap-x-[14.6590vw]">
    <div class="flex flex-col justify-end lg:w-1/2">
      <h3 x-show="shown" x-transition.opacity.duration.2000ms class="font-serif text-5xl md:text-8xl lg:text-10xl leading-6 tracking-tight mb-6">We view each <em>investment</em> as a fresh <em>opportunity</em> to uncover value.</h3>
      <p class="font-light leading-11" x-show="shown" x-transition.opacity.duration.2000ms>With three decades of experience in managing and transacting more than $4 billion in acquisitions, dispositions, financing and leasing transactions across Canada for income and development properties, we are able to actively pursue strategic investments. In these challenging and changing markets, we see exceptional opportunity to problem solve and identify value not uncovered by others.</p>
    </div>

    <div class="lg:w-1/2 mb-12 lg:mb-0">
      <img class="w-full" x-show="shown" x-transition.opacity.duration.2000ms src="@asset('images/what-we-do-investments.jpg')" />
    </div>
  </div>
</section>

<section class="second progress-wrapper bg-light-gray">
  <div class="progress-indicator"></div>
  <div x-data="{ shown: false }" x-intersect.half="shown = true" class="progress-item flex flex-col-reverse lg:flex-row-reverse p-12 md:py-16 md:px-32 lg:py-28 gap-x-[14.6590vw]">
    <div class="flex flex-col justify-end lg:w-1/2">
      <h3 x-show="shown" x-transition.opacity.duration.2000ms class="font-serif text-5xl md:text-8xl lg:text-10xl leading-6 tracking-tight mb-6">The success of our <em>asset & portfolio</em> management reflects our insight into building <em>long-term value and legacy</em>.</h3>
      <p class="font-light leading-11" x-show="shown" x-transition.opacity.duration.2000ms>Our extensive background in portfolio, asset and property management, as well as capital planning, makes us uniquely positioned to share our expertise and insight. Our history of professional fund management means we are equipped to oversee simple to complex portfolios. In these uncertain times, we provide the steady, experienced perspective that allows for nuanced, reflective decisions that optimize value.</p>
    </div>

    <div class="lg:w-1/2 mb-12 lg:mb-0">
      <img class="w-full" x-show="shown" x-transition.opacity.duration.2000ms src="@asset('images/what-we-do-asset-management.jpg')" class="rounded-full" />
    </div>
  </div>
</section>

<section class="third progress-wrapper bg-light-gray">
  <div class="progress-indicator"></div>
  <div x-data="{ shown: false }" x-intersect.half="shown = true" class="progress-item flex flex-col-reverse lg:flex-row p-12 md:py-16 md:px-32 lg:py-28 gap-x-[14.6590vw]">
    <div class="flex flex-col justify-end lg:w-1/2">
      <h3 x-show="shown" x-transition.opacity.duration.2000ms class="font-serif text-5xl md:text-8xl lg:text-10xl leading-6 tracking-tight mb-6">We proudly provide our <em>strategic advice</em> with transparent and frank perspectives.</h3>
      <p class="font-light leading-11" x-show="shown" x-transition.opacity.duration.2000ms>We see every opportunity as distinct, with its own set of solutions. Renowned for our creative problem-solving, our decades of experience has honed our insight into every class of real estate, from residential — across market and affordable rental housing, condos and seniors housing — to industrial office buildings, retail and land development. Working in BC, Alberta, Ontario and Quebec has allowed us to proudly build a network of trusted relationships among various partners, consultants and authorities across Canada. We work together to put every real estate investment on a productive path toward long-term success.</p>
    </div>

    <div class="lg:w-1/2 mb-12 lg:mb-0">
      <img class="w-full" x-show="shown" x-transition.opacity.duration.2000ms src="@asset('images/what-we-do-advisory.jpg')" />
    </div>
  </div>
</section>
