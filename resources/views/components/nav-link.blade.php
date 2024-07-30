 @props(['isActive' => false])

 <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
<a {{ $attributes }} 
  class="{{ $isActive ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }}
  rounded-md px-3 py-2 text-sm font-medium">
 {{ $slot }}
</a>