<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>UP School</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="font-sans antialiased text-gray-700">

  <!-- Navbar -->
  <header class="flex justify-between items-center px-8 py-4 shadow sticky top-0 z-50
bg-white">
    <div class="text-2xl font-bold text-blue-600">UP School</div>
    <nav class="space-x-6 hidden md:flex">
      <a href="#" class="text-gray-700 hover:text-blue-600">Home</a>
      <a href="#" class="text-gray-700 hover:text-blue-600">Learning Program</a>
      <a href="#" class="text-gray-700 hover:text-blue-600">About Us</a>
      <a href="#" class="text-gray-700 hover:text-blue-600">Admission</a>
    </nav>
    <div class="flex items-center space-x-4">
      <button class="text-sm text-gray-700">Eng</button>
      <button class="bg-blue-600 text-white px-4 py-2 rounded-full text-sm">Login</button>
    </div>
  </header>

  <!-- Hero Section -->
  <section class="grid grid-cols-1 md:grid-cols-2 gap-6 px-8 py-12 items-center">
    <div>
      <h1 class="text-4xl font-bold leading-snug">Let's Create a Brilliant Future with Our School</h1>
      <p class="mt-4 text-gray-600">UP School is a technology high school that is committed to providing high quality education and implementing IT-based curriculum.</p>
      <div class="mt-6 flex space-x-4">
        <button class="bg-blue-600 text-white px-6 py-3 rounded-full">Join with us</button>
        <button class="text-blue-600 underline">Get to know more</button>
      </div>
      <div class="mt-8 flex space-x-10 text-center">
        <div>
          <div class="text-xl font-bold">60+</div>
          <div class="text-sm text-gray-600">Teachers</div>
        </div>
        <div>
          <div class="text-xl font-bold">2,5k</div>
          <div class="text-sm text-gray-600">Students</div>
        </div>
        <div>
          <div class="text-xl font-bold">A+</div>
          <div class="text-sm text-gray-600">Accreditation</div>
        </div>
      </div>
    </div>
    <div>
      <img src="https://images.unsplash.com/photo-1531482615713-2afd69097998" alt="Students" class="rounded-xl shadow-lg" />
    </div>
  </section>

  <!-- Partner Logos -->
  <section class="bg-blue-600 py-6 px-8">
    <div class="flex justify-around flex-wrap gap-6 text-white text-lg font-semibold">
      <span>ORACLE</span>
      <span>python</span>
      <span>cisco</span>
      <span>Microsoft</span>
    </div>
  </section>

  <!-- Why Us Section -->
  <section class="px-8 py-16">
    <div class="flex flex-col md:flex-row justify-between items-start gap-10">
      <div class="md:w-1/3">
        <h2 class="text-2xl font-bold mb-4">Choose a Quality School for a Bright Future</h2>
        <p class="text-gray-600">UP School is a technology high school that is committed to providing high quality education and implementing IT-based curriculum.</p>
      </div>
      <div class="md:w-2/3 grid grid-cols-1 md:grid-cols-3 gap-6">
        <div class="p-6 border rounded-lg shadow-sm hover:shadow-md transition">
          <div class="text-lg font-bold mb-2">Students will be <span class="text-blue-600">guided</span></div>
          <p class="text-sm text-gray-600">The students can become graduates who are competent in the field of IT.</p>
        </div>
        <div class="p-6 border rounded-lg shadow-sm hover:shadow-md transition">
          <div class="text-lg font-bold mb-2">Students are <span class="text-blue-600">mentally</span> equipped</div>
          <p class="text-sm text-gray-600">The students can become graduates who are competent in the field of IT.</p>
        </div>
        <div class="p-6 border rounded-lg shadow-sm hover:shadow-md transition">
          <div class="text-lg font-bold mb-2"><span class="text-blue-600">Beneficial</span> for many people</div>
          <p class="text-sm text-gray-600">The students can become graduates who are competent in the field of IT.</p>
        </div>
      </div>
    </div>
  </section>

  @include('footer')
</body>
</html>