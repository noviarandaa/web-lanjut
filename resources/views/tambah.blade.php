<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <title>Tambah Produk</title>
</head>
<body>
    <nav class="navbar bg-body-tertiary fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('home') }}">UTS Laravel</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
                aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar"
                aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">UTS Laravel</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link"
                                href="{{ route('home') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link"
                                href="{{ route('produk') }}">Produk</a>
                        </li>
                    </ul>
                    <form class="d-flex mt-3" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        <h1>Form Tambah Produk</h1>
        <div>
            <form action="#" method="#">
                <div class="row">
                    <div class="col-3">
                        <label for="kode_produk" class="form-label">kode Produk</label>
                        <input type="text" name="kode_produk" id="kode_produk" class="form-control col-3" placeholder="Input Kode Produk">
                    </div>
                    <div class="col-3">
                        <label for="nama_produk" class="form-label">Nama Produk</label>
                        <input type="text" name="nama_produk" id="nama_produk" class="form-control col-3" placeholder="Input Nama Produk">
                    </div>
                    <div class="col-3">
                        <label for="jenis_produk" class="form-label">jenis Produk</label>
                        <select name="jenis_produk" id="jenis_produk" class="form-control col-3">
                            <option value="">Input Jenis Produk</option>
                            @while ($n < count($jenis_produk))
                            <option value="{{ $jenis_produk[$n] }}">{{ $jenis_produk[$n] }}</option>
                            @php
                                $n++;
                            @endphp
                            @endwhile
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-4">
                        <label for="harga_produk" class="form-label">harga Produk</label>
                        <input type="text" name="harga_produk" id="harga_produk" class="form-control col-4" placeholder="Input Harga">
                    </div>
                    <div class="col-5">
                        <button type="submit" class="btn btn-success form-control" style="margin-top: 32.2px">Simpan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <script src="/js/bootstrap.js"></script>
</body>
</html>