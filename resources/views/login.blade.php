<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login - Coinito</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50">
  <div class="flex min-h-screen justify-center">
    <!-- Left Side -->
    <div class="w-full md:w-1/2 flex items-center justify-center px-6">
      <div class="max-w-md w-full space-y-6">
        <h2 class="text-3xl font-semibold text-gray-900">Log in to your account.</h2>
        <p class="text-gray-500">Enter your email address and password to log in.</p>
        <form  action='/auth/login' method='post' class="space-y-4" >
          @csrf
          <div>
            <input type="email" placeholder="Email Address" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none" />
          </div>
          <div>
            <input type="password" placeholder="Password" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none" />
            <a href="#" class="text-sm text-blue-600 hover:underline block mt-2 text-right">Forgot password?</a>
          </div>
          <button type="submit" class="w-full bg-blue-600 text-white py-3 rounded-lg hover:bg-blue-700 transition">Login</button>
        </form>
        <div class="flex items-center justify-center space-x-4">
          <button class="flex items-center justify-center border px-4 py-2 rounded-lg w-full">
            <img src="https://img.icons8.com/color/16/000000/google-logo.png" class="mr-2" /> Google
          </button>
          <button class="flex items-center justify-center border px-4 py-2 rounded-lg w-full">
            <img src="https://img.icons8.com/fluency/16/000000/facebook-new.png" class="mr-2" /> Facebook
          </button>
        </div>
        <p class="text-center text-gray-500 text-sm">Don't you have an account? <a href="/register" class="text-blue-600 hover:underline">Sign Up</a></p>
      </div>
    </div>
</body>
</html>
