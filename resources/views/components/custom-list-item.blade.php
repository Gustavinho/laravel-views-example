@props(['actions', 'model', 'date'])

<div class="flex items-center space-x-4">
  <div class="w-12 h-12 relative">
    <img src="{{ $model->avatar }}" alt="{{ $model->name }}" class="w-full h-full object-cover rounded">
    @if ($model->active)
      <span class="absolute top-0 right-0 block h-4 w-4 transform -translate-y-1/2 translate-x-1/2 rounded-full bg-green-400 border-2 border-white"></span>
    @endif
  </div>

  <div class="flex-1">
    <span>{{ $model->name }}</span>
  </div>

  <div class="flex-1 text-right lg:text-left">
    <span class="inline-flex items-center px-3 py-0.5 rounded-full text-xs font-semibold bg-pink-50 text-pink-500">
      {{ ucfirst($model->type) }}
    </span>
  </div>

  <div class="flex-1 hidden lg:inline">
    <i>Rest of my custom content here...</i>
    <span class="flex text-xs text-gray-400">
      <i data-feather="calendar" class="w-4 h-4 mr-2"></i> {{ $date->format('Y-m-d H:i:s') }}
    </span>
  </div>

  <x-lv-actions :actions="$actions" :model="$model" />

</div>