<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <title>Update - Peminjaman</title>
        <script src="https://cdn.tailwindcss.com"></script>
    </head>

    <body class="bg-gray-50 gap-6  flex ">
        @include('components.sidebar')

        <div class=" p-10 my-6 w-6/12 bg-white shadow-md rounded-xl p-8 grid gap-8 ms-72">

            <!-- Form Section -->
        <div class="w-full">
            <h2 class="text-xl font-semibold">Formulir Modify Data Peminjaman</h2>
            <div class=" text-sm mt-2 mb-4 text-gray-600">Masukan Data dengan valid dan benar!</div>
            <form class="space-y-4" method="post" action="/peminjaman/update/{{$data->id}}">
                @csrf
                <div>
                    <label class="block text-sm font-medium text-gray-400">Entitas Yang Meminjam</label>
                    <input type="text" name="entitas peminjam" readonly value="Siswa" class="w-full mt-1 border border-gray-300 rounded-xl px-3 py-2" placeholder="">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-400">Gender</label>
                    <input type="text" name="gender" value="{{$data->gender}}" class="w-full mt-1 border border-gray-300 rounded-xl px-3 py-2" placeholder="Masukan gender lk/pr ..">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-400">Nama Siswa Yang Meminjam</label>
                    <select name="siswa_id" class="w-full mt-1 border border-gray-300 rounded-xl px-3 py-2 text-gray-600">
                        @foreach($siswa as $data)
                        <option value="{{$data->id}}">{{$data->nama_siswa}}</option>
                        @endforeach
                    </select>
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-400">Barang Yang Akan Dipinjam</label>
                    <select name="barang_id" class="w-full mt-1 border border-gray-300 rounded-xl px-3 py-2 text-gray-600">
                            @foreach($barang as $data)
                            <option value="{{$data->id}}">{{$data->nama_barang}}</option>
                            @endforeach
                        </select>
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-400">Jumlah Pinjam</label>
                    <input type="number" name="jml_pinjam" value="{{$data->jml_pinjam}}" class="w-full mt-1 border border-gray-300 rounded-xl px-3 py-2" placeholder="Masukan gender lk/pr..">
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-400">Tanggal Pinjam</label>
                    <input type="date" name="tgl_pinjam" value="{{$data->tgl_pinjam}}" class="w-full mt-1 border border-gray-300 rounded-xl px-3 py-2" placeholder="">
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-400">Tanggal Kembali</label>
                    <input type="date" name="tgl_kembali" value="{{$data->tgl_kembali}}" class="w-full mt-1 border border-gray-300 rounded-xl px-3 py-2" placeholder="">
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
                    <button type="submit" class="bg-teal-600 text-sm text-white px-6 py-2 font-semibold rounded hover:bg-teal-700 transition-all">Submit Modify Data</button>

                    <a href="/peminjaman" class="bg-gray-300 text-sm text-gray-800 px-6 py-2 font-semibold rounded hover:bg-gray-400 transition-all">Cancel</a>

                </div>

            </form>
        </div>
    </div>

</body>

</html>
