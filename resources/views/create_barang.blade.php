<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Create - Barang</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-50 gap-6  flex">
    @include('components.sidebar')

    <div class=" p-10 my-6 w-6/12 bg-white shadow-md rounded-xl p-8 grid gap-8 ms-72">

        <!-- Form Section -->
        <div class="w-full">
            <h2 class="text-xl font-semibold ">Create Barang</h2>
            <div class=" text-sm mt-2 mb-4 text-gray-600">Masukan Data dengan valid dan benar!</div>
            <form class="space-y-4" method="post" action="/barang/create" enctype="multipart/form-data">
                @csrf
                <div>
                    <label class="block text-sm font-medium text-gray-400">Nama Barang</label>
                    <input type="text" name="nama_barang" class="w-full mt-1 border border-gray-300 rounded-xl px-3 py-2" placeholder="Masukan nama barang.." required>
                </div>
                 <div class="md:w-1/2 px-3">
                <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2"
                    fore="grid-last-name">
                    Foto
                </label>
                <input type="file" name="file_foto"
                    class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4"
                    id="grid-last-name" placeholder="">
            </div>
        </div>
                {{-- <div>
                    <label class="block text-sm font-medium text-gray-400">Foto</label>
                    <input type="file_foto" name="foto" type="file" class="w-full mt-1 border border-gray-300 rounded-xl px-3 py-2" placeholder="">
                </div> --}}
                <div>
                    <label class="block text-sm font-medium text-gray-400">Stock</label>
                    <input min="1" type="number" name="stock" class="w-full mt-1 border border-gray-300 rounded-xl px-3 py-2" placeholder="Masukan stock.." required>
                </div>
                <div>
                       <label class="block text-sm font-medium text-gray-400">Kelayakan</label>
                     <select name="kelayakan" class="w-full mt-1 border border-gray-300 rounded-xl px-3 py-2 text-gray-600">
                        <option class="text-sm text-gray-500"></option>
                        <option value="baik">Baik</option>
                        <option value="rusak ringan">Rusak Ringan</option>
                    </select>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-400">Deskripsi</label>
                    <input type="text" name="deskripsi" class="w-full mt-1 border border-gray-300 rounded-xl px-3 py-2" placeholder="Masukan deskripsi.." required>
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
                    <a href="/barang" class="bg-gray-300 text-sm text-gray-800 px-6 py-2 font-semibold rounded hover:bg-gray-400 transition-all">Cancel</a>
                </div>
                <div class="pt-2">
                </div>

            </form>
        </div>
    </div>

</body>

</html>
