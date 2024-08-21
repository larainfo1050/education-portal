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
                Create Teacher
            </x-link-button>

            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <livewire:teacher-table />

            </div>
        </div>
    </div>
</x-app-layout>
