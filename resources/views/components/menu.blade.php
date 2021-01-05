<nav class="flex-1 space-y-8 bg-white" aria-label="Sidebar">
  @foreach ($menu as $item)
    <div class="space-y-1">
      <h3 class="px-3 text-xs font-semibold text-gray-900 uppercase tracking-wider" id="projects-headline">
        {{ $item->title }}
      </h3>
      <div class="space-y-1" role="group" aria-labelledby="projects-headline">
        @foreach ($item->submenu as $submenu)
          <a href="{{ $submenu->route }}" class="group flex items-center px-3 py-2 text-sm font-medium rounded-md {{ request()->is($submenu->route) ? 'bg-purple-50 text-purple-500' : 'text-gray-600 hover:text-gray-900' }} ">
            <span class="truncate">
              {{ $submenu->title }}
            </span>
          </a>
        @endforeach
      </div>
    </div>
  @endforeach
</nav>