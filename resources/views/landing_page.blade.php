<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Minanote</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="font-sans antialiased text-gray-700">


  <!-- Navbar -->
  <header class="flex justify-between items-center px-16 py-4 shadow sticky top-0 z-50
bg-white">


    <div class="text-2xl font-bold text-blue-600">Minanote</div>
    <nav class="space-x-6 hidden md:flex">
      <a href="#home" class="text-gray-700 hover:text-blue-600">Beranda</a>
      <a href="#kenapa-kami" class="text-gray-700 hover:text-blue-600">Kenapa Kami?</a>
      <a href="#barang-kami" class="text-gray-700 hover:text-blue-600">Barang Kami</a>

    </nav>
    <div class="flex items-center space-x-4">
      <button class="text-sm text-gray-700">Ind</button>

      @if(Auth::user())
      <form action="/auth/logout" method="post">
        @csrf
        <button type="submit" class="bg-red-600 text-white px-4 py-2 rounded-full text-sm">Log out</button>
      </form>
      @else
      <a href="/login">
        <button class="bg-blue-600 text-white px-4 py-2 rounded-full text-sm">Login</button>
      </a>

      @endif

      <!-- <a href="/login"> -->
      <!-- </a> -->
    </div>
  </header>

  <!-- Sticky Search Bar -->
  <form method="get" class="fixed bottom-10 shadow-2xl flex items-center end-10 z-[30] w-[300px] hover:w-[780px] transition-all bg-teal-600 rounded-full p-2">
    <p class="text-xs p-2.5 text-white max-w-[250px]">Mulai Cari Barang Yang anda perlukan berdasarkan keyword nama barang.</p>  
  <div class="flex items-center bg-white rounded-full shadow-lg p-2 w-full">
      <input
        name="s"
        value="{{$search}}"
        type="text"
        placeholder="Type your search"
        class="w-full px-3 py-2 text-sm rounded-full focus:outline-none" />
      <button class="bg-gray-200 p-2 rounded-full ml-2">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-600" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <circle cx="11" cy="11" r="8"></circle>
          <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
        </svg>
      </button>
    </div>
</form>

    <!-- Hero Section -->
    <section id="home" class="grid grid-cols-1 md:grid-cols-2 gap-6 px-16 py-12 items-center">
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
    <section class="bg-blue-600 py-6 px-16">
      <div class="flex justify-around flex-wrap gap-6 text-white text-lg font-semibold">
        <span>ORACLE</span>
        <span>python</span>
        <span>cisco</span>
        <span>Microsoft</span>
      </div>
    </section>

    <!-- Why Us Section -->
    <section class="px-16 py-16" id="kenapa-kami">
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

    <section class="px-16 py-10 bg-gray-50 min-h-screen" id="barang-kami">

      <!-- Title -->
      <h2 class="text-2xl font-semibold mb-10">Barang Yang Kami Sediakan, hanya untuk anda!</h2>

      <!-- Product Grid -->
      <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
        <!-- Product Card -->

        @foreach($barang as $data)
        <div class="relative bg-white rounded-xl shadow-md overflow-hidden flex flex-col p-4 hover:shadow-2xl transition">
          <img src="{{$data->foto}}" alt="Product" class="w-full h-36 object-contain mb-3">
          <h3 class="text-sm font-semibold">{{$data->nama_brg}}</h3>
          <p class="text-xs text-gray-500 mb-1">{{$data->deskripsi}}</p>
          <p class="text-green-600 text-xs mb-1">⭐⭐⭐⭐⭐ (stock {{$data->stock}})</p>
          <p class="font-semibold text-sm mb-2">Kelayakan Barang : {{$data->kelayakan}}</p>
          @if($data->stock <= 0)
            <button class="absolute bg-blue-300 text-white text-xs px-3 py-2 rounded-full" disabled>Stok Sedang Kosong</button>
            @else
            <button class="absolute bg-blue-600 text-white text-xs px-3 py-2 rounded-full hover:bg-blue-700">Tersedia</button>

            @endif
            <a href="/barang/detail/{{$data->id}}" class="mt-2 hover:bg-teal-600 hover:text-white transition-all text-sm px-4 py-2 rounded-full text-gray-500 border">Detail </a>
        </div>
        @endforeach

        <!-- Tambahkan produk lainnya sesuai kebutuhan -->
      </div>
    </section>

    @include('footer')
</body>

</html>