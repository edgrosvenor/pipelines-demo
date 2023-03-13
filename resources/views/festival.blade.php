<x-app-layout>
    <div class="border-b border-gray-200 pb-5">
        <h3 class="text-base font-semibold leading-6 text-gray-900">{{ $festival->name }}</h3>
    </div>

    <div class="px-4 sm:px-6 lg:px-8">
        <div class="mt-8 flow-root">
            <div class="-my-2 -mx-4 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
                    <table class="min-w-full divide-y divide-gray-300">
                        <thead>
                        <tr>
                            <th scope="col" class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-3">Name</th>
                            <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Cost</th>
                            <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Est. Draw</th>
                            <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Avg Fan Age</th>
                            <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Distance</th>
                            <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Availability</th>
                            <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Reliablity</th>
                            <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Value</th>
                        </tr>
                        </thead>
                        <tbody class="bg-white">
                        @foreach ($invitations as $invitation)
                        <tr @if ($loop->even) class="bg-gray-50" @endif >
                            <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-3">{{ $invitation->band?->name }}</td>
                            <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ number_format($invitation->cost, 2, ',') }} CHF</td>
                            <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ $invitation->draw }}</td>
                            <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ $invitation->band?->age }}</td>
                            <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ $invitation->distance }} km</td>
                            <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ ucfirst($invitation->status) }}</td>
                            <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ $invitation->band->reliability }}%</td>
                            <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ $invitation->value != 0 ? number_format($invitation->value, 2, '.') : '?' }}</td>
                        </tr>
                        @endforeach
                        <!-- More people... -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

