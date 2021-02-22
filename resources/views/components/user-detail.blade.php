@props(['user'])

<div class="text-sm">
  <div class="flex flex-col md:items-center md:flex-row border-b border-gray-200">
    <div class="flex-1 border-b border-gray-200 md:border-none py-2">
      <div class="text-gray-500 font-medium px-2 md:px-4">
        Name
      </div>
      <div class="px-2 md:px-4">
        {{ $user->name }}
      </div>
    </div>
    <div class="flex-1 py-2 md:py-0">
      <div class="text-gray-500 font-medium px-2 md:px-4">
        Email
      </div>
      <div class="px-2 md:px-4">
        {{ $user->email }}
      </div>
    </div>
  </div>

  <div class="flex flex-col md:items-center md:flex-row border-b border-gray-200">
    <div class="flex-1 border-b border-gray-200 md:border-none py-2">
      <div class="text-gray-500 font-medium px-2 md:px-4">
        Active
      </div>
      <div class="px-2 md:px-4">
        {{ $user->active }}
      </div>
    </div>
    <div class="flex-1 py-2 md:py-0">
      <div class="text-gray-500 font-medium px-2 md:px-4">
        Type
      </div>
      <div class="px-2 md:px-4">
        <span class="inline-flex items-center px-3 py-0.5 rounded-full text-xs font-semibold bg-pink-50 text-pink-500">
          {{ ucfirst($user->type) }}
        </span>
      </div>
    </div>
  </div>

  <div class="flex flex-col md:items-center md:flex-row border-b border-gray-200">
    <div class="flex-1 border-b border-gray-200 md:border-none py-2">
      <div class="text-gray-500 font-medium px-2 md:px-4">
        Created
      </div>
      <div class="px-2 md:px-4">
        {{ $user->created_at->diffForHumans() }}
      </div>
    </div>
    <div class="flex-1 py-2 md:py-0">
      <div class="text-gray-500 font-medium px-2 md:px-4">
        Updated
      </div>
      <div class="px-2 md:px-4">
        {{ $user->updated_at->diffForHumans() }}
      </div>
    </div>
  </div>
</div>