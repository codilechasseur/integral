<div x-data="{ shownHero: false }" x-intersect.half="shownHero = true" class="text-white h-screen relative">
  <img x-show="shownHero" x-transition.opacity.duration.750ms src="@asset('images/hero-about-mobile.jpg')" class="md:hidden h-screen w-screen object-cover" />
  <img x-show="shownHero" x-transition.opacity.duration.750ms src="@asset('images/hero-about-tablet.jpg')" class="hidden md:block lg:hidden h-screen w-screen object-cover" />
  <img x-show="shownHero" x-transition.opacity.duration.750ms src="@asset('images/hero-about-desktop.jpg')" class="hidden lg:block h-screen w-screen object-cover" />

  <div class="absolute bottom-0 left-0 px-4 md:px-8 lg:px-16 pb-6 md:pb-8 lg:pb-12 lg:w-1/2 lg:max-w-[778px] flex flex-col gap-y-6 lg:gap-y-10">
    <h2 x-show="shownHero" x-transition.opacity.duration.3000ms class="font-serif text-4xl md:text-8xl lg:text-10xl leading-8 md:leading-6 tracking-tight">In <em>everything</em> we do on behalf of our clients we instil <em>trust</em> by upholding the highest <em>standard</em> of ethics in our practice.</h2>

    <p x-show="shownHero" x-transition.opacity.duration.3000ms class="text-xs md:text-sm lg:text-base leading-11 font-light">Founded by Andrew Tong, Integral Strategic Real Estate is a boutique real estate investment, management and advisory firm that brings three decades of extensive experience, due diligence and accountability to every engagement. We partner with institutional investors, not-for-profit organizations and high net-worth families to add value to their portfolio, solve real estate challenges and ultimately optimize opportunities.</p>
  </div>
</div>

<div x-data="{ shownOne: false }" x-intersect.half="shownOne = true" class="flex flex-col lg:flex-row">
  <div class="lg:w-7/12">
    <img x-show="shownOne" x-transition.opacity.duration.2000ms src="@asset('images/about-strategic-approach.jpg')" class="block w-full h-auto md:h-full object-cover" />
  </div>

  <div class="lg:w-5/12 p-4 md:p-8 lg:p-16 flex flex-col justify-end gap-y-11 bg-light-gray lg:bg-gradient-to-b from-dark-gray to-charcoal">
    <h3 x-show="shownOne" x-transition.opacity.duration.2000ms class="-mt-[75px] md:-mt-[86px] lg:mt-0 text-9xl lg:text-12xl leading-10 lg:leading-4 tracking-wider text-medium-gray font-serif"><em class="text-white block">Strategic</em> Approach</h3>
    <div x-show="shownOne" x-transition.opacity.duration.2000ms class="text-lg md:text-xl lg:text-3xl leading-10 md:leading-9 lg:leading-10 tracking-tight text-charcoal lg:text-white font-light">
      <p class="text-lg md:text-xl lg:text-3xl max-w-xl">We take a measured, holistic approach to analyzing each project. Our proven process means we work through defined and distinct phases to build a long-term strategic plan. We are results-driven, focused on building value as we develop and maintain trusted and high-integrity relationships.</p>
    </div>
  </div>
</div>

<section class="first progress-wrapper bg-light-gray">
  <div class="progress-indicator"></div>
  <div class="progress-item px-4 md:px-8 lg:px-16 py-16 md:py-20 lg:py-24 grid lg:grid-cols-4 gap-y-12 lg:gap-y-32">
    <div class="lg:px-10 first:pt-0 last:pb-0 lg:border-r border-black">
      <h3 class="font-serif text-4xl lg:text-7xl text-dark-gray leading-5 mb-6"><span class="text-medium-gray block">Creating</span> Solutions</h3>
      <p class="text-xs lg:text-base font-light">Real estate is unique, so we deliver a highly individualized approach that reflects project-specific challenges and needs. When faced with difficulties and complexities, we thrive on finding creative ways to problem solve.</p>
    </div>

    <div class="lg:px-10 first:pt-0 last:pb-0">
      <h3 class="font-serif text-4xl lg:text-7xl text-dark-gray leading-5 mb-6"><span class="text-medium-gray block">Optimizing</span> Value</h3>
      <p class="text-xs lg:text-base font-light">With decades of experience in portfolio management, acquisitions, financing, and capital planning, we provide a seasoned perspective that maximizes value.</p>
    </div>

    <div class="lg:px-10 first:pt-0 last:pb-0 lg:border-r border-black">
      <h3 class="font-serif text-4xl lg:text-7xl text-dark-gray leading-5 mb-6"><span class="text-medium-gray block">Defining</span> Opportunity</h3>
      <p class="text-xs lg:text-base font-light">Our phased engagements are designed to build a clear path forward within complex organizations and partnerships.</p>
    </div>

    <div class="lg:px-10 first:pt-0 last:pb-0">
      <h3 class="font-serif text-4xl lg:text-7xl text-dark-gray leading-5 mb-6"><span class="text-medium-gray block">Managing</span> Risk</h3>
      <p class="text-xs lg:text-base font-light">We help effectively manage volatility and identify potential, so we can build a legacy of value.</p>
    </div>
  </div>
</section>

<div x-data="{ shownTwo: false }" x-intersect.half="shownTwo = true" class="flex flex-col lg:flex-row-reverse">
  <div class="lg:w-7/12">
    <img x-show="shownTwo" x-transition.opacity.duration.2000ms src="@asset('images/about-our-values.jpg')" class="block w-full h-auto md:h-full object-cover" />
  </div>

  <div class="lg:w-5/12 p-4 md:p-8 lg:p-16 flex flex-col justify-end gap-y-11 bg-light-gray lg:bg-gradient-to-b from-dark-gray to-charcoal grow">
    <h3 x-show="shownTwo" x-transition.opacity.duration.2000ms class="-mt-[75px] md:-mt-[86px] lg:mt-0 text-9xl lg:text-12xl leading-10 lg:leading-4 tracking-wider text-medium-gray font-serif"><em class="text-white block">Our</em> Values</h3>
    <div x-show="shownTwo" x-transition.opacity.duration.2000ms class="text-lg md:text-xl lg:text-3xl leading-10 md:leading-9 lg:leading-10 tracking-tight text-charcoal lg:text-white font-light">
      <p class="text-lg md:text-xl lg:text-3xl max-w-xl">We hold true to our values every day, establishing long-term relationships that are built on honesty, transparency and a track record of results.</p>
    </div>
  </div>
</div>

<section class="first progress-wrapper bg-light-gray">
  <div class="progress-indicator"></div>
  <div class="progress-item px-4 md:px-8 lg:px-16 py-16 md:py-20 lg:py-24 grid lg:grid-cols-4 gap-y-12 lg:gap-y-32">
    <div class="lg:px-10 lg:first:pt-0 lg:last:pb-0 lg:border-r border-black">
      <h3 class="font-serif text-4xl lg:text-7xl text-dark-gray leading-5 mb-6">Integrity</h3>
      <p class="text-xs lg:text-base font-light">Every day we instill trust by upholding the highest standard of ethics in our practice.</p>
    </div>

    <div class="lg:px-10 lg:first:pt-0 lg:last:pb-0">
      <h3 class="font-serif text-4xl lg:text-7xl text-dark-gray leading-5 mb-6">Directness</h3>
      <p class="text-xs lg:text-base font-light">We pride ourselves on providing a clear understanding of risk and our best recommendations to mitigate it.</p>
    </div>

    <div class="lg:px-10 lg:first:pt-0 lg:last:pb-0 lg:border-r border-black">
      <h3 class="font-serif text-4xl lg:text-7xl text-dark-gray leading-5 mb-6">Relationships</h3>
      <p class="text-xs lg:text-base font-light">We bring our extensive network of long-standing relationships to every engagement and deeply appreciate the value of personal trust and connection.</p>
    </div>

    <div class="lg:px-10 lg:first:pt-0 lg:last:pb-0">
      <h3 class="font-serif text-4xl lg:text-7xl text-dark-gray leading-5 mb-6">Collaboration</h3>
      <p class="text-xs lg:text-base font-light">We work with all stakeholders to clearly set investment targets, then provide the tools and guidance needed to achieve these results. Our engagement is driven by the spirit of teamwork essential to success.</p>
    </div>

    <div class="lg:px-10 lg:first:pt-0 lg:last:pb-0 lg:border-r border-black">
      <h3 class="font-serif text-4xl lg:text-7xl text-dark-gray leading-5 mb-6">Creativity</h3>
      <p class="text-xs lg:text-base font-light">We are inspired by the uniqueness of each challenge and deliver distinct, insight-driven solutions rather than a traditional formula.</p>
    </div>

    <div class="lg:px-10 lg:first:pt-0 lg:last:pb-0">
      <h3 class="font-serif text-4xl lg:text-7xl text-dark-gray leading-5 mb-6">Excellence</h3>
      <p class="text-xs lg:text-base font-light">Every idea, opportunity or challenge we face is explored or solved with a deep commitment to finding the best solution possible.</p>
    </div>
  </div>
</section>

<section class="second progress-wrapper bg-medium-gray lg:bg-light-gray">
  <div class="progress-indicator"></div>
  <div class="progress-item flex flex-col-reverse lg:flex-row p-4 md:p-8 lg:p-[11.36vw] gap-x-[14.6590vw]">
    <div class="flex flex-col justify-end lg:w-1/2">
      <h3 class="text-sm uppercase mb-4 lg:mb-10">Leadership</h3>
      <h4 class="font-serif text-dark-gray text-9xl md:text-11xl lg:text-12xl leading-10 lg:leading-4 tracking-wider mb-8">Andrew Tong</h4>
      <p class="text-xs lg:text-base leading-11 text-charcoal font-light">Andrew has dedicated his career to the real estate industry. Over the past thirty years, he has a built a consistent track record of delivering and creating value for stakeholders. His deep and extensive experience includes such roles as Chief Investment Officer of a pension-owned Canadian real estate development and investment firm and seven years as a Managing Director of a Canadian real estate fund valued at $3 billion. Through his leadership and C-suite roles, he has honed a rare set of skills and long-held relationships in the industry. Now with his own practice, Andrew brings his well-earned reputation for pragmatism, directness and results to Integral Strategic Real Estate.</p>
      <a href="" class="button dark mt-12"><span><span>Linkedin</span></span></a>
    </div>

    <div class="lg:w-1/2 mb-12 lg:mb-0">
      <img src="@asset('images/about-head-shot.jpg')" />
    </div>
  </div>
</section>
