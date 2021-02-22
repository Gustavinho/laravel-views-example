@push('meta')
  <x-social-meta
    title="{{ $page->title }}"
    description="{{ $page->subtitle }}"
  />
@endpush

<x-page>
  <div class="absolute inset-0 py-6 px-4 sm:px-6 lg:px-8 text-gray-600">
    <h1 class="text-4xl font-extrabold text-gray-900">
      {{ $page->title }}
    </h1>
    <p>{{ $page->subtitle }}</p>

    <div class="mt-8">
      @isset ($page->model)
        @livewire($page->component, ['model' => 1])
      @else
        @livewire($page->component)
      @endisset
    </div>

    <div class="text-sm mt-8 pb-8">
      <h3 class="text-xl font-bold text-gray-900">Code example</h1>
      <x-code file="{{ app_path() . '/Http/Livewire/'.(collect(explode('.', $page->component)))->map(fn ($path) => str_replace(['-', '.'], ['', '/'], ucwords($path, '-')))->implode('/').'.php' }}" />

      @isset($page->code)
        @foreach ($page->code as $code)
          <h3 class="text-xl font-bold text-gray-900 mt-8">{{ $code->title }}</h1>
          <x-code :language="$code->language ?? 'php'" file="{{ base_path() . $code->file }}" />
        @endforeach
      @endisset
    </div>
    </div>
  </div>
</x-page>