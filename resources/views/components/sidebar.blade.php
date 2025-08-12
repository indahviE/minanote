<!-- Sidebar -->
<aside class="w-64 min-h-screen bg-white border-r">
    <!-- Logo & Product -->
    <div class="p-4 flex items-center space-x-2 border-b">
       
        <a href="/">

            <img src="https://ssl.gstatic.com/ui/v1/icons/mail/rfr/gmail.ico" class="w-5 h-5" alt="Logo">
        </a>
        <div>
            <div class="text-xs text-gray-500">Welcomee,</div>
            <div class="font-semibold text-sm">Minanote Workspace</div>
        </div>
    </div>

    <!-- Navigation -->
    <nav class="mt-4">
        <ul class="space-y-1 text-sm">
            <!-- Siswa -->
            <li>
                <a href="/siswa" class="flex items-center px-4 py-2 hover:bg-gray-100 text-gray-700">
                    <svg class="w-5 h-5 mr-3 text-blue-400" fill="none" stroke="currentColor" stroke-width="2"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M5.121 17.804A9 9 0 1118 9.75" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 12h6m0 0l-3 3m3-3l-3-3" />
                    </svg>
                    Siswa
                </a>
            </li>

            <!-- Guru -->
            <li>
                <a href="/guru" class="flex items-center px-4 py-2 hover:bg-gray-100 text-gray-700">
                    <svg class="w-5 h-5 mr-3 text-green-400" fill="none" stroke="currentColor" stroke-width="2"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8 7V3m8 4V3M4 11h16M4 19h16M4 15h16" />
                    </svg>
                    Guru
                </a>
            </li>

            <!-- Admin -->
            {{-- <li>
                <a href="/admin" class="flex items-center px-4 py-2 hover:bg-gray-100 text-gray-700">
                    <svg class="w-5 h-5 mr-3 text-red-400" fill="none" stroke="currentColor" stroke-width="2"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 14l9-5-9-5-9 5 9 5zm0 0v6" />
                    </svg>
                    Admin
                </a>
            </li> --}}

            <!-- Barang -->
            <li>
                <a href="/barang" class="flex items-center px-4 py-2 hover:bg-gray-100 text-gray-700">
                    <svg class="w-5 h-5 mr-3 text-yellow-400" fill="none" stroke="currentColor" stroke-width="2"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M3 7l9-4 9 4v10l-9 4-9-4V7z" />
                    </svg>
                    Barang
                </a>
            </li>

            <!-- Peminjaman -->
            <li>
                <a href="/peminjaman" class="flex items-center px-4 py-2 hover:bg-gray-100 text-gray-700">
                    <svg class="w-5 h-5 mr-3 text-indigo-400" fill="none" stroke="currentColor" stroke-width="2"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M8 7V3m8 4V3m-9 8h10m-11 4h11m-12 4h10m4-10H5a2 2 0 00-2 2v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2z" />
                    </svg>
                    Peminjaman
                </a>
            </li>

            <!-- Riwayat -->
            <li>
                <a href="/history" class="flex items-center px-4 py-2 hover:bg-gray-100 text-gray-700">
                    <svg class="w-5 h-5 mr-3 text-purple-400" fill="none" stroke="currentColor" stroke-width="2"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    History
                </a>
            </li>


            <!-- Logout -->

        </ul>

        <hr class="my-4 border-gray-200">

        <ul class="space-y-1 text-sm">
            <li>
                <form action="/auth/logout" method="post">
                    @csrf

                    <button type="submit" class="flex w-full items-center px-4 py-2 hover:bg-red-100 text-red-600 font-medium">
                        <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" stroke-width="2"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a2 2 0 01-2 2H7a2 2 0 01-2-2V7a2 2 0 012-2h4a2 2 0 012 2v1" />
                        </svg>
                        Logout
                    </button>
                </form>
            </li>
        </ul>
    </nav>
</aside>