<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Teachers Create') }}
        </h2>
    </x-slot>

    <div class="py-12 bg-gray-100">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-md sm:rounded-lg">
                <div class="p-8">
                    <h2 class="text-2xl font-semibold mb-6 text-gray-800 dark:text-gray-200">Create New Teacher</h2>

                    <form action="{{ route('teachers.store') }}" method="POST">
                        @csrf

                        <!-- Name Field -->
                        <div class="mb-6">
                            <label for="name" class="block mb-2 text-sm font-medium text-gray-700 dark:text-gray-300">Name</label>
                            <input type="text" id="name" name="name" value="{{ old('name') }}" class="bg-gray-50 border border-gray-300 text-gray-900 placeholder-gray-500 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3 transition duration-150 ease-in-out" placeholder="Teacher Name">
                            @error('name')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Subject Field -->
                        <div class="mb-6">
                            <label for="subject" class="block mb-2 text-sm font-medium text-gray-700 dark:text-gray-300">Subject</label>
                            <input type="text" id="subject" name="subject" value="{{ old('subject') }}" class="bg-gray-50 border border-gray-300 text-gray-900 placeholder-gray-500 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3 transition duration-150 ease-in-out" placeholder="Subject">
                            @error('subject')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Submit Button -->
                        <div class="mt-6 flex">
                            <x-primary-button class="bg-blue-600 hover:bg-blue-700 focus:ring-blue-500 focus:border-blue-500 text-white">
                                {{ __('Submit') }}
                            </x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
