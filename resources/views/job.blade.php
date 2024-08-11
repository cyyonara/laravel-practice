<x-mainLayout>
  <x-slot:heading>
    {{ $job["title"] }}
  </x-slot:heading>

  <div class="flex mt-6">
    <div class="flex flex-col">
      <span class="text-xl">
        <strong>
          {{ $job["title"] }}
        </strong>
      </span>
      <span>Salary: <span class="font-semibold text-gray-600">{{ $job["salary"] }}</span></span>
      <p class="mt-2">{{ $job["description"] }}</p>
    </div>
  </div>
</x-mainLayout>