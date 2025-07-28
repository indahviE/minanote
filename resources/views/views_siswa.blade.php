<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login - Coinito</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-50">

    <div class="flex">

        @include('components.sidebar')

        <div class="w-full p-12 bg-white">
            <div class="flex justify-between items-center mb-6">
                <h1 class="text-2xl font-bold">Data Siswa</h1>
                <!-- <div class="space-x-2">
                <button class="px-4 py-2 bg-gray-200 text-sm rounded hover:bg-gray-300">Download CSV</button>
                <button class="px-4 py-2 bg-black text-white text-sm rounded hover:bg-gray-800">Invite Organization</button>
            </div> -->
            </div>
            <div class="flex items-end gap-2  mb-4 ">
                <form class="flex items-center w-5/12" method="get">
                    <input type="text" name="s" value="{{$search_key}}" placeholder="Cari berdasarkan nama siswa.." class="w-full px-4 py-2 border text-gray-600 rounded-md">
                </form>

                <a href="/siswa/create"
                    class="inline-flex text-sm items-center px-4 py-2 bg-blue-600 text-white font-semibold rounded-lg shadow-md hover:bg-blue-700 hover:shadow-lg transition duration-300">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M12 4v16m8-8H4" />
                    </svg>
                    Tambah Data
                </a>

                <div class="text-gray-400 text-sm mb-2 ms-auto">
                    Menampilkan {{count($siswa)}} dari total {{count($siswa)}} data
                </div>

            </div>

            <div class="overflow-x-auto rounded border">
                <table class="min-w-full text-sm text-left">
                    <thead class="bg-gray-100 text-gray-700">
                        <tr>
                            <th class="px-4 py-2 font-medium">#</th>
                            <th class="px-4 py-2 font-medium">Nama/NISN</th>
                            <th class="px-4 py-2 font-medium">Kelas</th>

                            <th class="px-4 py-2 font-medium">Aksi</th>

                        </tr>
                    </thead>
                    <tbody class="divide-y">
                        @foreach($siswa as $data)
                        <tr class="hover:bg-gray-50">
                            <td class="px-4 py-2">1</td>
                            <td class="px-4 py-2">
                                <div class="flex items-center space-x-2">
                                    <img src="https://st5.depositphotos.com/89817276/76538/v/450/depositphotos_765381964-stock-illustration-indonesian-junior-high-school-student.jpg" alt="Logo" class="w-6 h-6 rounded-full">
                                    <div>
                                        <div class="font-medium">{{$data->nama_siswa}}</div>
                                        <div class="text-gray-500 text-xs">NISN ({{$data->nisn}})</div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-4 py-2">
                                <div class="font-medium">{{$data->kelas}}</div>
                                <div class="text-gray-500 text-xs">Jurusan {{$data->jurusan}}</div>
                            </td>

                            <td class="px-4 py-2">
                                <div class="flex gap-2">
                                    <a href="/siswa/update/{{$data->id}}" class="rounded-md bg-teal-600 py-0.5 px-2.5 border border-transparent text-sm text-white transition-all shadow-sm">
                                        Modify Data
                                    </a>

                                    <form action="/siswa/delete/{{$data->id}}" method="post">
                                        @csrf

                                        <button type="submit" class="rounded-md bg-pink-600 py-0.5 px-2.5 border border-transparent text-sm text-white transition-all shadow-sm">
                                            Delete Data
                                        </button>
                                    </form>

                                </div>
                            </td>

                        </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>

            <div class="mt-4 flex justify-between items-center text-sm text-gray-600">

                <div>

                </div>
            </div>
        </div>
    </div>