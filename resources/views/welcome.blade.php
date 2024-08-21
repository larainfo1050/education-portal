<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Education Portal</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
  <header class="bg-gray-900 text-white py-6">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex justify-between items-center">
      <a href="#" class="text-2xl font-bold">Education</a>
      <div class="flex items-center space-x-4">
        @if (Route::has('login'))
          <div class="hidden sm:flex items-center space-x-4">
            @auth
              <a href="{{ url('/home') }}" class="text-gray-300 hover:text-gray-400">Home</a>
            @else
              <a href="{{ route('login') }}" class="hover:text-gray-400">Log in</a>
              @if (Route::has('register'))
                <a href="{{ route('register') }}" class="bg-white text-gray-900 px-4 py-2 rounded-md hover:bg-gray-200">Register</a>
              @endif
            @endauth
          </div>
        @endif
      </div>
    </div>
  </header>

  <main>
    <section class="bg-gray-900 text-white py-20">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 md:grid-cols-2 gap-8">
        <div>
          <h1 class="text-4xl font-bold mb-4">Elevate Your Learning</h1>
          <p class="text-gray-400 mb-8">Discover high-quality educational resources to achieve your goals.</p>
          <a href="#" class="bg-white text-gray-900 px-6 py-3 rounded-md hover:bg-gray-200 inline-block">Explore Courses</a>
        </div>
        <div>
          <img src="{{ asset('images/learning.svg') }}" alt="Education Image" class="w-full rounded-md">
        </div>
      </div>
    </section>

    <section class="py-20">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-3xl font-bold mb-8">Featured Courses</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
          <div class="bg-white shadow-md rounded-md overflow-hidden">
            <img src="{{ asset('images/sketching.svg') }}" alt="Course Image" class="w-full h-60">
            <div class="p-6">
              <h3 class="text-xl font-bold mb-2">Web Development</h3>
              <p class="text-gray-600 mb-4">Build professional-grade websites with the latest technologies.</p>
              <a href="#" class="bg-gray-900 text-white px-4 py-2 rounded-md hover:bg-gray-800">Enroll Now</a>
            </div>
          </div>
          <div class="bg-white shadow-md rounded-md overflow-hidden">
            <img src="{{ asset('images/developer_activity.svg') }}" alt="Course Image" class="w-full h-60">
            <div class="p-6">
              <h3 class="text-xl font-bold mb-2">Data Science</h3>
              <p class="text-gray-600 mb-4">Unlock valuable insights through data analysis and machine learning.</p>
              <a href="#" class="bg-gray-900 text-white px-4 py-2 rounded-md hover:bg-gray-800">Enroll Now</a>
            </div>
          </div>
          <div class="bg-white shadow-md rounded-md overflow-hidden">
            <img src="{{ asset('images/digital_nomad.svg') }}" alt="Course Image" class="w-full h-60">
            <div class="p-6">
              <h3 class="text-xl font-bold mb-2">Digital Marketing</h3>
              <p class="text-gray-600 mb-4">Grow your business in the online world through digital marketing.</p>
              <a href="#" class="bg-gray-900 text-white px-4 py-2 rounded-md hover:bg-gray-800">Enroll Now</a>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>

  <footer class="bg-gray-900 text-white py-6">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <p>&copy; 2024 Education. All rights reserved.</p>
    </div>
  </footer>
</body>
</html>
