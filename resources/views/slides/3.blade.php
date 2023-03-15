<x-app-layout>
    <a href="{{ route('slide', ['slide' => 4]) }}" style="font-family: 'Rock Salt', cursive;">
        <h1 class="text-8xl text-center">The Plan</h1>
        <hr class="my-6">
        <ul class="text-4xl mb-5 space-y-10">
            <li>* Document the feature</li>
            <li>* Walk through it at the meetup</li>
            <li>* Add code samples to the docs at the meetup</li>
            <li>* End presentation by submitting PR to Laravel docs</li>
        </ul>
    </a>
</x-app-layout>
