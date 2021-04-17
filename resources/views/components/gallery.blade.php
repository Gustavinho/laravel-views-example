<div class="px-0 md:px-4 mt-8">
  <div class="font-bold text-xl text-gray-900 mb-4">
    Gallery
  </div>
  <div class="flex flex-nowrap overflow-x-auto space-x-4">
    @foreach (range(1, 6) as $image)
      <div class="flex-none w-64 h-48 bg-blue-300">
        <img src="{{ asset('storage/profile/' . $image . '.png') }}" alt="" class="w-full h-full object-cover rounded">
      </div>
    @endforeach
  </div>
</div>