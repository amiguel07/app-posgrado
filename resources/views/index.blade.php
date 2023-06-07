<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <title>Posgrado</title>
        <link href="{{asset('template/css/styles.css')}}" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark" >
            <div class="container" >
                <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                    <li class="nav-item dropdown ">
                        <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#!">Salir</a></li>
                        </ul>
                    </li>
                </ul>
        </nav>
    </div>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <img  class="img-fluid" src="{{asset('assets/img/logo-unt.png')}}"  id="logo-unt-2" alt="logo-UNT">
                            <div class="sb-sidenav-menu-heading">Dashboard</div>
                            <a class="nav-link" href="index.html">
                                <div class="sb-nav-link-icon"><i class="bi bi-three-dots-vertical"></i></i></div>
                                Lista de contactos
                            </a>
                       </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        {{-- <div class="small">Logged in as:</div>
                        Start Bootstrap --}}
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Contactos</h1>
                    </div>
                </main>
                <div class="container">
                    <div class="border">
                        <div>
                            <form class="">
                                <div class="input-group">
                                    <input class="form-control form-control-lg" type="text" placeholder="Buscar contacto"  aria-describedby="btnNavbarSearch" />
                                    <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
                                </div>
                            </form>
                        </div>
                    </tr>
                        <table class="table border">
                            <thead>
                                <th scope="col">Apellidos</th>
                                <th scope="col">Nombres</th>
                                <th scope="col">N° teléfono</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>Miguel Benites</td>
                                <td>Anderson Jesús</td>
                                <td>985635412  <button type="button" class="btn btn-primary"><i class="bi bi-clipboard"></i></button></td>
                              </tr>
                            </tbody>
                          </table>
                    </div>
                </div>
                <footer class="py-4 bg-light mt-auto">
                    {{-- <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2023</div>
                        </div>
                    </div> --}}
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    </body>
</html>
