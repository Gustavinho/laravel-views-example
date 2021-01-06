<x-base>
  <!-- This example requires Tailwind CSS v2.0+ -->
<div x-data="{ mobileMenu: false }" class="flex max-w-7xl mx-auto">
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
            <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
          </button>
        </div>
        <div class="flex-1 h-0 pt-5 pb-4 overflow-y-auto">
          <div class="flex-shrink-0 flex items-center px-4 mb-8">
            <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/workflow-logo-indigo-600-mark-gray-900-text.svg" alt="Workflow">
          </div>
          <x-menu />
        </div>
      </div>
      <div class="flex-shrink-0 w-14" aria-hidden="true">
        <!-- Force sidebar to shrink to fit close icon -->
      </div>
    </div>
  </div>

  <!-- Static sidebar for desktop -->
  <div class="fixed hidden lg:flex lg:flex-shrink-0 h-screen overflow-y-auto top-16">
    <div class="flex flex-col w-64 sticky h-auto">
      <!-- Sidebar component, swap this element with another sidebar if you like -->
      <div class="flex flex-col flex-grow pt-5 pb-4 overflow-y-auto">
        <div class="mt-4 flex-grow flex flex-col relative">
          <x-menu />
        </div>
      </div>
    </div>
  </div>

  <div class="flex flex-col min-w-0 flex-1 lg:ml-64">
    <div class="flex-1 relative z-0 flex">
      <main class="flex-1 relative z-0 focus:outline-none xl:order-last" tabindex="0">
        <!-- Start main area-->
        {{ $slot }}
        <!-- End main area -->
      </main>
    </div>
  </div>
</div>

</x-base>