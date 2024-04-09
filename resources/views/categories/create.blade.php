<x-app-layout>
    <!-- Session Status -->
    <div class="flex justify-center items-center h-screen">
        <div class="w-full sm:max-w-md mt-6 px-6 py-4  dark:bg-gray-800 shadow-md overflow-hidden sm:rounded-lg">

            <h2 class="text-red-600 text-2xl font-bold text-center">Create Category</h2>
           <form method="POST" action="{{ route('categories.store') }}" class="" >
               @csrf
               <div>
                   <x-input-label for="name" :value="__('Category Name')" />
                   <x-text-input id="name" placeholder="Insert Category" class="block mt-1 w-full p-2 border-2 border-red-600" type="name" name="name" :value="old('name')" required autofocus autocomplete="username" />
                   <x-input-error :messages="$errors->get('name')" class="mt-2" />
               </div>
               <div class="flex items-center justify-end mt-4">
                   <x-primary-button class="ms-3">
                       {{ __('Create') }}
                   </x-primary-button>
               </div>
           </form>
       </div>

    </div>
</x-app-layout>
