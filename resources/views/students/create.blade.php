<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Create New Student') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="max-w-3xl mx-auto p-6 bg-white shadow-md rounded-lg">
                    <h2 class="text-xl font-semibold mb-4">Create New Student</h2>

                    <form action="{{ route('students.store') }}" method="POST">
                        @csrf

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <!-- Student Name Field -->
                            <div class="mb-5">
                                <label for="student_name" class="block mb-2 text-sm font-medium text-gray-700">Student Name</label>
                                <input type="text" id="student_name" name="student_name" value="{{ old('student_name') }}" class="bg-gray-50 border border-gray-300 text-gray-900 placeholder-gray-500 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Student Name">
                                @error('student_name')
                                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Class Teacher Field -->
                            <div class="mb-5">
                                <label for="class_teacher_id" class="block mb-2 text-sm font-medium text-gray-700">Class Teacher</label>
                                <select id="class_teacher_id" name="class_teacher_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                                    <option value="">Select a Teacher</option>
                                    @foreach($teachers as $teacher)
                                    <option value="{{ $teacher->id }}" {{ old('class_teacher_id') == $teacher->id ? 'selected' : '' }}>
                                        {{ $teacher->name }}
                                    </option>
                                    @endforeach
                                </select>
                                @error('class_teacher_id')
                                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Class Field -->
                            <div class="mb-5">
                                <label for="class" class="block mb-2 text-sm font-medium text-gray-700">Class</label>
                                <input type="text" id="class" name="class" value="{{ old('class') }}" class="bg-gray-50 border border-gray-300 text-gray-900 placeholder-gray-500 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="10th Grade">
                                @error('class')
                                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Admission Date Field -->
                            <div class="mb-5">
                                <label for="admission_date" class="block mb-2 text-sm font-medium text-gray-700">Admission Date</label>
                                <input type="date" id="admission_date" name="admission_date" value="{{ old('admission_date') }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                                @error('admission_date')
                                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Yearly Fees Field -->
                            <div class="mb-5">
                                <label for="yearly_fees" class="block mb-2 text-sm font-medium text-gray-700">Yearly Fees</label>
                                <input type="number" id="yearly_fees" name="yearly_fees" value="{{ old('yearly_fees') }}" class="bg-gray-50 border border-gray-300 text-gray-900 placeholder-gray-500 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="1000.00" step="0.01">
                                @error('yearly_fees')
                                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Gender Field -->
                            <div class="mb-5">
                                <label for="gender" class="block mb-2 text-sm font-medium text-gray-700">Gender</label>
                                <select id="gender" name="gender" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                                    <option value="">Select Gender</option>
                                    <option value="Male" {{ old('gender') == 'Male' ? 'selected' : '' }}>Male</option>
                                    <option value="Female" {{ old('gender') == 'Female' ? 'selected' : '' }}>Female</option>
                                    <option value="Other" {{ old('gender') == 'Other' ? 'selected' : '' }}>Other</option>
                                </select>
                                @error('gender')
                                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="mb-5">
                                <label for="phone_number" class="block mb-2 text-sm font-medium text-gray-700">Phone Number</label>
                                <div class="relative flex items-center">
                                    <!-- Container for country code -->
                                    <div class="flex items-center absolute inset-y-0 left-0 pl-2 pointer-events-none bg-gray-50 border border-gray-300 rounded-l-lg">
                                        <span class="text-gray-500 font-medium text-sm px-2 py-2">+91</span>
                                    </div>
                                    <!-- Input Field -->
                                    <input type="text" id="phone_number" name="phone_number" value="{{ old('phone_number') }}" class="bg-gray-50 border border-gray-300 text-gray-900 placeholder-gray-500 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-14 pr-3 py-2.5" placeholder="123-456-7890">
                                </div>
                                @error('phone_number')
                                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <!-- Submit Button -->
                        <div class="mt-2 flex">

                            <x-primary-button class="ms-3">
                                {{ __('Submit') }}
                            </x-primary-button>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
