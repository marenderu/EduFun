<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('bootstrap-5.3.3-dist/css/bootstrap.min.css') }}">
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
        <a class="navbar-brand fw-bold" href="/">EduFun</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="categoryDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Category
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="categoryDropdown">
                            <li><a class="dropdown-item" href="/Category/{{$category[0]}}">Data Science</a></li>
                            <li><a class="dropdown-item" href="/Category/{{$category[1]}}">Network Security</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/Writers">Writers</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/AboutUs">About Us</a>
                    </li>
                    
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <br>
        <h1 class="mb-4 fw-bold">Our Writers: </h1>
        <div class="row mb-5">
            @foreach ($writers as $writer)
            <div class="col-md-4 mb-5">
                <div class="d-flex justify-content-center">
                    <a href="/Writers/{{$writer->writer_name}}">
                        <img src="{{$writer->writer_profile_picture_link}}" alt="" class="rounded-circle img-fluid me-3 text-center" style="width: 300px; height: 300px;">
                    </a>
                </div>                
                <h2 class="text-center">{{str_replace('-',' ',$writer->writer_name)}}</h2>
                <p class="text-center">{{$writer->description}}</p>
            </div>
            @endforeach
            
        </div>
    </div>

    <footer class="bg-dark text-light text-center py-3 fixed-bottom">
        &copy; EduFun 2024 | Web Programming | Marendra Rambang Nugroho | 2602193805
    </footer>
    <script src="{{ asset('bootstrap-5.3.3-dist/js/bootstrap.bundle.min.js') }}"></script>
</body>