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
      @livewire($page->component)
    </div>

    <div class="text-sm mt-8 pb-8">
      <h3 class="text-xl font-bold text-gray-900">Code example</h1>
        <pre class="language-php rounded-lg text-sm px-8" style="background: #202938">
          <code class="px-8">
{{ file_get_contents(app_path() . '/Http/Livewire/'.str_replace('-', '', ucwords($page->component, '-')).'.php') }}
          </code>
        </pre>
    </div>
    </div>
  </div>
</x-page>