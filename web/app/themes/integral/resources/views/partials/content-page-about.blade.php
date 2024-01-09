<div class="text-white h-screen relative">
  <img src="@asset('images/hero-about-mobile.jpg')" class="md:hidden h-screen w-screen object-cover" />
  <img src="@asset('images/hero-about-tablet.jpg')" class="hidden md:block lg:hidden h-screen w-screen object-cover" />
  <img src="@asset('images/hero-about-desktop.jpg')" class="hidden lg:block h-screen w-screen object-cover" />

  <div class="absolute bottom-0 left-0 px-4 md:px-8 lg:px-16 pb-6 md:pb-8 lg:pb-12 lg:w-1/2 lg:max-w-[778px] flex flex-col gap-y-6 lg:gap-y-10">
    <h2 class="font-serif text-4xl md:text-8xl lg:text-10xl leading-8 md:leading-6 tracking-tight">In <em>everything</em> we do on behalf of our clients we instil <em>trust</em> by upholding the highest <em>standard</em> of ethics in our practice.</h2>

    <p class="text-xs md:text-sm lg:text-base leading-11 font-light">Founded by Andrew Tong, Integral is a real estate investment, management and advisory firm that brings three decades of financial due diligence and accountability to every client engagement. We partner with institutional investors, not-for-profit organizations and high net-worth families to add value to their portfolio, solve real estate challenges and ultimately optimize opportunities.</p>
  </div>
</div>

<div class="flex flex-col lg:flex-row">
  <div>
    <img src="@asset('images/about-strategic-approach.jpg')" class="block" />
  </div>

  <div class="-mt-16 lg:mt-0 lg:w-[44vw] p-4 md:p-8 lg:p-16 flex flex-col justify-end gap-y-11 bg-light-gray lg:bg-gradient-to-b from-dark-gray to-charcoal">
    <h3 class="text-12xl leading-4 tracking-wider text-medium-gray font-serif"><em class="text-white block">Strategic</em> Approach</h3>
    <div class="text-3xl leading-10 tracking-tight text-charcoal lg:text-white font-light">
      <p>We take a measured, holistic approach to analyzing each project. Our proven process means we work through defined and distinct phases to build a long-term strategic platform for our clients’ investments.</p>
      <p>We are results-driven, focused on building wealth as we build trusted relationships.</p>
    </div>
  </div>
</div>

<div class="bg-light-gray px-4 md:px-8 lg:px-16 py-24 grid grid-cols-2 lg:grid-cols-4 gap-x-24">
  <div>
    <h3>Creating Solutions</h3>
    <p>Client opportunities are unique, so we deliver a highly individualized approach that reflects specific requirements. When faced with challenging situations, we thrive on finding creative ways to overcome complexities.</p>
  </div>

  <div>
    <h3>Optimizing Value</h3>
    <p>With decades of experience in portfolio management, acquisitions, financing, and capital planning, we provide a seasoned perspective that maximizes value.</p>
  </div>

  <div>
    <h3>Defining Opportunity</h3>
    <p>Our phased engagements are designed to build a clear path forward within complex organizations or relationships.</p>
  </div>

  <div>
    <h3>Managing Risk</h3>
    <p>We help clients effectively manage volatility and identify potential for their portfolio, so they can build a legacy of value.</p>
  </div>
</div>

<div class="flex flex-col lg:flex-row-reverse">
  <div>
    <img src="@asset('images/about-our-values.jpg')" class="block" />
  </div>

  <div class="-mt-16 lg:mt-0 lg:w-[44vw] p-4 md:p-8 lg:p-16 flex flex-col justify-end gap-y-11 bg-light-gray lg:bg-gradient-to-b from-dark-gray to-charcoal">
    <h3 class="text-12xl leading-4 tracking-wider text-medium-gray font-serif"><em class="text-white block">Our</em> Values</h3>
    <div class="text-3xl leading-10 tracking-tight text-white font-light">
      <p>We hold true to our values every day, establishing long-term relationships that are built on honesty, transparency and a track record of results.</p>
    </div>
  </div>
</div>

{{-- <div class="progress" :class="active ? 'active' : ''" x-data="{ active: false, height: 0, handleScroll() { if (this.active) { var top = $el.getBoundingClientRect().top; var viewportCenter = window.innerHeight / 2; this.height = `${viewportCenter - top}px`; } } }" x-intersect:enter.margin.-50%.0="active = true;" x-intersect:leave.margin.-50%.0="active = false" @scroll.window="handleScroll">
  <div class="dot"></div>
  <div class="line" :style="{ height }"></div>
</div> --}}

<!-- Uses auto init() https://github.com/KevinBatdorf/alpine-auto-init -->
{{-- <div
	x-data="scrollHandler(document.getElementById('the-article'))"
	x-cloak
	aria-hidden="true"
	@scroll.window="calculateHeight(window.scrollY)"
	class="fixed h-screen w-1 top-0 left-0 bg-gray-300">
	<div :style="`max-height:${height}%`" class="h-full bg-indigo-500"></div>
</div> --}}

<progress min="0" max="100" value="0"></progress>

<section class="bg-light-gray px-4 md:px-8 lg:px-16 py-24 grid grid-cols-2 lg:grid-cols-4 gap-x-24">
  <div>
    <h3>Integrity</h3>
    <p>Every day we instill trust in our clients by upholding the highest standard of ethics in our practice.</p>
  </div>

  <div>
    <h3>Directness</h3>
    <p>We pride ourselves on providing our clients with a clear understanding of risk and our best recommendations to mitigate it.</p>
  </div>

  <div>
    <h3>Relationships</h3>
    <p>We bring our extensive network of long-standing relationships to every client engagement and deeply appreciate the personal connections we build, embracing their goals as our own.</p>
  </div>

  <div>
    <h3>Collaboration</h3>
    <p>We work with our clients to clearly set investment targets, then provide the tools and guidance needed to achieve these results. Our client engagement is driven by the spirit of teamwork essential to success.</p>
  </div>

  <div>
    <h3>Creativity</h3>
    <p>We are inspired by the uniqueness of each challenge and deliver distinct, insight-driven solutions rather than a traditional formula.</p>
  </div>

  <div>
    <h3>Excellence</h3>
    <p>Every idea, opportunity or challenge we face is explored or solved with a deep commitment to finding the best solution possible for our clients. </p>
  </div>
</section>

<div class="flex flex-col-reverse lg:flex-row bg-light-gray p-4 md:p-8 lg:p-[11.36vw] gap-x-[14.6590vw]">
  <div class="flex flex-col justify-end lg:w-1/2">
    <h3>Leadership</h3>
    <h4 class="font-serif text-10xl leading-6 tracking-tight mb-6">Andrew Tong</h4>
    <p>In the early 1990s, when Andrew began his career in real estate, the industry was significantly different than today. As his responsibilities grew over these 30 years, so did his perspective on the power of insightful real estate investments. Through his leadership and C-suite roles, Andrew has a built a consistent track record of delivering and creating value for stakeholders. His deep and extensive experience, most recently managing a real estate fund, has honed a rare set of skills and long-held relationships in the industry. Now with his own practice, Andrew brings his well-earned reputation for pragmatism, directness and results to Integral Real Estate Advisory.</p>
    <a href="" class="button mt-12">Linkedin</a>
  </div>

  <div class="lg:w-1/2">
    <img src="@asset('images/about-head-shot.jpg')" />
  </div>
</div>
