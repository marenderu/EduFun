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

    <div class="container-fluid p-0" style="position: relative;">
        <img src="{{ asset('img/background.jpg') }}" alt="Background" class="img-fluid w-100" 
          style="height: 500px; object-fit: cover; object-position: center;">
    </div>


    <!-- Articles Section -->

    <div class="container my-5">
    @foreach ($articles as $article)
        <div class="row mb-5">
            <div class="col-md-4">
                <img src="{{ asset($article->image_link) }}" class="img-fluid rounded me-3" alt="Article Image" style="width: 100%; height: 230px;">
            </div>
            <div class="col-md-8 d-flex flex-column justify-content-between">
                <div>
                    <h2 class="card-title mb-3">{{ $article->title }}</h2>
                    <p class="card-text" style="font-size: medium">By: {{ $article->writer->writer_name }}</p>
                    <p class="card-text" style="font-size: large; text-align: justify;">{{ Str::limit($article->content, 200) }}...</p>                
                </div>
            <a href="/article/{{$article->id}}" class="btn btn-primary align-self-end">Read More</a>
            </div>
        </div>
    @endforeach
    </div>

    <br><br>
    <!-- Footer -->
    <footer class="bg-dark text-light text-center py-3">
        &copy; EduFun 2024 | Web Programming | Marendra Rambang Nugroho | 2602193805
    </footer>

    <!-- Bootstrap JS and dependencies -->
    <script src="{{ asset('bootstrap-5.3.3-dist/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>
