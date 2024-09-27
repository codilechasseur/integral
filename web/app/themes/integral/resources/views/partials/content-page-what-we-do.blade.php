<div x-data="{ shownHero: false }" x-intersect.half="shownHero = true" class="bg-charcoal text-white h-[100svh] lg:h-screen relative">
  <img src="@asset('images/hero-what-we-do-mobile.jpg')" class="md:hidden h-[100svh] w-screen object-cover" />
  <img src="@asset('images/hero-what-we-do-tablet.jpg')" class="hidden md:block lg:hidden h-[100svh] w-screen object-cover" />
  <img src="@asset('images/hero-what-we-do-desktop.jpg')" class="hidden lg:block h-screen w-screen object-cover" />

  <div class="absolute bottom-0 left-0 px-4 md:px-8 lg:px-16 pb-6 md:pb-8 lg:pb-12 lg:w-1/2 lg:max-w-[778px] flex flex-col gap-y-6 lg:gap-y-10">
    <h2 x-show="shownHero" x-transition.opacity.duration.3000ms class="font-serif text-4xl md:text-8xl lg:text-10xl leading-8 md:leading-6 tracking-tight">Our work and our approach to institutional investors, developers, high net-worth families and not-for-profit organizations.</h2>

    <p x-show="shownHero" x-transition.opacity.duration.3000ms class="text-xs md:text-sm lg:text-base leading-11 font-light">Integral Strategic Real Estate proudly provides an individualized investment approach to a diverse group of stakeholders from institutional investors to high-net-worth families. Thirty years in the industry has transformed our best practices and developed our phased, pragmatic and trusted process for Investments, Asset & Portfolio Management and Advisory services.</p>
  </div>
</div>

<section class="bg-light-gray scroll-mt-[64px] md:scroll-mt-[102px]" id="investments">
  <div class="flex flex-col-reverse lg:flex-row p-12 md:py-16 md:px-32 lg:py-28 gap-x-[14.6590vw]">
    <div class="flex flex-col justify-end lg:w-1/2 js-show-on-scroll">
      <h3 class="font-serif text-5xl md:text-8xl lg:text-10xl leading-6 tracking-tight mb-6">In these challenging and changing markets, we see exceptional <em>investment</em> opportunities to partner, problem solve and identify value not uncovered by others.</h3>
      <p class="font-light leading-11">With three decades of experience in managing and transacting more than $4 billion in acquisitions, dispositions, financing and leasing transactions across Canada for income and development properties, we are able to actively pursue strategic investments. In these challenging and changing markets, we see exceptional opportunity to problem solve and identify value not uncovered by others.</p>
    </div>

    <div class="lg:w-1/2 mb-12 lg:mb-0 js-show-on-scroll">
      <img class="w-full" width="480" height="577" src="@asset('images/what-we-do-investments.jpg')" />
    </div>
  </div>
</section>

<section class="bg-[#D3D0D0] scroll-mt-[64px] md:scroll-mt-[102px]" id="assets">
  <div class="flex flex-col-reverse lg:flex-row-reverse p-12 md:py-16 md:px-32 lg:py-28 gap-x-[14.6590vw]">
    <div class="flex flex-col justify-end lg:w-1/2 js-show-on-scroll">
      <h3 class="font-serif text-5xl md:text-8xl lg:text-10xl leading-6 tracking-tight mb-6">The success of our <em>asset & portfolio</em> management reflects our insight into building <em>long-term value and legacy</em>.</h3>
      <p class="font-light leading-11">Our extensive background in portfolio, asset and property management, as well as capital planning, makes us uniquely positioned to share our expertise and insight. Our history of professional fund management means we are equipped to oversee simple to complex portfolios. In these uncertain times, we provide the steady, experienced perspective that allows for nuanced, reflective decisions that optimize value.</p>
    </div>

    <div class="lg:w-1/2 mb-12 lg:mb-0 js-show-on-scroll">
      <img class="w-full" width="486" height="486" src="@asset('images/what-we-do-asset-management.png')" class="rounded-full" />
    </div>
  </div>
</section>

<section class="bg-light-gray scroll-mt-[64px] md:scroll-mt-[102px]" id="advisory">
  <div class="flex flex-col-reverse lg:flex-row p-12 md:py-16 md:px-32 lg:py-28 gap-x-[14.6590vw]">
    <div class="flex flex-col justify-end lg:w-1/2 js-show-on-scroll">
      <h3 class="font-serif text-5xl md:text-8xl lg:text-10xl leading-6 tracking-tight mb-6">We proudly provide our <em>strategic advice</em> with transparent and frank perspectives.</h3>
      <p class="font-light leading-11">We see every opportunity as distinct, with its own set of solutions. Renowned for our creative problem-solving, our decades of experience has honed our insight into every class of real estate, from residential — across market and affordable rental housing, condos and seniors housing — to industrial warehouses, office buildings, retail and land development. Working in BC, Alberta, Ontario and Quebec has allowed us to proudly build a network of trusted relationships among various partners, consultants and authorities across Canada. We work together to put every real estate investment on a productive path toward long-term success.</p>
    </div>

    <div class="lg:w-1/2 mb-12 lg:mb-0 js-show-on-scroll">
      <img class="w-full" width="486" height="568" src="@asset('images/what-we-do-advisory.jpg')" />
    </div>
  </div>
</section>
