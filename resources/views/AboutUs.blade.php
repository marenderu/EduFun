<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('bootstrap-5.3.3-dist/css/bootstrap.min.css') }}">
    <style>
        
    </style>
</head>
<body class="d-flex flex-column min-vh-100">
    
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

        <!-- About Section -->
        <div class="container content py-5">
            <h1 class="text-center mb-4 fw-bold">About EduFun</h1>
            <p class="text-center fs-5">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus blandit sem eget erat lobortis blandit. Aliquam aliquam mollis nunc a tempus. Praesent mollis sed est fermentum imperdiet. Nullam tortor tellus, dignissim blandit pharetra id, sodales et odio. Ut vitae nibh placerat, facilisis lectus eget, sagittis dui. Fusce non nisl diam. Nam eleifend nibh sed lectus tristique, sit amet ullamcorper felis iaculis. Proin at dolor vitae sapien convallis ultricies. Proin blandit enim ac elit bibendum, ac laoreet ipsum sollicitudin.
            </p>
            <p class="text-center fs-5">
            Maecenas eget felis ut ipsum iaculis commodo sed et augue. Fusce eu arcu a nisi pulvinar accumsan condimentum a ligula. Etiam id felis pellentesque, luctus magna nec, imperdiet elit. Duis quis arcu pulvinar, volutpat urna quis, venenatis ligula. Maecenas fermentum vel leo ac maximus. Curabitur tempus lectus non ex egestas, in rhoncus urna fermentum. Integer rhoncus vestibulum dolor, eget fermentum risus ornare eget. Pellentesque eros ligula, vestibulum eget aliquet vel, egestas sit amet odio. Nunc semper rutrum risus, quis viverra metus sollicitudin eget. Integer imperdiet consequat leo, vitae ullamcorper lectus tincidunt non. Duis eu leo et ligula porttitor imperdiet quis at dolor. Duis vulputate justo a eros pretium, quis tempus tellus mollis. Mauris dolor nisi, pretium a vehicula vitae, accumsan ac massa. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nunc in luctus mi. Nunc nec sapien arcu.
            </p>
        </div>

        <!-- Footer -->
        <footer class="bg-dark text-light text-center py-3 mt-auto fixed-bottom">
            &copy; EduFun 2024 | Web Programming | Marendra Rambang Nugroho | 2602193805
        </footer>

    <!-- Bootstrap JS and dependencies -->
    <script src="{{ asset('bootstrap-5.3.3-dist/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>
