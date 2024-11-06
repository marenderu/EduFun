<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('bootstrap-5.3.3-dist/css/bootstrap.min.css') }}">
</head>
<body>
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

    <div class="container p-2">
        <h1>{{$article->category}}</h1>
        <div class="container p-2" style="position: relative;">
            <img src="{{asset($article->image_link)}}" alt="" class="img-fluid w-100 rounded " style="height: 400px; object-fit: cover; object-position: center;">
            <br>
            <br>
            <h3>{{$article->title}} </h3>
            <p >by: {{$article->writer->writer_name}}</p>
            <p style="text-align: justify">{{$article->content}}</p>
        </div>
        
    </div>

    <footer class="bg-dark text-light text-center py-3 fixed-bottom">
        &copy; EduFun 2024 | Web Programming | Marendra Rambang Nugroho | 2602193805
    </footer>

    <!-- Bootstrap JS and dependencies -->
    <script src="{{ asset('bootstrap-5.3.3-dist/js/bootstrap.bundle.min.js') }}"></script>
</body>

