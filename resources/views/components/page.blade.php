<x-layout>
  <!-- This example requires Tailwind CSS v2.0+ -->
  <div class="flex max-w-7xl mx-auto">
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

</x-layout>