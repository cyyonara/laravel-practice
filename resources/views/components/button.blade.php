@props(["button_type" => "link"])

@if ($button_type === "link")
  <a {{ $attributes }} class="bg-gray-900 text-white hover:bg-gray-700 hover:text-white">
    {{ $slot }}
  </a>  
@else
  <button {{ $attributes }} class="bg-gray-900 text-white hover:bg-gray-700 hover:text-white">
    {{ $slot }}
  </button>
@endif