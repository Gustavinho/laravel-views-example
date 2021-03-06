<div class="px-4">
  <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
    @foreach (range(1, 3) as $tile)
      <div class="w-full shadow rounded">
        <div class="w-full p-4 bg-white rounded border-l-4 border-pink-400">
          <div class="flex items-center">
            <div class="p-3 bg-pink-100 text-pink-500 rounded-full mr-3">
              <i data-feather="trending-up"></i>
            </div>
            <div class="flex flex-col justify-center">
              <div class="text-lg text-gray-900">230k</div>
              <div class="text-sm text-gray-400">Sales</div>
            </div>
          </div>
        </div>
      </div>
    @endforeach
  </div>
</div>