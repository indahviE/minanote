<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Register</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50">
  <div class="flex min-h-screen justify-center">
    <!-- Left Side -->
    <div class="w-full md:w-1/2 flex items-center justify-center px-6">
      <div class="max-w-md w-full space-y-6">
        <h2 class="text-3xl font-semibold text-gray-900">Create your account</h2>
        <form action="/auth/register" method="post" class="space-y-4">
          @csrf
          <div>
            <input type="text" placeholder="Full Name" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none" />
          </div>
          <div>
            <input type="email" placeholder="Email Address" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none" />
          </div>
          <div>
            <input type="password" placeholder="Password" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none" />
          </div>
          <button type="submit" class="w-full bg-blue-600 text-white py-3 rounded-lg hover:bg-blue-700 transition">Sign Up</button>
        </form>
        <p class="text-center text-gray-500 text-sm">Already have an account? <a href="/login" class="text-blue-600 hover:underline">Log In</a></p>
      </div>
    </div>
</body>
</html>
