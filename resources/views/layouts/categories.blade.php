<div class="flex flex-wrap justify-evenly  bg-white">
    @foreach ($categories as $category)
        <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex ">
            <x-nav-link class="text-red-500 bg-red-300 px-4 py-2 border-red-300 border-r rounded-lg my-2">
                {{ $category->name }}
            </x-nav-link>
        </div>
    @endforeach

</div>
