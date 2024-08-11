<x-mainLayout>
  <x-slot:heading>
    Home Page
  </x-slot:heading>

  <div class="flex gap-5 flex-wrap">
    @foreach ($jobs as $job)
        <div class="flex items-end rounded-lg bg-white p-6 shadow-lg basis-[30%]">
          <div class="flex flex-col gap-y-2">
            <div class="flex items-center gap-x-2">
              <span class="text-xl"><strong>{{ $job["title"] }}</strong></span>
              <span class="text-gray-500">{{ $job["salary"] }}</span>
            </div>
            <p>{{ $job["description"] }}</p>
            <a href="/jobs/{{ $job["id"] }}">
              <button class="bg-gray-800 text-white py-2 px-3 rounded-lg mt-3">View</button>
            </a>
          </div>
        </div>
    @endforeach
  </div>
</x-mainLayout>