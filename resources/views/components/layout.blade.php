<x-base>
  <div class="py-0.5 w-full flex justify-center bg-gradient-to-r from-pink-400 to to-primary-500">
    <span class="text-white font-medium text-sm">
      Using v2.3.0-rc3
    </span>
  </div>
  <div x-data="{ mobileMenu: false }" class="border-b border-gray-200 px-4 py-2 sticky top-0 w-full bg-white z-10">
    <!-- Off-canvas menu for mobile, show/hide based on off-canvas menu state. -->
    <div x-show="mobileMenu" class="lg:hidden">
      <div class="fixed inset-0 flex z-40">
        <!--
          Off-canvas menu overlay, show/hide based on off-canvas menu state.

          Entering: "transition-opacity ease-linear duration-300"
            From: "opacity-0"
            To: "opacity-100"
          Leaving: "transition-opacity ease-linear duration-300"
            From: "opacity-100"
            To: "opacity-0"
        -->
        <div class="fixed inset-0">
          <div class="absolute inset-0 bg-gray-600 opacity-75"></div>
        </div>
        <!--
          Off-canvas menu, show/hide based on off-canvas menu state.

          Entering: "transition ease-in-out duration-300 transform"
            From: "-translate-x-full"
            To: "translate-x-0"
          Leaving: "transition ease-in-out duration-300 transform"
            From: "translate-x-0"
            To: "-translate-x-full"
        -->
        <div tabindex="0" class="relative flex-1 flex flex-col max-w-xs w-full bg-white focus:outline-none">
          <div @click.away="mobileMenu = false" class="absolute top-0 right-0 -mr-12 pt-2">
            <button @click="mobileMenu = false" type="button" class="ml-1 flex items-center justify-center h-10 w-10 rounded-full focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white">
              <span class="sr-only">Close sidebar</span>
              <!-- Heroicon name: x -->
              <i data-feather="x-circle" class="text-white"></i>
            </button>
          </div>
          <div class="flex-1 h-0 pt-5 pb-4 overflow-y-auto">
            <div class="flex-shrink-0 flex items-center px-4 mb-8">
              <a href="/">
                <span class="text-900 font-bold text-xl px-2">Laravel views</span>
              </a>
            </div>
            <x-menu />
          </div>
        </div>
        <div class="flex-shrink-0 w-14" aria-hidden="true">
          <!-- Force sidebar to shrink to fit close icon -->
        </div>
      </div>
    </div>
    <div class="flex items-center justify-between mx-auto max-w-7xl">
      <a href="/">
        <span class="text-900 font-bold text-2xl px-2">Laravel views</span>
      </a>
      <div class="flex items-center">
        <a href="https://twitter.com/gustavinho88" class="flex items-center justify-center rounded-full p-1 h-12 w-12">
          <span class="sr-only">Twitter</span>
          <i data-feather="twitter" class="h-5 w-5 fill-current text-gray-400 hover:text-blue-500 focus:outline-none focus:bg-blue-500 focus:text-white transition duration-150 ease-in-out "></i>
        </a>
        <a href="https://github.com/Gustavinho/laravel-views" class="flex items-center justify-center rounded-full p-1 h-12 w-12">
          <span class="sr-only">Github</span>
          <x-fab-github class="h-6 w-6 fill-current text-gray-400 hover:text-gray-900 focus:outline-none focus:bg-gray-900 focus:text-white transition duration-150 ease-in-out "/>
        </a>
        <button @click="mobileMenu = true" type="button" class="lg:hidden -mr-3 h-12 w-12 inline-flex items-center justify-center rounded-md text-gray-500 hover:text-gray-900">
          <span class="sr-only">Open sidebar</span>
          <!-- Heroicon name: menu -->
          <i data-feather="menu"></i>
        </button>
      </div>
    </div>
  </div>
  <div>
    {{ $slot }}
  </div>
</x-base>