<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title> Update Buku</title>

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
                  Data Buku Baru
                </div>
                <div class="card-body">
                    <form action="/buku/{{ $buku->id }}" method="POST">
                        @method('put')
                        @csrf
                        <table class="table-borderless table" style="margin-bottom: 20px;">
                            <tr>
                                <td>
                                    <label for="judul" class="form-label"> Judul Buku </label>
                                    <input type="text" class="form-control mb-3 @error('judul') is-invalid @enderror" name="judul" required value="{{ old('judul', $buku->judul) }}">
                                    @error('judul')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                    </div>
                                </td>
                                <td>
                                    <label for="penulis" class="form-label"> Penulis </label>
                                    <input type="text" class="form-control mb-3 @error('penulis') is-invalid @enderror" name="penulis" required value="{{ old('penulis', $buku->penulis) }}">
                                    @error('penulis')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                    </div>
                                </td>
                                <td>
                                    <label for="penerbit" class="form-label"> Penerbit </label>
                                    <input type="text" class="form-control mb-3 @error('penerbit') is-invalid @enderror" name="penerbit" required value="{{ old('penerbit', $buku->penerbit) }}">
                                    @error('penerbit')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="judul" class="form-label"> Jenis Buku </label>
                                    <select class="form-control mb-3" name="jenis_buku">
                                        <option selected="true" disabled="disabled">Pilih Jenis Buku</option>
                                        <option value="Fiksi"> Fiksi </option>
                                        <option value="Non Fiksi"> Non Fiksi </option>
                                    </select>  
                                    @error('jenis_buku')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                    </div>
                                </td>
                                <td>
                                    <label for="tahun_terbit" class="form-label"> Tahun Terbit </label>
                                    <input type="number" class="form-control mb-3 @error('tahun_terbit') is-invalid @enderror" name="tahun_terbit" required value="{{ old('tahun_terbit', $buku->tahun_terbit) }}">
                                    @error('tahun_terbit')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                    </div>
                                </td>
                                <td>
                                    <label for="jumlah_buku" class="form-label"> Jumlah Buku </label>
                                    <input type="text" class="form-control mb-3 @error('jumlah_buku') is-invalid @enderror" name="jumlah_buku" required value="{{ old('jumlah_buku', $buku->jumlah_buku) }}">
                                    @error('jumlah_buku')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                    </div>
                                </td>
                            </tr>
                        </table> 
                        <a href="/" class="btn btn-primary" style="float: left;">Kembali</a>
                        <button type="submit" style="float: right;" class="mb-3 btn btn-success btn-user btn-block">Simpan</button>                                
                    </form>
                </div>
              </div>
        </div>
    </body>
</html>
