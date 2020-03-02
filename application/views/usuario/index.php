<!-- crud de usuario -->
<div class="jumbotron bg-dark text-white jumbotron-fluid hero-nuvola">
    <div class="container">
        <div class="row">
            <div class="col pt-5">
                <h1 class="display-4 font-weight-bold">Hola, Amigos</h1>
                <p class="lead">
                    Gestione eficientemente Actividades e incidentes del hotel desde una sola Plataforma.</p>
                <hr class="my-4">
                <p>Nuvola es una compañía de software hotelero, con el más completo sistema de gestión de huéspedes.</p>
                <a class="btn btn-success btn-lg" href="#" role="button">Saber más</a>
            </div>
            <div class="col">
                <img src="<?php echo base_url('public/img/hero-nuv.svg') ?>" alt="hero">
            </div>
            </div>
        </div>
    </div>
</div>

<div class="mt-5 mb-5">
    <div class="container">
        <div class="row">
            <div class="col">
                <h2 class="font-weight-bold pb-4">Clientes Registrados</h2>
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Perfil</th>
                                <th scope="col">Nombres</th>
                                <th scope="col">Apellidos</th>
                                <th scope="col">Correo</th>
                                <th scope="col">Opciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($listaUsuario as $value) { ?>
                                <tr>
                                    <th scope="row"><?php echo $value->usu_id; ?></th>
                                    <td><?php echo $value->per_nombre; ?></td>
                                    <td><?php echo $value->usu_nombres; ?></td>
                                    <td><?php echo $value->usu_apellidos; ?></td>
                                    <td><?php echo $value->usu_correo; ?></td>
                                    <td class="text-center">
                                        <a href="<?php echo base_url('usuario/delete/') . $value->usu_id ?>" title="Eliminar" class=" text-resettext-decoration-none"><i class="far fa-trash-alt"></i></a>
                                        <a class="font-weight-bold text-decoration-none "> · </a>
                                        <a href="<?php echo base_url('usuario/edit/') . $value->usu_id ?>" title="Editar" class="text-reset text-decoration-none"><i class="fas fa-edit"></i></a>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col">
                <form method="POST" action="<?php echo base_url('usuario/insert') ?> ">
                    <h2 class="font-weight-bold">Novula</h2>
                    <div class="form-group pt-4">
                        <label>Perfil</label>
                        <select name="Idper" class="form-control">
                            <?php foreach ($selPerfil as $value) { ?>
                                <option value="<?php echo $value->per_id ?>"> <?php echo $value->per_nombre ?> </option>
                            <?php } ?>
                        </select>
                        <!-- <input type="text" class="form-control"> -->
                        <small id="emailHelp" class="form-text text-muted">Seleccione su perfil</small>
                    </div>
                    <div class="form-group">
                        <label>Nombres</label>
                        <input name="nombres" type="text" class="form-control">
                        <small id="emailHelp" class="form-text text-muted">Ingres primer y segundo nombre</small>
                    </div>
                    <div class="form-group">
                        <label>Apellidos</label>
                        <input name="apellidos" type="text" class="form-control">
                        <small id="emailHelp" class="form-text text-muted">Ingres primer y segundo apellidos</small>
                    </div>
                    <div class="form-group">
                        <label>Correo Electronico</label>
                        <input name="correo" type="email" class="form-control">
                        <small id="emailHelp" class="form-text text-muted">Ingres su correo electronico</small>
                    </div>
                    <button type="submit" class="btn btn-dark">Registrar</button>
                </form>
            </div>
        </div>
    </div>
</div>