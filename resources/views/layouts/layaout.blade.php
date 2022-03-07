<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog - @yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">
</head>
<body>
    <!-- Logo -->
    <nav class="navbar navbar-light bg-main">
        <div class="container p-4">
            <h3 class="m-auto"><i class="fas fa-cubes"></i> BLOG <i class="fas fa-cube"></i></h3>
        </div>
    </nav>
    <!--contenido-->
    @yield('content')
     <!-- Footer -->
     <footer class="container-fluid bg-main">
        <div class="row text-center p-4">
            <div class="mb-3">
                <p><i class="fas fa-cubes"></i> BLOG <i class="fas fa-cube"></i></p>
            </div>
            <div id="col-md-10">
                <a href="#">
                <i class="fab fa-facebook-square fa-2x"></i>
                </a>
                <a href="#">
                <i class="fab fa-instagram-square fa-2x"></i>
                </a>
                <a href="#">
                <i class="fab fa-youtube fa-2x"></i>
                </a>
                <p class="mt-3">Copyright © 2022, BLOG <br> Todos los derechos reservados</p>
                <a href="{{route('tologin')}}">
                <i class="fas fa-user-lock"></i>
                </a>
            </div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/301664ec81.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>
</html>
@if(session('menssage'))
<script>swal.fire('Espera...',"{{ session ('menssage') }}",'warning')</script>
@endif 