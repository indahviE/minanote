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
            <h2 class="text-xl font-semibold">Formulir Modify Data Siswa</h2>
            <div class=" text-sm mt-2 mb-4 text-gray-600">Masukan Data dengan valid dan benar!</div>
            <form class="space-y-4" method="post" action="/siswa/update/{{$data->id}}">
                @csrf
                @if (Session::has('oke'))
                <div>
                    <label class="block text-sm font-medium text-gray-400">Nama Siswa</label>
                    <input type="text" name="nama_siswa" value="{{$data->nama_siswa}}" class="w-full mt-1 border border-gray-300 rounded-xl px-3 py-2" placeholder="Masukan nama siswa..">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-400">NISN Siswa</label>
                    <input type="text" name="nisn" value="{{$data->nisn}}" class="w-full mt-1 border border-gray-300 rounded-xl px-3 py-2" placeholder="Masukan nisn siswa..">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-400">Kelas Siswa</label>
                    <input type="text" name="kelas" value="{{$data->kelas}}" class="w-full mt-1 border border-gray-300 rounded-xl px-3 py-2" placeholder="Masukan nama kelas..">
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-400">Jurusan Siswa</label>
                    <input type="text" name="jurusan" value="{{$data->jurusan}}" class="w-full mt-1 border border-gray-300 rounded-xl px-3 py-2" placeholder="Masukan nama jurusan..">
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

                    <div class="flex items-center p-4 mb-4 text-sm text-green-800 border border-green-300 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400 dark:border-green-800"
                        role="alert">
                        <svg class="shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                        </svg>
                        <span class="sr-only">Info</span>
                        <div>
                            <span class="font-medium">{{Session::get('oke')}}</span>
                        </div>
                    </div>
                    @endif

                <div class="pt-2">
                    <button type="submit" class="bg-teal-600 text-sm text-white px-6 py-2 font-semibold rounded hover:bg-teal-700 transition-all">Submit Modify Data</button>
                </div>

            </form>
        </div>
    </div>

</body>

</html>