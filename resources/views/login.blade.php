<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login Milanote</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-teal-50 font-sans">

  <form method="post" action="/auth/login" class="min-h-screen flex items-center justify-center">
    @csrf
    <div class="bg-white rounded-3xl shadow-lg flex max-w-5xl w-full overflow-hidden">


      <!-- Left Side (Form) -->
      <div class="w-full md:w-1/2 p-10">
        <div class="flex items-center mb-8">
          <div class=" mr-2"> <img src="https://ssl.gstatic.com/ui/v1/icons/mail/rfr/gmail.ico" class="w-6 h-6" alt="Logo"></div>
          <h2 class="text-lg font-semibold text-gray-700">Milanote.</h2>
        </div>

        <h1 class="text-2xl font-bold text-gray-800 mb-2">Holla, Welcome Back</h1>
        <p class="text-gray-500 mb-8 text-sm">Sudah Siap Mengelola Inventaris anda? segera login.</p>

        @if(Session::has('ok'))
        <div id="alert-border-3" class="flex items-center p-4 mb-4 text-green-800 border-t-4 border-green-300 bg-green-50 dark:text-green-400 dark:bg-gray-800 dark:border-green-800" role="alert">
          <svg class="shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
            <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
          </svg>
          <div class="ms-3 text-sm font-medium">
            {{Session::get('ok')}}
          </div>
          <button type="button" class="ms-auto -mx-1.5 -my-1.5 bg-green-50 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-green-400 dark:hover:bg-gray-700" data-dismiss-target="#alert-border-3" aria-label="Close">
            <span class="sr-only">Dismiss</span>
            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
            </svg>
          </button>
        </div>
        @endif

        <div>
          <div class="mb-4">
            <input type="email" name="email" placeholder="Masukan alamat gmail.." class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-teal-600" />
          </div>

          <div class="mb-4">
            <input type="password" name="password" placeholder="••••••••••" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-teal-600" />
          </div>

          <div class="flex items-center justify-between text-sm text-gray-600 mb-6">

            <a href="#" class="hover:underline">Forgot Password?</a>
          </div>

          <button type="submit" class="w-full bg-teal-600 hover:bg-teal-700 text-white font-semibold py-3 rounded-lg shadow-md transition">Sign In</button>
        </div>

        <p class="text-sm text-center text-gray-500 mt-6">Don't have an account? <a href="/register" class="text-teal-600 hover:underline">Sign Up</a></p>
      </div>

      <!-- Right Side (Image) -->
      <div class="hidden md:block w-1/2 bg-gradient-to-tr from-teal-500/70 to-pink-500/70 py-4 relative">
        <img src="https://indeedinspiring.com/s/login_sample.webp" alt="Illustration" class="w-full h-full object-fit " />
      </div>
    </div>
    </div>

</body>

</html>