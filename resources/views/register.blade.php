<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Register - Minanote</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-teal-50 font-sans">

  <form method="post" action="/auth/register" class="min-h-screen flex items-center justify-center">
    @csrf
    <div class="bg-white rounded-3xl shadow-lg flex max-w-5xl w-full overflow-hidden">

      <!-- Left Side (Form) -->
      <div class="w-full md:w-1/2 p-10">
        <div class="flex items-center mb-8">
          <div class=" mr-2"> <img src="https://ssl.gstatic.com/ui/v1/icons/mail/rfr/gmail.ico" class="w-6 h-6" alt="Logo"></div>
          <h2 class="text-lg font-semibold text-gray-700">Minanote.</h2>
        </div>

        <h1 class="text-2xl font-bold text-gray-800 mb-2">Holla, Nice to meet you.</h1>
        <p class="text-gray-500 mb-8 text-sm">Belum punya akun? segera mendaftar!</p>

        <div>
          <div class="mb-4">
            <input type="text" name="name" placeholder="Masukkan nama anda" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-teal-600" />
          </div>

          <div class="mb-4">
            <input type="email" name="email" placeholder="Masukan alamat gmail.." class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-teal-600" />
          </div>

          <div class="mb-4">
            <input type="password" name="password" placeholder="••••••••••" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-teal-600" />
          </div>

          <div class="flex items-center justify-between text-sm text-gray-600 mb-6">

            <a href="#" class="hover:underline">Forgot Password?</a>
          </div>

          <button type="submit" class="w-full bg-teal-600 hover:bg-teal-700 text-white font-semibold py-3 rounded-lg shadow-md transition">Sign Up</button>
        </div>

        <p class="text-sm text-center text-gray-500 mt-6">Sudah punya akun terdaftar? <a href="/login" class="text-teal-600 hover:underline">Sign In</a></p>
      </div>

      <!-- Right Side (Image) -->
      <div class="hidden md:block w-1/2 bg-gradient-to-tr from-teal-500/70  to-pink-500/70 relative py-4">
        <img src="https://indeedinspiring.com/s/login_sample.webp" alt="Illustration" class="w-full h-full object-fit " />
      </div>
    </div>
    </div>

</body>

</html>