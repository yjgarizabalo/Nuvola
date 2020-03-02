<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuvola | Bienvenidos</title>

    <!-- css -->
    <link rel="stylesheet" href="<?php echo base_url('public/css/bootstrap.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('public/css/app.css')?>">
    <!-- tipografia -->
    <link href="https://fonts.googleapis.com/css?family=Spartan:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <!-- icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" integrity="sha256-mmgLkCYLUQbXn0B1SRqzHar6dCnv9oZFPEC1g1cwlkk=" crossorigin="anonymous" />
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand font-weight-bolder" href="#">Nuvola</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav ml-lg-auto">
                        <a class="nav-item nav-link active" href="#">Inicio <span class="sr-only">(current)</span></a>
                        <a class="nav-item nav-link" href="#">Informacion</a>
                        <a class="nav-item nav-link" href="#">Datos</a>
                        <a class="nav-item nav-link" href="#">Contacto</a>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <div id="container">
        <!-- contenido vistas -->
        <?php
        $this->load->view($contenido);
        ?>
    </div>

    <footer class="footer-nuv bg-dark text-white">
        <div class="container pt-lg-5 mt-lg-5 pb-lg-5">
            <div class="row">
                <div class="col-lg-6 h-100 text-center text-lg-left my-auto">
                    <ul class="list-inline mb-2">
                        <li class="list-inline-item">
                            <a class="text-decoration-none text-reset" href="#">¿Qué es Nuvola?</a>
                        </li>
                        <li class="list-inline-item">&sdot;</li>
                        <li class="list-inline-item">
                            <a class="text-decoration-none text-reset" href="#">Contacto</a>
                        </li>
                        <li class="list-inline-item">&sdot;</li>
                        <li class="list-inline-item">
                            <a class="text-decoration-none text-reset" href="#">Terminos de uso</a>
                        </li>
                        <li class="list-inline-item">&sdot;</li>
                    </ul>
                    <p class="text-muted small mb-4 mb-lg-0">&copy; Derechos reservados 2020</p>
                </div>
                <div class="col-lg-6 h-100 text-center text-lg-right my-auto">
                    <h4 class="font-weight-bold">Nuvola</h4>
                </div>
            </div>
        </div>
    </footer>

    <!-- javascript -->
    <script src="<?php echo base_url('public/js/jquery.js')?>"></script>
    <script src="<?php echo base_url('public/js/popper.js')?>"></script>
    <script src="<?php echo base_url('public/js/bootstrap.js') ?>"></script>
</body>

</html>