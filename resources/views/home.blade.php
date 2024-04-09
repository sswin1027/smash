<x-app-layout>
    <div class="flex justify-evenly h-16">
        @foreach ($categories as $category)
            <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                <x-nav-link>
                    {{ $category->name }}
                </x-nav-link>
            </div>
        @endforeach

    </div>
</x-app-layout>
