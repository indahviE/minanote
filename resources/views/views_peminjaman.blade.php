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
            <div class=" justify-between items-center mb-3">
                <h1 class="text-3xl font-bold">Data Peminjaman</h1>
                 <h1 class="text-md text-amber-400 font-bold">Halo Admin, {{Auth::user()->name}}!</h1>
                <!-- <div class="space-x-2">
                <button class="px-4 py-2 bg-gray-200 text-sm rounded hover:bg-gray-300">Download CSV</button>
                <button class="px-4 py-2 bg-black text-white text-sm rounded hover:bg-gray-800">Invite Organization</button>
            </div> -->
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 w-full mb-5">

                <!-- Card total Siswa -->
                <div class="bg-white rounded-2xl shadow-md p-6 hover:shadow-lg transition">
                    <div class="flex items-center justify-between">
                        <div>
                            <h2 class="text-gray-500 text-sm font-medium">Barang Dipinjam Siswa</h2>
                            <p class="text-3xl font-bold text-gray-800 mt-2">{{$total_barang_dipinjam_siswa}}</p>
                        </div>
                        <div class="p-4 bg-blue-100 rounded-full">
                           <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 48 48"><path fill="none" stroke="#2563EB" stroke-linecap="round" stroke-linejoin="round" d="M25.466 27.058c0 3.984-3.04 6.273-6.79 5.113s-6.79-5.33-6.79-9.313h0c0-3.984 3.04-6.274 6.79-5.114h0c3.75 1.16 6.79 5.33 6.79 9.314" stroke-width="1"/><path fill="none" stroke="#2563EB" stroke-linecap="round" stroke-linejoin="round" d="M23.086 26.223c0 1.61-.833 2.906-2.185 3.398c-1.352.491-3.017.105-4.368-1.014c-1.352-1.12-2.185-2.801-2.185-4.412m2.449-15.763l.235 4.916m17.216 2.693l-.469 23.527M4.5 11.593l12.297-3.161L43.5 11.359" stroke-width="1"/><path fill="none" stroke="#2563EB" stroke-linecap="round" stroke-linejoin="round" d="m4.5 11.593l2.108 19.781l27.171 8.194l9.135-7.96l.586-20.249l-9.252 4.682z" stroke-width="1"/><path fill="#2563EB" d="M21.057 22.81c0 .397-.303.626-.678.51c-.374-.116-.677-.532-.677-.93s.303-.626.677-.51s.678.532.678.93m-4.484-1.094c0 .398-.304.626-.678.51s-.678-.532-.678-.93c0-.397.304-.625.678-.51c.374.116.678.532.678.93"/></svg>
                        </div>
                    </div>
                </div>

                <!-- Card total Guru -->
                <div class="bg-white rounded-2xl shadow-md p-6 hover:shadow-lg transition">
                    <div class="flex items-center justify-between">
                        <div>
                            <h2 class="text-gray-500 text-sm font-medium">Barang Dipinjam Guru</h2>
                            <p class="text-3xl font-bold text-gray-800 mt-2">{{$total_barang_dipinjam_guru}}</p>
                        </div>
                        <div class="p-4 bg-green-100 rounded-full">
                         <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 48 48"><path fill="none" stroke="#16A34A" stroke-linecap="round" stroke-linejoin="round" d="M25.466 27.058c0 3.984-3.04 6.273-6.79 5.113s-6.79-5.33-6.79-9.313h0c0-3.984 3.04-6.274 6.79-5.114h0c3.75 1.16 6.79 5.33 6.79 9.314" stroke-width="1"/><path fill="none" stroke="#16A34A" stroke-linecap="round" stroke-linejoin="round" d="M23.086 26.223c0 1.61-.833 2.906-2.185 3.398c-1.352.491-3.017.105-4.368-1.014c-1.352-1.12-2.185-2.801-2.185-4.412m2.449-15.763l.235 4.916m17.216 2.693l-.469 23.527M4.5 11.593l12.297-3.161L43.5 11.359" stroke-width="1"/><path fill="none" stroke="#16A34A" stroke-linecap="round" stroke-linejoin="round" d="m4.5 11.593l2.108 19.781l27.171 8.194l9.135-7.96l.586-20.249l-9.252 4.682z" stroke-width="1"/><path fill="#16A34A" d="M21.057 22.81c0 .397-.303.626-.678.51c-.374-.116-.677-.532-.677-.93s.303-.626.677-.51s.678.532.678.93m-4.484-1.094c0 .398-.304.626-.678.51s-.678-.532-.678-.93c0-.397.304-.625.678-.51c.374.116.678.532.678.93"/></svg>
                        </div>
                    </div>
                </div>

                <!-- Card Total -->
                <div class="bg-white rounded-2xl shadow-md p-6 hover:shadow-lg transition">
                    <div class="flex items-center justify-between">
                        <div>
                            <h2 class="text-gray-500 text-sm font-medium">Total Barang Dipinjam</h2>
                            <p class="text-3xl font-bold text-gray-800 mt-2">{{$total_barang_dipinjam}}</p>
                        </div>
                        <div class="p-4 bg-purple-100 rounded-full">
                          <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 24 24"><g fill="none"><path stroke="#9333EA" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="m11 12l8.073-4.625M11 12L6.963 9.688M11 12v2.281m8.073-6.906a3.17 3.17 0 0 0-1.165-1.156L15.25 4.696m3.823 2.679c.275.472.427 1.015.427 1.58v1.608M2.926 7.374a3.14 3.14 0 0 0-.426 1.58v6.09c0 1.13.607 2.172 1.592 2.736l5.316 3.046A3.2 3.2 0 0 0 11 21.25M2.926 7.375a3.17 3.17 0 0 1 1.166-1.156l5.316-3.046a3.2 3.2 0 0 1 3.184 0l2.658 1.523M2.926 7.375l4.037 2.313m0 0l8.287-4.992"/><path fill="#9333EA" fill-rule="evenodd" d="M17.5 23a5.5 5.5 0 1 0 0-11a5.5 5.5 0 0 0 0 11m0-8.993a.5.5 0 0 1 .5.5V17h2.493a.5.5 0 1 1 0 1H18v2.493a.5.5 0 1 1-1 0V18h-2.493a.5.5 0 1 1 0-1H17v-2.493a.5.5 0 0 1 .5-.5" clip-rule="evenodd"/></g></svg>
                        </div>
                    </div>
                </div>

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
                        <div class="flex items-center text-center p-4 mb-4 text-sm text-green-800 border border-green-300 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400 dark:border-green-800"
                            role="alert">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 16 16">
                                <g fill="none" stroke="#166534" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="1.5">
                                    <polyline points="7.25 14.25 2.75 14.25 2.75 1.75 13.25 1.75 13.25 9.25" />
                                    <path d="m9.75 12.75 1.5 1.5 3-2.5m-8.5-4h4.5m-4.5 3h1.5m-1.5-6h4.5" />
                                </g>
                            </svg>
                            <span class="sr-only">Info</span>
                            <div>
                                <P><span class="font-medium ml-1">{{ Session::get('succes') }}</span></P>
                            </div>
                        </div>
                    @endif


                    {{-- alert for delete --}}

                    @if (Session::has('oke'))
                        <div class="flex items-center p-4 mb-4 text-sm text-red-800 border border-red-300 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400 dark:border-red-800"
                            role="alert">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24">
                                <path fill="#991B1B" fill-rule="evenodd"
                                    d="m6.774 6.4l.812 13.648a.8.8 0 0 0 .798.752h7.232a.8.8 0 0 0 .798-.752L17.226 6.4h1.203l-.817 13.719A2 2 0 0 1 15.616 22H8.384a2 2 0 0 1-1.996-1.881L5.571 6.4zM9.5 9h1.2l.5 9H10zm3.8 0h1.2l-.5 9h-1.2zM4.459 2.353l15.757 2.778a.5.5 0 0 1 .406.58L20.5 6.4L3.758 3.448l.122-.69a.5.5 0 0 1 .579-.405m6.29-1.125l3.94.695a.5.5 0 0 1 .406.58l-.122.689l-4.924-.869l.122-.689a.5.5 0 0 1 .579-.406z" />
                            </svg>
                            <div>
                                <span class="font-medium ml-1">{{ Session::get('oke') }}</span>
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
                                                <div class="text-gray-500 text-xs">NISN ({{ $data->siswa->nisn }})
                                                </div>
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
                                        <form action="/peminjaman/done/{{ $data->id }}" method="post">
                                            @csrf
                                            <button
                                                onclick="return confirm('Apakah barang benar sudah dikembalikan? (jika iya maka peminjaman ini akan dianggap selesai)')"
                                                type="submit"
                                                class="rounded-md bg-teal-600 py-0.5 px-2.5 border border-transparent text-sm text-white transition-all shadow-sm">
                                                Barang
                                                <p>dikembalikan</p>
                                            </button>
                                        </form>

                                        <form action="/peminjaman/delete/{{ $data->id }}" method="post">
                                            @csrf

                                            <button onclick="return confirm('Apakah yakin data ingin dihapus?')"
                                                type="submit"
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
