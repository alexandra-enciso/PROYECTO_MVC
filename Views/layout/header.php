<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistema de Bibliotecas</title>
    <link rel="stylesheet" href="./Assets/css/estilos.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>

 <nav class="navbar navbar-dark bg-dark">
        <!-- Navbar content -->
    </nav>
    
    <nav class="navbar navbar-dark bg-primary">
        <!-- Navbar content -->
    </nav>
    
    <nav class="navbar" style="background-color: #e3f2fd;">
        <!-- Navbar content -->
    </nav>
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="http://localhost/"><H4>Biblioteca</H4></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="http://localhost/"><h5>Inicio</h5></a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button"data-bs-toggle="dropdown"
                            aria-expanded="false"> <H5>Usuarios</H5> 
                        </a>
                        <ul class="dropdown-menu">
                           
                            <li><a class="dropdown-item" href="#"><a href="http://localhost/Views/Pages/indexUsuario.php">Usuarios</a></a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#"><a href="http://localhost/Views/Pages/AgregarUsuario.php">Agregar Usuario</a>  </a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <Libros><H5>Libros</H5></Libros>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#"><a href="http://localhost/Views/Pages/IndexLibro.php">Libros</a> </a></li>
                            <li><a class="dropdown-item" href="#"><a href="http://localhost/Views/Pages/AgregarLibros.php">Agregar Libros</a>  </a></li>
                            <li><a class="dropdown-item" href="#"><a href="http://localhost/Views/Pages/PrestarLibros.php ">Prestar Libros</a>  </a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" 
                            aria-expanded="false">
                            <Autor><H5>Autor</H5></Autor>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#"><a href="http://localhost/Views/Pages/indexAutor.php">Autores</a></a></li>
                            </li>
                            <li><a class="dropdown-item" href="#"><a href="http://localhost/Views/Pages/indexEditorial.php">Editoriales</a></a></li>
                            </li>
                            <li><a class="dropdown-item" href="#"><a href="http://localhost/Views/Pages/AgregarAutor.php"> Agregar Autor</a></a></li>
                            </li>
                             <li><a class="dropdown-item" href="#"><a href="http://localhost/Views/Pages/AgregarEditorial.php"> Agregar Editorial</a></a></li>
                            </li>
                                <hr class="dropdown-divider">
                            </li>
                        </ul>
                    </li>
                    
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <Libros><H5>Ejemplares</H5></Libros>
                        </a>
                        <ul class="dropdown-menu">
                            
                        <li><a class="dropdown-item" href="#"><a href="http://localhost/Views/Pages/ConsultarLibros.php">Consultar Libros</a> </a></li>
                             <li>
                        <li><a class="dropdown-item" href="#"><a href="http://localhost/Views/Pages/PrestarLibros.php">Prestar Libros</a> </a></li>
                             <li>


                                <hr class="dropdown-divider">
                            </li>
                        </ul>
                    </li>
                    
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Buscar</button>
                </form>
            </div>
        </div>
    </nav>
    <div class="container">
        <!-- Content here -->
        <center>
            <h1 id="Titulo">Sistema de Biblioteca</h1>
        </center>
        <center><img src="https://www.iudigital.edu.co/Style%20Library/images/logo-escudo.png" class="images" alt="...">
    </div>
    </center>
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://www.iudigital.edu.co/Biblioteca/PublishingImages/Paginas/Bibliotecas-Digitales/botones-11.png"
                    class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://www.iudigital.edu.co/Biblioteca/PublishingImages/Paginas/Bibliotecas-Digitales/botones-17.png"
                    class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://www.iudigital.edu.co/Biblioteca/PublishingImages/Paginas/Bibliotecas-Digitales/botones-12.png"
                    class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    
    <!--Contenido -->



