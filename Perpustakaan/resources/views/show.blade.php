<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Data Buku</title>

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
            <div class="card">
                <div class="card-header">
                  <h4> Detail Buku </h4>
                </div>
                <div class="card-body">
                  <h5 class="card-title"> {{ $buku->judul }} </h5>
                  <p class="card-text"> Penulis : {{ $buku->penulis }} </p>
                  <p class="card-text"> Penerbit : {{ $buku->penerbit }} </p>
                  <p class="card-text"> Jenis Buku : {{ $buku->jenis_buku }} </p>
                  <p class="card-text"> Tahun Terbit : {{ $buku->tahun_terbit }} </p>
                  <p class="card-text"> Jenis Buku : {{ $buku->jenis_buku }} </p>
                  <p class="card-text"> Jumlah Buku : {{ $buku->jumlah_buku }} </p>
                  <a href="/" class="btn btn-sm btn-primary">Kembali</a>
                </div>
              </div>
        </div>
    </body>
</html>
