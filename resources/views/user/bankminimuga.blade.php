@extends('user.master')

@section('master')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Berita Sekolah</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .news-card {
            margin-bottom: 20px;
        }
        .news-image {
            height: 200px;
            object-fit: cover;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Berita Sekolah</h1>
        
        <div class="row">
            <!-- News Item 1 -->
            <div class="col-md-4 news-card">
                <div class="card">
                    <img src="path/to/image1.jpg" class="card-img-top news-image" alt="Berita 1">
                    <div class="card-body">
                        <h5 class="card-title">Judul Berita 1</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, nulla et dictum interdum, nisi lorem egestas odio.</p>
                        <a href="#" class="btn btn-primary">Baca Selengkapnya</a>
                    </div>
                </div>
            </div>
            <!-- News Item 2 -->
            <div class="col-md-4 news-card">
                <div class="card">
                    <img src="path/to/image2.jpg" class="card-img-top news-image" alt="Berita 2">
                    <div class="card-body">
                        <h5 class="card-title">Judul Berita 2</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, nulla et dictum interdum, nisi lorem egestas odio.</p>
                        <a href="#" class="btn btn-primary">Baca Selengkapnya</a>
                    </div>
                </div>
            </div>
            <!-- News Item 3 -->
            <div class="col-md-4 news-card">
                <div class="card">
                    <img src="assets/images/tempatparkir.jpg" class="card-img-top news-image" alt="Berita 3">
                    <div class="card-body">
                        <h5 class="card-title">Judul Berita 3</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, nulla et dictum interdum, nisi lorem egestas odio.</p>
                        <a href="#" class="btn btn-primary">Baca Selengkapnya</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

@endsection
