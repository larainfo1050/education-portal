<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Student Details') }}
        </h2>
    </x-slot>

    <div class="py-12 bg-gray-100">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- Card Container -->
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-md sm:rounded-lg">
                <div class="p-6 sm:p-8">
                    <!-- Student Name -->
                    <div class="mb-6 border-b border-gray-200 dark:border-gray-700 pb-4">
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-gray-100">Student Name</h3>
                        <p class="text-gray-700 dark:text-gray-300 text-xl">{{ $student->student_name }}</p>
                    </div>

                    <!-- Class -->
                    <div class="mb-6 border-b border-gray-200 dark:border-gray-700 pb-4">
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-gray-100">Class</h3>
                        <p class="text-gray-700 dark:text-gray-300 text-xl">{{ $student->class }}</p>
                    </div>

                    <!-- Class Teacher -->
                    <div class="mb-6 border-b border-gray-200 dark:border-gray-700 pb-4">
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-gray-100">Class Teacher</h3>
                        <p class="text-gray-700 dark:text-gray-300 text-xl">
                            {{ $student->teacher ? $student->teacher->name : 'Not Assigned' }}
                        </p>
                    </div>

                    <!-- Admission Date -->
                    <div class="mb-6 border-b border-gray-200 dark:border-gray-700 pb-4">
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-gray-100">Admission Date</h3>
                        <p class="text-gray-700 dark:text-gray-300 text-xl">{{ \Carbon\Carbon::parse($student->admission_date)->format('F j, Y') }}</p>
                    </div>

                    <!-- Yearly Fees -->
                    <div class="mb-6 border-b border-gray-200 dark:border-gray-700 pb-4">
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-gray-100">Yearly Fees</h3>
                        <p class="text-gray-700 dark:text-gray-300 text-xl">${{ number_format($student->yearly_fees, 2) }}</p>
                    </div>

                    <!-- Gender -->
                    <div class="mb-6 border-b border-gray-200 dark:border-gray-700 pb-4">
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-gray-100">Gender</h3>
                        <p class="text-gray-700 dark:text-gray-300 text-xl">{{ ucfirst($student->gender) }}</p>
                    </div>

                    <!-- Back Button -->
                    <a href="{{ route('students.index') }}" class="inline-flex items-center px-4 py-2 text-sm font-medium text-white bg-blue-600 border border-transparent rounded-md shadow-sm hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                        <!-- Heroicon: Arrow Left -->
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 mr-2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 4.5l-6 6 6 6" />
                        </svg>
                        Back to List
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
