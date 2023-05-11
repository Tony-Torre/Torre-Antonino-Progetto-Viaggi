<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Blog Post - Start Bootstrap Template</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="\startbootstrap-blog-post-gh-pages\css\styles.css" rel="stylesheet" />
    </head>
    <body>
        <!-- Responsive navbar-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark d-flex justify-content-center">
                <a class="navbar-brand" href="#!">Aeroporto di Bugliano</a>
        </nav>
        <div class="container">
            <div class="row">
                <div class="col-6">
            <h3>Partenze</h3>
            <ul class="list-group">
                @foreach ($voli['departure'] as $singoloVolo)
                    <li class="list-group-item"><div class="container">
                        <div class="row">
                            <div class="col-3">
                                {{$singoloVolo['company']}} 
                            </div>
                            <div class ="col-3">
                                {{$singoloVolo['city']}} 
                            </div>
                            <div class ="col-3">
                                {{$singoloVolo['time']}} 
                            </div>
                            <div class ="col-3">
                                {{$singoloVolo['gate']}} 
                            </div>
                        </div>
                    </div>
                    </li> 
    
                @endforeach
            </ul>
            </div>
            <div class="col-6">
            <h3>Arrivi</h3>
            <ul class="list-group">
                @foreach ($voli['arrival'] as $singoloVolo)
                <a href="/detail/{{$singoloVolo['id']}}">
                    <li class="list-group-item"><div class="container">
                        <div class="row">
                            <div class="col-3">
                                {{$singoloVolo['company']}} 
                            </div>
                            <div class ="col-3">
                                {{$singoloVolo['city']}} 
                            </div>
                            <div class ="col-3">
                                {{$singoloVolo['time']}} 
                            </div>
                            <div class ="col-3">
                                {{$singoloVolo['gate']}} 
                            </div>
                        </div>
                    </div>
                    </li> 
                </a>
                @endforeach
            </ul>
            </div>
            </div>
        </div>
        <!-- Footer-->
<footer class="py-5 bg-dark">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Your Website 2023</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>
