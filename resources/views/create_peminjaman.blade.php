<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Add Product</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-50 gap-6  flex">
    @include('components.sidebar')

    <div class=" p-10 my-6 w-6/12 bg-white shadow-md rounded-xl p-8 grid gap-8">

        <!-- Form Section -->
        <div class="w-full">
            <h2 class="text-xl font-semibold ">Formulir Peminjaman Siswa</h2>
            <div class=" text-sm mt-2 mb-4 text-gray-600">Masukan Data dengan valid dan benar!</div>
            <form class="space-y-4" method="post" action="/peminjaman/create">
                @csrf
                <div>
                    <label class="block text-sm font-medium text-gray-400">Entitas Yang Meminjam</label>
                    <input type="text" readonly value="Siswa" name="entitas_peminjam" class="w-full text-gray-600 mt-1 border border-gray-300 rounded-xl px-3 py-2" placeholder="Masukan nama peminjaman..">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-400 ">Nama Siswa Yang Meminjam</label>
                    <select name="siswa_id" class="w-full mt-1 border border-gray-300 rounded-xl px-3 py-2 text-gray-600">
                        @foreach($siswa as $data)
                        <option value="{{$data->id}}">{{$data->nama_siswa}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="flex gap-3">

                    <div class="w-full">
                        <label class="block text-sm font-medium text-gray-400 ">Barang Yang Akan Dipinjam</label>
                        <select name="barang_id" class="w-full mt-1 border border-gray-300 rounded-xl px-3 py-2 text-gray-600">
                            @foreach($barang as $data)
                            <option value="{{$data->id}}">{{$data->nama_barang}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="w-full">
                        <label class="block text-sm font-medium text-gray-400">Jumlah Pinjam</label>
                        <input type="number" name="jml_pinjam" class="w-full mt-1 border border-gray-300 rounded-xl px-3 py-2" placeholder="Masukan Jumlah Barang..">
                    </div>
                </div>
                <div class="flex gap-3">
                    <div class="w-full">
                        <label class="block text-sm font-medium text-gray-400">Tanggal Pinjam</label>
                        <input type="date" name="tgl_pinjam" class="w-full mt-1 border border-gray-300 rounded-xl px-3 py-2" placeholder="Masukan nama kelas..">
                    </div>
                    <div class="w-full">
                        <label class="block text-sm font-medium text-gray-400">Tanggal Kembali</label>
                        <input type="date" name="tgl_kembali" class="w-full mt-1 border border-gray-300 rounded-xl px-3 py-2" placeholder="Masukan nama kelas..">
                    </div>
                </div>
                <!-- <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-400">Category</label>
                        <select class="w-full mt-1 border border-gray-300 rounded-xl px-3 py-2">
                            <option>Men</option>
                            <option>Women</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-400">Sub Category</label>
                        <select class="w-full mt-1 border border-gray-300 rounded-xl px-3 py-2">
                            <option>Shoe</option>
                            <option>Shirt</option>
                        </select>
                    </div>
                </div> -->

                <!-- <div>
                    <label class="block text-sm font-medium text-gray-400">Price</label>
                    <input type="number" class="w-full mt-1 border border-gray-300 rounded px-3 py-2" placeholder="$175">
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-400">Description</label>
                    <textarea class="w-full mt-1 border border-gray-300 rounded px-3 py-2" rows="3" placeholder="Type description here..."></textarea>
                </div> -->


                <div class="pt-2">
                    <button type="submit" class="bg-blue-600 text-sm text-white px-6 py-2 font-semibold rounded hover:bg-blue-700 transition-all">Submit Data</button>
                </div>

            </form>
        </div>
    </div>
    <div class=" p-10 my-6 w-6/12 bg-white shadow-md rounded-xl p-8 grid gap-8">

        <!-- Form Section -->
        <div class="w-full">
            <h2 class="text-xl font-semibold ">Formulir Peminjaman Guru</h2>
            <div class=" text-sm mt-2 mb-4 text-gray-600">Masukan Data dengan valid dan benar!</div>
            <form class="space-y-4" method="post" action="/peminjaman/create">
                @csrf
                <div>
                    <label class="block text-sm font-medium text-gray-400">Entitas Yang Meminjam</label>
                    <input type="text" readonly value="Guru" name="entitas_peminjam" class="w-full text-gray-600 mt-1 border border-gray-300 rounded-xl px-3 py-2" placeholder="Masukan nama peminjaman..">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-400 ">Nama Guru Yang Meminjam</label>
                    <select name="guru_id" class="w-full mt-1 border border-gray-300 rounded-xl px-3 py-2 text-gray-600">
                        @foreach($guru as $data)
                        <option value="{{$data->id}}">{{$data->nama_guru}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="flex gap-3">

                    <div class="w-full">
                        <label class="block text-sm font-medium text-gray-400 ">Barang Yang Akan Dipinjam</label>
                        <select name="barang_id" class="w-full mt-1 border border-gray-300 rounded-xl px-3 py-2 text-gray-600">
                            @foreach($barang as $data)
                            <option value="{{$data->id}}">{{$data->nama_barang}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="w-full">
                        <label class="block text-sm font-medium text-gray-400">Jumlah Pinjam</label>
                        <input type="number" name="jml_pinjam" class="w-full mt-1 border border-gray-300 rounded-xl px-3 py-2" placeholder="Masukan Jumlah Barang..">
                    </div>
                </div>
                <div class="flex gap-3">
                    <div class="w-full">
                        <label class="block text-sm font-medium text-gray-400">Tanggal Pinjam</label>
                        <input type="date" name="tgl_pinjam" class="w-full mt-1 border border-gray-300 rounded-xl px-3 py-2" placeholder="Masukan nama kelas..">
                    </div>
                    <div class="w-full">
                        <label class="block text-sm font-medium text-gray-400">Tanggal Kembali</label>
                        <input type="date" name="tgl_kembali" class="w-full mt-1 border border-gray-300 rounded-xl px-3 py-2" placeholder="Masukan nama kelas..">
                    </div>
                </div>

                <!-- <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-400">Category</label>
                        <select class="w-full mt-1 border border-gray-300 rounded-xl px-3 py-2">
                            <option>Men</option>
                            <option>Women</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-400">Sub Category</label>
                        <select class="w-full mt-1 border border-gray-300 rounded-xl px-3 py-2">
                            <option>Shoe</option>
                            <option>Shirt</option>
                        </select>
                    </div>
                </div> -->

                <!-- <div>
                    <label class="block text-sm font-medium text-gray-400">Price</label>
                    <input type="number" class="w-full mt-1 border border-gray-300 rounded px-3 py-2" placeholder="$175">
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-400">Description</label>
                    <textarea class="w-full mt-1 border border-gray-300 rounded px-3 py-2" rows="3" placeholder="Type description here..."></textarea>
                </div> -->


                <div class="pt-2">
                    <button type="submit" class="bg-blue-600 text-sm text-white px-6 py-2 font-semibold rounded hover:bg-blue-700 transition-all">Submit Data</button>
                </div>

            </form>
        </div>
    </div>

    <!-- jika terjadi kesalahan -->
    @if(Session::has('err'))
    <div id="error" class="fixed inset-x-0 bottom-0 pb-2 sm:pb-5 z-50">
        <div class="ms-auto max-w-2xl px-2 sm:px-6 lg:px-8">
            <div class="rounded-lg bg-red-600 p-2 shadow-lg sm:p-3">
                <div class="flex flex-wrap items-center justify-between">
                    <div class="flex w-0 flex-1 items-center">
                        <span class="flex rounded-lg bg-red-800 p-2">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true" class="h-6 w-6 text-white">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M11 5.882V19.24a1.76 1.76 0 01-3.417.592l-2.147-6.15M18 13a3 3 0 100-6M5.436 13.683A4.001 4.001 0 017 6h1.832c4.1 0 7.625-1.234 9.168-3v14c-1.543-1.766-5.067-3-9.168-3H7a3.988 3.988 0 01-1.564-.317z"></path>
                            </svg>
                        </span>
                        <p class="ml-3 truncate font-medium text-white">
                            <span class="text-sm">{{Session::get('err')}}</span>
                        </p>
                    </div>

                    <div class="order-2 flex-shrink-0 sm:order-3 sm:ml-2">
                        <button onclick="document.getElementById('error').classList.add('hidden')" type="button" class="-mr-1 flex rounded-md p-2 focus:outline-none focus:ring-2 focus:ring-white"><span class="sr-only">Dismiss</span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" class="h-6 w-6 text-white">
                                <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                            </svg></button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @endif

</body>

</html>