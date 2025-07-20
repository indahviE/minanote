<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
    <link rel="stylesheet" href="{{asset("home.css")}}">
</head>
<body>
    <h1>Selamat Datang di Inventaris Barang!!</h1>
    <table>
        <thead>
            <tr>
                <th>No</th> 
                <th>Barang</th> 
                <th>Jumlah</th> 
                <th>Kondisi</th> 
                <th>Action</th> 
            </tr>
        </thead>
    <tbody>
        @foreach ( $siswa as $data )
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $data->nama_siswa}}</td>
            <td>{{ $data->kelas }}</td>
            <td>{{ $data->nisn }}</td>
            <td>
                <a href="/siswa/update/{{$data->id}}">Update</a>
            </td>
            <td>
                <form action="/siswa/delete/{{$data->id}}" method="post">
                    @csrf
                    <button type="submit">Hapus data</button>
                </form>
            </td>
        </tr>
            
        @endforeach
    </tbody>
    </table>
    <br>
    <a href="/siswa/create">Pindah Halaman Create</a>
</body>
</html>