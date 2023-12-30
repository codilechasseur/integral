<div class="text-white h-screen relative">
  <img src="@asset('images/home-hero.png')" class="h-screen w-screen object-cover" />

  <div class="absolute bottom-0 left-0 px-16 pb-12">
    <h2 class="font-serif text-10xl leading-11 tracking-tight">integral:</h2>

    <div class="flex gap-x-7">
      <p>[in • teg • ruhl]</p>
      <p>adjective</p>
    </div>

    <hr />

    <ol class="list-decimal list-inside">
      <li>Founded on integrity, having a strong moral compass</li>
      <li>Essential to a full and comprehensive perspective</li>
      <li>Built on astute insights and analysis</li>
    </ol>
  </div>
</div>


<div class="bg-dust flex flex-row">
  <div class="bg-dark-gray w-2/5">
  </div>

  <div class="flex flex-row" x-data="{selected:1}">
    <div class="flex">
      <div class="relative overflow-hidden transition-all max-w-0 duration-700" style="" x-ref="container1" x-bind:style="selected == 1 ? 'max-width: ' + $refs.container1.scrollWidth + 'px' : ''">
        Content
      </div>

      <button
        type="button"
        class="w-full px-8 py-6 text-left"
        @click="selected !== 1 ? selected = 1 : selected = null"
      >
        @svg('images/icon-arrows')
      </button>
    </div>

    <div class="flex">
      <div class="relative overflow-hidden transition-all max-w-0 duration-700" style="" x-ref="container2" x-bind:style="selected == 2 ? 'max-width: ' + $refs.container2.scrollWidth + 'px' : ''">
        Content 2
      </div>

      <button
        type="button"
        class="w-full px-8 py-6 text-left"
        @click="selected !== 2 ? selected = 2 : selected = null"
      >
        @svg('images/icon-arrow')
      </button>
    </div>

    <div class="flex">
      <div class="relative overflow-hidden transition-all max-w-0 duration-700" style="" x-ref="container3" x-bind:style="selected == 3 ? 'max-width: ' + $refs.container3.scrollWidth + 'px' : ''">
        Content 3
      </div>

      <button
        type="button"
        class="w-full px-8 py-6 text-left"
        @click="selected !== 3 ? selected = 3 : selected = null"
      >
        @svg('images/icon-reticle')
      </button>
    </div>
  </div>
</div>

<a href="#" class="button draw meet">Button</a>
