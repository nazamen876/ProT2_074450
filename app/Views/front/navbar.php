<?php
    $session = session();
    $nombre = $session->get('nombre');
    $perfil = $session->get('perfil_id');
?>

<nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
        <a class="navbar-brand" href='principal'><img class="img1" src="assets/img/logo.webp" width="134" height="100"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href='quienes_somos'>Quienes Somos</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href='acerca_de'>Acerca de Nosotros</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Catálogo
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Guitarras</a></li>
                        <li><a class="dropdown-item" href="#">Teclados</a></li>
                        <li><a class="dropdown-item" href="#">Percusión</a></li>
                        <li><a class="dropdown-item" href="#">Repuestos</a></li>
                    </ul>
                </li>

                <li>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"/>
                    </form>
                </li>  
            </ul>  
            <!-- Vista para administradores -->
            <div>
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <?php if (session()->perfil_id == 1): ?>
                            <div class="btn btn-secondary active btnUser btn-sm">
                                <a href="">ADMIN: <?php echo session('nombre'); ?> </a>
                            </div>
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href='logout'>Cerrar Sesión</a>
                            </li> 

                        <!-- Vista para Clientes -->
                        <?php elseif (session()->perfil_id == 2): ?>
                            <div class="btn btn-secondary active btnUser btn-sm">
                                <a href="">USUARIO: <?php echo session('nombre'); ?> </a>
                            </div>
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href='logout'>Cerrar Sesión</a>
                            </li> 
                        <?php else: ?>
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href='login'>Iniciar Sesión</a>
                            </li> 
                        <?php endif; ?>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
