<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>id</th>
                <th>Judul Buku</th>
                <th>Penulis</th>
                <th>Harga</th>
                <th>Tgl Terbit</th>
                <th>Aksi</th>
                
            </tr>
        </thead>

        <tbody>
            @foreach($data_buku as $buku)
                <tr>
                    <td>{{ ++$no }}</td>
                    <td>{{ $buku->judul }}</td>
                    <td>{{ $buku->penulis }}</td>
                    <td>{{ "Rp".number_format($buku->harga, 2, ',', ',') }}</td>
                    <td>{{ $buku->tgl_terbit }}</td>
                    <td>
<a href="{{ route('buku.edit', $buku->id) }}">
<button> Update </button>
</a>

                        <form action="{{ route('buku.destroy', $buku->id) }}" method="post">
                            @csrf
                            <button onclick="return confirm('Yakin mau dihapus?')"> Hapus </button>
                        </form>

                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <p align="right" style="padding-right:8%"><a href="{{ route('buku.create') }}"> Tambah Buku </a></p>

    <h3 style="padding-left:3%">Jumlah data: {{ $no }}</h3>
    <h3 style="padding-left:3%">Jumlah data: {{ $buku -> count('id') }}</h3>
    <h3 style="padding-left:3%">Jumlah harga: {{ "Rp".number_format($buku->sum('harga')) }}</h3>

    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
</html>