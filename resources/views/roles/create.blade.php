<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Roles') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("Here you can create roles.") }}

                    <form method="POST" action="{{ route('roles.store') }}" class="max-w-sm mx-auto">
                        @csrf

                        <div class="mb-5">
                          <label id="name" for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Role name</label>
                          <input type="text" id="name" name="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="name" required>                        
                          @error('name') <span class="error text-red-500">{{ $message }}</span> @enderror

                        </div>
                        <div class="mb-5">
                          <label for="permissions" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Role permissions</label>
                            @foreach ($permissions as $permission)
                                <label for="{{ $permission->name }}">{{ $permission->name }}</label>
                                <input type="checkbox" id="permissions_checked" name="permissions_checked[]" value="{{ $permission->name }}">
                            @endforeach
                        
                        </div>
                        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
