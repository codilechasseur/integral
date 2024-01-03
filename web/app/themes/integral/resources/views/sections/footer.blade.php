<footer>
  {{-- @php(dynamic_sidebar('sidebar-footer')) --}}

  <div class="pt-10 px-16 text-white bg-[url('/images/bg-footer-mobile.png')] md:bg-[url('/images/bg-footer-tablet.png')] lg:bg-[url('/images/bg-footer-desktop.png')] bg-cover">
    <div class="flex justify-between">
      <div class="flex flex-col gap-4">
        <span class="uppercase">Contact:</span>

        <ul class="flex gap-[18px] divide-x divide-white">
          <li><a href="tel://000.000.00.00">000.000.00.00</a></li>
          <li><a href="mailto:info@integral.ca">info@integral.ca</a></li>
          <li><a href="https://linkedin.com">LinkedIn</a></li>
        </ul>
      </div>

      <ul class="flex justify-end flex-wrap uppercase gap-x-4 gap-y-2.5 max-w-md">
        <li>Vancouver</li>
        <li>Calgary</li>
        <li>Toronto</li>
        <li>Montreal</li>
        <li>Victoria</li>
        <li>Edmonton</li>
        <li>Saskatoon</li>
      </ul>
    </div>

    @svg('images/tagline', 'mt-40 ml-auto')
  </div>

  <div class="bg-charcoal py-4 px-16 text-white text-right text-3xs">
    @ Integral Strategic. All rights reserved
  </div>
</footer>
