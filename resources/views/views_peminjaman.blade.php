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
            <div class="flex justify-between items-center mb-6">
                <h1 class="text-2xl font-bold">Data Peminjaman</h1>
                <!-- <div class="space-x-2">
                <button class="px-4 py-2 bg-gray-200 text-sm rounded hover:bg-gray-300">Download CSV</button>
                <button class="px-4 py-2 bg-black text-white text-sm rounded hover:bg-gray-800">Invite Organization</button>
            </div> -->
            </div>
            <div class="flex items-end gap-2  mb-4 ">

                <a href="/peminjaman/create"
                    class="inline-flex text-sm items-center px-4 py-2 bg-blue-600 text-white font-semibold rounded-lg shadow-md hover:bg-blue-700 hover:shadow-lg transition duration-300">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4" />
                    </svg>
                    Lakukan Peminjaman Barang
                </a>

                <div class="text-gray-400 text-sm mb-2 ms-auto">
                    Menampilkan {{ count($peminjaman) }} dari total {{ count($peminjaman) }} data
                </div>

            </div>

            <div class="overflow-x-auto rounded border">
                <table class="min-w-full text-sm text-left">
                    <thead class="bg-gray-100 text-gray-700">
                        <tr>
                            <th class="px-4 py-2 font-medium">No</th>
                            <th class="px-4 py-2 font-medium">Nama/Entitas Yang Meminjam</th>
                            <th class="px-4 py-2 font-medium">Barang Yang Dipinjam/Jumlah</th>

                            <th class="px-4 py-2 font-medium">Tanggal Pinjam/Kembali</th>
                            <th class="px-4 py-2 font-medium">Status</th>
                            <th class="px-4 py-2 font-medium">Aksi</th>

                        </tr>
                    </thead>

                    {{-- alert for create --}}
                    @if (Session::has('succes'))
                        <div class="flex items-center p-4 mb-4 text-sm text-green-800 border border-green-300 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400 dark:border-green-800"
                            role="alert">
                            <svg class="shrink-0 inline w-4 h-4 me-3" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                            </svg>
                            <span class="sr-only">Info</span>
                            <div>
                                <span class="font-medium">{{ Session::get('succes') }}</span>
                            </div>
                        </div>
                    @endif

                    {{-- alert for update --}}
                    @if (Session::has('ok'))
                        <div class="flex items-center p-4 mb-4 text-sm text-green-800 border border-green-300 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400 dark:border-green-800"
                            role="alert">
                            <svg class="shrink-0 inline w-4 h-4 me-3" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                            </svg>
                            <span class="sr-only">Info</span>
                            <div>
                                <span class="font-medium">{{ Session::get('ok') }}</span>
                            </div>
                        </div>
                    @endif


                    {{-- alert for delete --}}

                    @if (Session::has('oke'))
                        <div class="flex items-center p-4 mb-4 text-sm text-red-800 border border-red-300 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400 dark:border-red-800"
                            role="alert">
                            <svg class="shrink-0 inline w-4 h-4 me-3" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                            </svg>
                            <span class="sr-only">Info</span>
                            <div>
                                <span class="font-medium">{{Session::get('oke')}}</span>
                            </div>
                        </div>
                    @endif

                    <tbody class="divide-y">
                        @foreach ($peminjaman as $data)
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


                                        @if ($data->entitas_peminjam == 'Siswa')
                                            <div>
                                                <div class="font-medium">{{ $data->siswa->nama_siswa }}</div>
                                                <div class="text-gray-500 text-xs">NISN ({{ $data->siswa->nisn }})</div>
                                            </div>
                                        @else
                                            <div>
                                                <div class="font-medium">{{ $data->guru->nama_guru }}</div>
                                                <div class="text-gray-500 text-xs">No Telepon
                                                    ({{ $data->guru->no_telp }})
                                                </div>
                                            </div>
                                        @endif

                                    </div>
                                </td>
                                <td class="px-4 py-2">
                                    <div class="flex items-center space-x-2">
                                        <img src="{{ $data->barang->foto }}" alt="Logo"
                                            class="w-6 h-6 rounded-full">

                                        <div>
                                            <div class="font-medium">{{ $data->barang->nama_brg }}</div>
                                            <div class="text-gray-500 text-xs">Meminjam Sebanyak
                                                ({{ $data->jml_pinjam }} buah)</div>
                                        </div>

                                    </div>
                                </td>
                                <td class="px-4 py-2">
                                    <div class="font-medium text-xs">Tanggal Pinjam : {{ $data->tgl_pinjam }}</div>
                                    <div class="text-gray-500 text-xs">Akan Dikembalikan Pada :
                                        {{ $data->tgl_kembali }}</div>
                                </td>

                                <td>
                                    <div
                                        class="rounded-md bg-indigo-600 py-0.5 px-2.5 border border-transparent text-sm text-white transition-all shadow-sm">
                                        Dipinjam
                                    </div>
                                </td>

                                <td class="px-4 py-2">
                                    <div class="flex gap-1 flex-col">
                                        <form action="/peminjaman/done{{ $data->id }}" method="post">
                                            @csrf
                                            <button
                                                onclick="return confirm('Apakah barang benar sudah dikembalikan? (jika iya maka peminjaman ini akan dianggap selesai)')"
                                                type="submit"
                                                class="rounded-md bg-teal-600 py-0.5 px-2.5 border border-transparent text-sm text-white transition-all shadow-sm">
                                                Barang
                                                <p>dikembalikan
                                            </button>
                                        </form>

                                        <form action="/peminjaman/delete/{{ $data->id }}" method="post">
                                            @csrf

                                            <button onclick="return confirm('Apakah yakin data ingin dihapus?')" type="submit"
                                                class="rounded-md bg-pink-600 py-0.5 px-4 border border-transparent text-sm text-white transition-all shadow-sm">
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
