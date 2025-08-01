<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login - Minanote</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-teal-50 font-sans"> 

    <form method="post" action="/auth/login" class="min-h-screen flex items-center justify-center">
        <div>
            @csrf
            <div class="bg-white rounded-3xl shadow-lg flex max-w-5xl w-full overflow-hidden">

                <!-- Left Side (Form) --> 
                <div class="w-full md:w-1/2 p-10">
                    <div class="flex items-center mb-8">
                        <div class=" mr-2"> <img src="https://ssl.gstatic.com/ui/v1/icons/mail/rfr/gmail.ico"
                                class="w-6 h-6" alt="Logo"></div>
                        <h2 class="text-lg font-semibold text-gray-700">Minanote.</h2>
                    </div>

                    <h1 class="text-2xl font-bold text-gray-800 mb-2">Holla, Welcome Back</h1>
                    <p class="text-gray-500 mb-8 text-sm">Sudah Siap Mengelola Inventaris anda? segera login.</p>

                    @if (Session::has('ok'))
                    <div class="flex items-center p-4 mb-4 text-sm text-green-800 border border-green-300 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400 dark:border-green-800"
                        role="alert">
                        <svg class="shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                        </svg>
                        <span class="sr-only">Info</span>
                        <div>
                            <span class="font-medium">{{Session::get('ok')}}</span>
                        </div>
                    </div>
                    @endif
                    <div>
                        <div class="mb-4">
                            <input type="email" name="email" placeholder="Masukan alamat gmail.."
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-teal-600" />
                        </div>

                        <div class="mb-4">
                            <input type="password" name="password" placeholder="••••••••••"
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-teal-600" />
                        </div>

                        <div class="flex items-center justify-between text-sm text-gray-600 mb-6">

                            <a href="/register" class="hover:underline">Forgot Password?</a>
                        </div>
                        <button type="submit"
                            class="w-full bg-teal-600 hover:bg-teal-700 text-white font-semibold py-3 rounded-lg shadow-md transition">Sign
                            In</button>
                    </div>

                    <p class="text-sm text-center text-gray-500 mt-6">Don't have an account? <a href="/register"
                            class="text-teal-600 hover:underline">Sign Up</a></p>
                </div>

                <!-- Right Side (Image) -->
                <div
                    class="hidden md:block w-1/2 bg-gradient-to-tr from-teal-500/70 to-pink-500/70 py-4 relative h-screen">
                    <img src="https://indeedinspiring.com/s/login_sample.webp" alt="Illustration"
                        class="w-full h-full object-fit " />
                    {{-- <img src="{{ asset('background.jpg') }}" alt="Illustration" class="w-full h-full object-fit" /> --}}
                </div>
            </div>
        </div>

</body>

</html>
