<nav class="flex-1 space-y-8 bg-white" aria-label="Sidebar">
  @foreach ($menu as $item)
    <div class="space-y-1">
      <div class="flex items-center pl-3 pr-3 lg:pr-0">
        <h3 class="flex-1 text-xs font-semibold text-gray-900 uppercase tracking-wider" id="projects-headline">
          {{ $item->title }}
        </h3>
        @isset($item->beta)
          <span class="text-xs bg-blue-50 px-2.5 py-0.5 rounded-full font-semibold">
            <a class="text-blue-500 hover:text-blue-400 transition-all duration-300 ease-in-out" href="https://github.com/Gustavinho/laravel-views/releases/tag/{{ $item->beta }}" target="_blank">
              {{ $item->beta }}
            </a>
          </span>
        @endisset
        @isset($item->new)
          <span class="text-xs bg-green-50 text-green-400 px-2.5 py-0.5 rounded-full font-semibold">
            New
          </span>
        @endisset
      </div>
      <div class="space-y-1" role="group" aria-labelledby="projects-headline">
        @foreach ($item->submenu as $submenu)
          <a href="{{ $submenu->route }}" class="group flex items-center px-3 py-2 text-sm font-medium rounded-md {{ request()->is($submenu->route) ? 'bg-primary-50 text-primary-500' : 'text-gray-500 hover:text-gray-900' }} ">
            <span class="truncate">
              {{ $submenu->title }}
            </span>
          </a>
        @endforeach
      </div>
    </div>
  @endforeach
</nav>