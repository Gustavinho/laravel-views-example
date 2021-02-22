@props(['language' => 'php', 'file'])


<pre class="language-{{ $language }} rounded-lg text-sm px-8" style="background: #202938">
  <code class="px-8">
{{ file_get_contents($file) }}
  </code>
</pre>