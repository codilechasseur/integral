<div class="text-white h-screen relative">
  <img src="@asset('images/hero-what-we-do-mobile.jpg')" class="md:hidden h-screen w-screen object-cover" />
  <img src="@asset('images/hero-what-we-do-tablet.jpg')" class="hidden md:block lg:hidden h-screen w-screen object-cover" />
  <img src="@asset('images/hero-what-we-do-desktop.jpg')" class="hidden lg:block h-screen w-screen object-cover" />

  <div class="absolute bottom-0 left-0 px-4 md:px-8 lg:px-16 pb-6 md:pb-8 lg:pb-12 lg:w-1/2 lg:max-w-[778px] flex flex-col gap-y-6 lg:gap-y-10">
    <h2 class="font-serif text-4xl md:text-8xl lg:text-10xl leading-8 md:leading-6 tracking-tight">Our work and our approach have been <em>honed over decades</em> of experience in a constantly evolving industry.</h2>

    <p class="text-xs md:text-sm lg:text-base leading-11 font-light">Integral Real Estate Advisory proudly provides a bespoke, individualized investment approach to a range of clients from institutional investors to high-net-worth individuals and families. Thirty years in the industry has transformed our best practices and developed our phased, pragmatic and trusted process for Investments, Asset & Portfolio Management and Advisory services.</p>
  </div>
</div>

<div x-data="{ shown: false }" x-intersect.half="shown = true" class="flex flex-col-reverse lg:flex-row bg-light-gray px-12 py-9 md:p-[11.36vw] gap-x-[14.6590vw]">
  <div class="flex flex-col justify-end lg:w-1/2">
    <h3 x-show="shown" x-transition.opacity.duration.2000ms class="font-serif text-5xl md:text-8xl lg:text-10xl leading-6 tracking-tight mb-6">We view each investment as a fresh opportunity to uncover value.</h3>
    <p x-show="shown" x-transition.opacity.duration.2000ms>With three decades of experience, most recently overseeing a real estate fund, we are able to manage investments as well as function as an advisor. We look at transactions as problem-solving opportunities, identifying value not uncovered by others. Our long-term, strategic partners enhance our work and create new pathways to success.</p>
  </div>

  <div class="lg:w-1/2 mb-12 lg:mb-0">
    <img class="w-full" x-show="shown" x-transition.opacity.duration.2000ms src="@asset('images/what-we-do-investments.jpg')" />
  </div>
</div>

<div x-data="{ shown: false }" x-intersect.half="shown = true" class="flex flex-col-reverse lg:flex-row-reverse bg-light-gray px-12 py-9 md:p-[11.36vw] gap-x-[14.6590vw]">
  <div class="flex flex-col justify-end lg:w-1/2">
    <h3 x-show="shown" x-transition.opacity.duration.2000ms class="font-serif text-5xl md:text-8xl lg:text-10xl leading-6 tracking-tight mb-6">We view each investment as a fresh opportunity to uncover value.</h3>
    <p x-show="shown" x-transition.opacity.duration.2000ms>With three decades of experience, most recently overseeing a real estate fund, we are able to manage investments as well as function as an advisor. We look at transactions as problem-solving opportunities, identifying value not uncovered by others. Our long-term, strategic partners enhance our work and create new pathways to success.</p>
  </div>

  <div class="lg:w-1/2 mb-12 lg:mb-0">
    <img class="w-full" x-show="shown" x-transition.opacity.duration.2000ms src="@asset('images/what-we-do-asset-management.jpg')" class="rounded-full" />
  </div>
</div>

<div x-data="{ shown: false }" x-intersect.half="shown = true" class="flex flex-col-reverse lg:flex-row bg-light-gray px-12 py-9 md:p-[11.36vw] gap-x-[14.6590vw]">
  <div class="flex flex-col justify-end lg:w-1/2">
    <h3 x-show="shown" x-transition.opacity.duration.2000ms class="font-serif text-5xl md:text-8xl lg:text-10xl leading-6 tracking-tight mb-6">We view each investment as a fresh opportunity to uncover value.</h3>
    <p x-show="shown" x-transition.opacity.duration.2000ms>With three decades of experience, most recently overseeing a real estate fund, we are able to manage investments as well as function as an advisor. We look at transactions as problem-solving opportunities, identifying value not uncovered by others. Our long-term, strategic partners enhance our work and create new pathways to success.</p>
  </div>

  <div class="lg:w-1/2 mb-12 lg:mb-0">
    <img class="w-full" x-show="shown" x-transition.opacity.duration.2000ms src="@asset('images/what-we-do-advisory.jpg')" />
  </div>
</div>
