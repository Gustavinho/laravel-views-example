<x-layout>
  <div class="w-full max-w-7xl mx-auto">
    <!-- This example requires Tailwind CSS v2.0+ -->
    <div class="flex">
      <!-- Static sidebar for desktop -->
      <div class="hidden lg:flex lg:flex-shrink-0 h-screen overflow-y-auto top-16">
        <div class="flex flex-col w-64 h-auto">
          <!-- Sidebar component, swap this element with another sidebar if you like -->
          <div class="flex flex-col flex-grow pt-5 pb-4 overflow-y-auto">
            <div class="mt-4 flex-grow flex flex-col">
              <x-menu />
            </div>
          </div>
        </div>
      </div>

      <div class="min-w-0 flex-1">
        <main>
          <!-- Start main area-->
          {{ $slot }}
          <!-- End main area -->
        </main>
      </div>
    </div>
  </div>

</x-layout>