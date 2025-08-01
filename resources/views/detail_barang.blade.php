<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Product Detail</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-white font-sans">


    <!-- Navbar -->
    <header id="home" class="flex justify-between items-center px-16 py-4 shadow sticky top-0 z-50
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

    <div class="max-w-6xl mx-auto p-6 flex flex-col md:flex-row gap-10">
        <!-- Product Image -->
        <div class="w-7/12 mx-auto py-10 pe-16 border-r">
            <h2 class="text-xl font-semibold ">Siswa/Guru Yang Meminjam Barang Ini.</h2>
            <div class=" text-sm mt-2 mb-4 text-gray-600">Perhatikan Tanggal Pengembalian Barang! sesuaikan dengan kebutuhan anda</div>
            <!-- Card container -->
            <div class="space-y-6">
                <!-- Item 1: TWS Bujug -->
                @foreach($orang_yang_meminjam as $data)
                <div class="flex items-center bg-white p-4 shadow-md rounded-lg">
                    <div class="flex-shrink-0">
                        <img src="https://st5.depositphotos.com/89817276/76538/v/450/depositphotos_765381964-stock-illustration-indonesian-junior-high-school-student.jpg" class="w-12 h-12 rounded-xl">
                    </div>
                    <div class="ml-4 flex-grow">
                        @if($data->entitas_peminjam == "Siswa")
                        <h3 class="font-semibold text-gray-800">{{$data->siswa->nama_siswa}}</h3>
                        @else
                        <h3 class="font-semibold text-gray-800">{{$data->guru->nama_guru}}</h3>
                        @endif
                        <p class="text-gray-500 text-xs">Tanggal Pinjam: {{$data->tgl_pinjam}} | Kembali Pada: {{$data->tgl_kembali}}</p>
                    </div>

                    <div class="flex gap-3 ">
                        <span class=" bg-blue-600 text-white text-xs px-3 py-2 rounded-full">{{$data->entitas_peminjam}}</span>
                    </div>


                </div>
                @endforeach

                
            </div>
        </div>

        <!-- Product Info -->
        <div class="flex-1 w-full ms-4">

            <img src="{{$barang->foto}}" alt="The Ordinary Retinol" class="w-96 md:w-60  rounded-xl object-contain" />

            <!-- Tags -->
            <div class="flex gap-3 mb-4 ">
                <span class=" bg-blue-600 text-white text-xs px-3 py-2 rounded-full hover:bg-blue-700">Tersedia</span>
            </div>

            <!-- Title -->
            <h1 class="text-3xl font-bold text-gray-800 mb-2">{{$barang->nama_brg}}</h1>

            <!-- Description -->
            <p class="text-gray-600 mb-4">
                {{$barang->deskripsi}}. <span class="text-teal-600">{{count($orang_yang_meminjam)}} orang sedang meminjam barang ini.</span>
            </p>

            <!-- Rating -->
            <div class="flex items-center gap-2 mb-4">
                <div class="flex -space-x-2">
                    <img class="w-8 h-8 rounded-full border-2 border-white" src="https://st5.depositphotos.com/89817276/76538/v/450/depositphotos_765381964-stock-illustration-indonesian-junior-high-school-student.jpg" />
                    <img class="w-8 h-8 rounded-full border-2 border-white" src="https://st5.depositphotos.com/89817276/76538/v/450/depositphotos_765381964-stock-illustration-indonesian-junior-high-school-student.jpg" />
                    <img class="w-8 h-8 rounded-full border-2 border-white" src="https://st5.depositphotos.com/89817276/76538/v/450/depositphotos_765381964-stock-illustration-indonesian-junior-high-school-student.jpg" />
                </div>
                <p class="text-green-600 text-sm mb-1">⭐⭐⭐⭐⭐ (stock yang tersedia {{$barang->stock}})</p>

            </div>
            <div>

                <a href="/" class="absolute top-12 end-8 bg-teal-600 text-bold text-sm text-white mt-12 px-3 py-2 rounded-sm hover:bg-teal-700">Back To List Barang</a>
            </div>


        </div>
    </div>

    @include('footer')

</body>

</html>