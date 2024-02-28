<footer>
  {{-- @php(dynamic_sidebar('sidebar-footer')) --}}

  <div class="pt-5 lg:pt-10 px-4 md:px-8 lg:px-16 text-white bg-[url('/images/bg-footer-mobile.png')] md:bg-[url('/images/bg-footer-tablet.png')] lg:bg-[url('/images/bg-footer-desktop.png')] bg-cover">
    <div class="flex flex-col lg:flex-row justify-between">
      <div class="flex flex-col gap-4">
        <span class="uppercase">Contact:</span>

        <ul class="flex flex-col lg:flex-row gap-[18px] lg:gap-0">
          <li><a class="lg:px-4 lg:last:pl-0 lg:border-r" href="tel:6042402685">604.240.2685</a></li>
          <li><a class="lg:px-4 lg:border-r" href="mailto:info@integralstrategic.ca">info@integralstrategic.ca</a></li>
          <li><a class="lg:px-4 lg:last:pr-0" href="https://linkedin.com" target="_blank">LinkedIn</a></li>
        </ul>
      </div>

      {{-- <ul class="flex justify-end flex-wrap uppercase gap-x-4 gap-y-2.5 max-w-md  ml-auto lg:ml-0 mt-52 md:mt-[424px] lg:mt-0">
        <li>Vancouver</li>
        <li>Calgary</li>
        <li>Toronto</li>
        <li>Montreal</li>
        <li>Victoria</li>
        <li>Edmonton</li>
        <li>Saskatoon</li>
      </ul> --}}
    </div>

    @svg('images/tagline-mobile', 'md:hidden mt-48 ml-auto max-w-[10rem] w-full')
    @svg('images/tagline-tablet', 'hidden md:block lg:hidden mt-72 ml-auto max-w-[15rem]')
    @svg('images/tagline-desktop', 'hidden lg:block mt-40 ml-auto max-w-5xl')
  </div>

  <div class="flex justify-end gap-x-8 md:gap-x-11 lg:gap-x-9 bg-charcoal py-6 md:py-4 lg:py-4 px-4 md:px-8 lg:px-16 text-white text-right text-3xs">
    <p>&copy; Integral Strategic. All rights reserved</p>
    <a class="" href="/privacy-policy">Privacy Policy</a>
  </div>
</footer>
