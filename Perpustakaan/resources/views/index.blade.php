<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Daftar Buku</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body>
        <div class="container m-5 p-5">
            <a href="/create" class="btn btn-primary mb-3"> Tambah Buku </a>
            @if(session()->has('success'))
                  <div class="alert alert-success alert-dismissible fade show" role="alert">
                     {{ session('success') }}
                  </div>
                @endif
            <table class="table text-center">
                <thead>
                  <tr class="">
                    <th scope="col">No.</th>
                    <th scope="col">Judul Buku</th>
                    <th scope="col">Penulis</th>
                    <th scope="col">Penerbit</th>
                    <th scope="col">Jenis Buku</th>
                    <th scope="col">Tahun Terbit</th>
                    <th scope="col">Jumlah Buku</th>
                    <th scope="col">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($buku as $buku)
                        <tr>
                            <th scope="row"> {{ $loop->iteration }} </th>
                            <td> {{ $buku->judul }} </td>
                            <td> {{ $buku->penulis }} </td>
                            <td> {{ $buku->penerbit }} </td>
                            <td> {{ $buku->jenis_buku }} </td>
                            <td> {{ $buku->tahun_terbit }} </td>
                            <td> {{ $buku->jumlah_buku }} </td>
                            <td>

                                <a href="/show/{{ $buku->id }}" class="btn btn-sm btn-success"> Lihat </a>

                                <a href="/edit/{{ $buku->id }}" class="btn btn-sm btn-info"> Edit </a>

                                <form action="/delete/{{ $buku->id }}" method="POST" class="d-inline">
                                    @method('delete')
                                    @csrf
                                    <button class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data buku ini ?')"> Hapus </button>
                                </form>

                            </td>
                        </tr>
                    @endforeach
                </tbody>
              </table>
        </div>
    </body>
</html>
