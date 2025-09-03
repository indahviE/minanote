<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Update - Barang</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-50 gap-6  flex ">
    @include('components.sidebar')

    <div class=" p-10 my-6 w-6/12 bg-white shadow-md rounded-xl p-8 grid gap-8 ms-72">

        <!-- Form Section -->
        <div class="w-full">
            <h2 class="text-xl font-semibold">Formulir Modify Data Barang</h2>
            <div class=" text-sm mt-2 mb-4 text-gray-600">Masukan Data dengan valid dan benar!</div>
            <form class="space-y-4" method="post" action="/barang/update/{{$data->id}}" enctype="multipart/form-data">
                @csrf
                <div>
                    <label class="block text-sm font-medium text-gray-400">Nama Barang</label>
                    <input type="text" name="nama_barang" value="{{$data->nama_barang}}" class="w-full mt-1 border border-gray-300 rounded-xl px-3 py-2" placeholder="Masukan nama barang..">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-400" fore="grid-last-name">Foto</label>
                    <input type="file" name="file_foto" value="{{$data->file_foto}}" class="w-full mt-1 border border-gray-300 rounded-xl px-3 py-2" id="grid-last-name" placeholder="">
                </div>

                <div class="flex gap-4">
                    <div class="w-full">
                        <label class="block text-sm font-medium text-gray-400">Stock</label>
                        <input type="number" min="1" name="stock" value="{{$data->stock}}" class="w-full mt-1 border border-gray-300 rounded-xl px-3 py-2" placeholder="Masukan Stock..">
                    </div>

                    <div class="w-full">
                        <label class="block text-sm font-medium text-gray-400">Kelayakan</label>
                        <select name="Kelayakan" class="w-full mt-1 border border-gray-300 rounded-xl px-3 py-2 text-gray-600">
                            <option value="baik">Baik</option>
                            <option value="rusak">Rusak Sedikit</option>
                        </select>
                    </div>
                </div>


                <div>
                    <label class="block text-sm font-medium text-gray-400">Deskripsi</label>
                    <textarea type="text" name="deskripsi" class="w-full mt-1 border border-gray-300 rounded-xl px-3 py-2" placeholder="Masukan deskripsi..">{{$data->deskripsi}}</textarea>
                </div>

                <div class="pt-2">
                    <button type="submit" class="bg-teal-600 text-sm text-white px-6 py-2 font-semibold rounded hover:bg-teal-700 transition-all">Submit Modify Data</button>
                    <a href="/barang" class="bg-gray-300 text-sm text-gray-800 px-6 py-2 font-semibold rounded hover:bg-gray-400 transition-all">Cancel</a>

                </div>

            </form>
        </div>
    </div>

</body>

</html>