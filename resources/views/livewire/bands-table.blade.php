<div>
    <div class="border-b border-gray-200 pb-5 sm:flex sm:items-center sm:justify-between mb-6">
        <h3 class="text-base font-semibold leading-6 text-gray-900">Bands</h3>
        <div class="mt-3 sm:mt-0 sm:ml-4">
            <a href="{{ route('festivals') }}" type="button" class="inline-flex items-center rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Festivals</a>
        </div>
    </div>

    {{ $this->table }}
</div>
