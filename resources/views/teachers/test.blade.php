<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Teachers') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @if (session()->has('message'))
            <x-alert type="success" :message="session('message')" />
            @endif

            <x-link-button href="{{ route('teachers.create') }}" class="mb-1">
                Create
            </x-link-button>

            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">

                <livewire:teacher-table />
                {{-- <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                        
                        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="px-6 py-3">
                                        ID
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Name
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Subject
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Action
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($teachers as $teacher)
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {{ $teacher->id }}
                </th>
                <td class="px-6 py-4">
                    {{ $teacher->name }}
                </td>
                <td class="px-6 py-4">
                    {{ $teacher->subject }}
                </td>
                <td class="px-6 py-4">
                    <a href="{{ route('teachers.edit', $teacher->id) }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                    <form action="{{ route('teachers.destroy', $teacher->id) }}" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="font-medium text-red-600 dark:text-red-500 hover:underline">Delete</button>
                    </form>
                </td>
                </tr>
                @endforeach
                </tbody>
                </table>
            </div>

            <div class="mt-4">
                {{ $teachers->links() }} <!-- This will render pagination links -->
            </div>
        </div> --}}
    </div>
    </div>
    </div>
</x-app-layout>
