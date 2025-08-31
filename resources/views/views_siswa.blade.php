<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Minanote</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-50">

    <div class="flex">

        @include('components.sidebar')

        <div class="w-full p-12 bg-white ms-64">
            <div class="justify-between items-center mb-6">
                <h1 class="text-2xl font-bold">Data Siswa</h1>
                <h1 class="text-md text-amber-400 font-bold">Halo Admin, {{Auth::user()->name}}!</h1>
                <!-- <div class="space-x-2">
                <button class="px-4 py-2 bg-gray-200 text-sm rounded hover:bg-gray-300">Download CSV</button>
                <button class="px-4 py-2 bg-black text-white text-sm rounded hover:bg-gray-800">Invite Organization</button>
            </div> -->
            </div>
            <div class="flex items-end gap-2  mb-4 ">
                <form class="flex items-center w-5/12" method="get">
                    <input type="text" name="s" value="{{ $search_key }}"
                        placeholder="Cari berdasarkan nama siswa . ."
                        class="w-full px-4 py-2 border text-gray-600 rounded-md">
                </form>

                <a href="/siswa/create"
                    class="inline-flex text-sm items-center px-4 py-2 bg-blue-600 text-white font-semibold rounded-lg shadow-md hover:bg-blue-700 hover:shadow-lg transition duration-300">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4" />
                    </svg>
                    Tambah Data
                </a>

                <div class="text-gray-400 text-sm mb-2 ms-auto">
                    Menampilkan {{ count($siswa) }} dari total {{ count($siswa) }} data
                </div>

            </div>

            <div class="overflow-x-auto rounded border">
                <table class="min-w-full text-sm text-left">
                    <thead class="bg-gray-100 text-gray-700">
                        <tr>
                            <th class="px-4 py-2 font-medium">No</th>
                            <th class="px-4 py-2 font-medium">Nama/NISN</th>
                            <th class="px-4 py-2 font-medium">Kelas</th>
                            <th class="px-4 py-2 font-medium">Gender</th>

                            <th class="px-4 py-2 font-medium">Aksi</th>

                        </tr>
                    </thead>

                    {{-- alert for update --}}
                    @if (Session::has('ok'))
                        <div class="flex items-center p-4 mb-4 text-sm text-green-800 border border-green-300 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400 dark:border-green-800"
                            role="alert">
                         <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 20 20"><path fill="#166534" d="M5.7 9c.4-2 2.2-3.5 4.3-3.5c1.5 0 2.7.7 3.5 1.8l1.7-2C14 3.9 12.1 3 10 3C6.5 3 3.6 5.6 3.1 9H1l3.5 4L8 9zm9.8-2L12 11h2.3c-.5 2-2.2 3.5-4.3 3.5c-1.5 0-2.7-.7-3.5-1.8l-1.7 1.9C6 16.1 7.9 17 10 17c3.5 0 6.4-2.6 6.9-6H19z"/></svg>
                            <div>
                                <span class="font-medium ml-1">{{ Session::get('ok') }}</span>
                            </div>
                        </div>
                    @endif

                    {{-- alert for create --}}
                    @if (Session::has('succes'))
                        <div class="flex items-center p-4 mb-4 text-sm text-green-800 border border-green-300 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400 dark:border-green-800"
                            role="alert">
                             <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 16 16"><g fill="none" stroke="#166534" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"><polyline points="7.25 14.25 2.75 14.25 2.75 1.75 13.25 1.75 13.25 9.25"/><path d="m9.75 12.75 1.5 1.5 3-2.5m-8.5-4h4.5m-4.5 3h1.5m-1.5-6h4.5"/></g></svg>
                            <div>
                                <span class="font-medium ml-1">{{ Session::get('succes') }}</span>
                            </div>
                        </div>
                    @endif

                    {{-- alert for delete --}}
                    @if (Session::has('okk'))
                        <div class="flex items-center p-4 mb-4 text-sm text-red-800 border border-red-300 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400 dark:border-red-800"
                            role="alert">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"><path fill="#991B1B" fill-rule="evenodd" d="m6.774 6.4l.812 13.648a.8.8 0 0 0 .798.752h7.232a.8.8 0 0 0 .798-.752L17.226 6.4h1.203l-.817 13.719A2 2 0 0 1 15.616 22H8.384a2 2 0 0 1-1.996-1.881L5.571 6.4zM9.5 9h1.2l.5 9H10zm3.8 0h1.2l-.5 9h-1.2zM4.459 2.353l15.757 2.778a.5.5 0 0 1 .406.58L20.5 6.4L3.758 3.448l.122-.69a.5.5 0 0 1 .579-.405m6.29-1.125l3.94.695a.5.5 0 0 1 .406.58l-.122.689l-4.924-.869l.122-.689a.5.5 0 0 1 .579-.406z"/></svg>
                            <div>
                                <span class="font-medium ml-1">{{ Session::get('okk') }}</span>
                            </div>
                        </div>
                    @endif

                    <tbody class="divide-y">
                        @foreach ($siswa as $data)
                            <tr class="hover:bg-gray-50">
                                <td class="px-4 py-2">{{ $loop->iteration }}</td>
                                <td class="px-4 py-2">
                                    <div class="flex items-center space-x-2">
                                        @if ($data->gender == 'lk')
                                            <img src="https://st5.depositphotos.com/89817276/76538/v/450/depositphotos_765381964-stock-illustration-indonesian-junior-high-school-student.jpg"
                                                alt="Logo" class="w-6 h-6 rounded-full">
                                        @endif

                                        @if ($data->gender == 'pr')
                                            <img src="https://img.freepik.com/premium-vector/indonesian-senior-high-school-student-cute-girl-character-kawaii-chibi_380474-601.jpg"
                                                alt="Logo" class="w-6 h-6 rounded-full">
                                        @endif

                                        <div>
                                            <div class="font-medium">{{ $data->nama_siswa }}</div>
                                            <div class="text-gray-500 text-xs">NISN ({{ $data->nisn }})</div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-4 py-2">
                                    <div class="font-medium">{{ $data->kelas }}</div>
                                    <div class="text-gray-500 text-xs">Jurusan {{ $data->jurusan }}</div>
                                </td>
                                <td class="px-4 py-2">
                                    <div class="text-gray-500 text-xs"> {{ $data->gender == "lk"? "laki-laki": "perempuan" }}</div>
                                    {{-- ternary operator --}}
                                </td>

                                <td class="px-4 py-2">
                                    <div class="flex gap-2">
                                        <a href="/siswa/update/{{ $data->id }}"
                                            class="rounded-md bg-teal-600 py-0.5 px-2.5 border border-transparent text-sm text-white transition-all shadow-sm">
                                            Modify Data
                                        </a>

                                        <form action="/siswa/delete/{{ $data->id }}" method="post">
                                            @csrf

                                            <button onclick="return confirm('Apakah yakin data ingin dihapus?')" type="submit"
                                                class="rounded-md bg-pink-600 py-0.5 px-2.5 border border-transparent text-sm text-white transition-all shadow-sm">
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
