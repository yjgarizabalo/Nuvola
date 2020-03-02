<div class="container">
<form method="POST" action="<?php echo base_url('usuario/update') ?> ">
    <?php foreach($datosUsuario as $value) {?>
    <h2 class="font-weight-bold pb-4">Novula</h2>

    <input type="hidden" name="Usuid" value="<?php echo $value->usu_id;?>">
    <div class="form-group">
        <label>Perfil</label>
        <?php 
        $lista = array();
        foreach ($selPerfil as $registro) {
            $lista[$registro->per_id] = $registro->per_nombre;
        } 
        echo form_dropdown('Idper',$lista,$value->per_id, 'class="form-control"');
        ?>
        <small id="emailHelp" class="form-text text-muted">Seleccione su perfil</small>
    </div>
    <div class="form-group">
        <label>Nombres</label>
        <input name="nombres" type="text" class="form-control" value="<?php echo $value->usu_nombres; ?>">
        <small id="emailHelp" class="form-text text-muted">Ingres primer y segundo nombre</small>
    </div>
    <div class="form-group">
        <label>Apellidos</label>
        <input name="apellidos" type="text" class="form-control" value="<?php echo $value->usu_apellidos; ?>">
        <small id="emailHelp" class="form-text text-muted">Ingres primer y segundo apellidos</small>
    </div>
    <div class="form-group">
        <label>Correo Electronico</label>
        <input name="correo" type="email" class="form-control" value="<?php echo $value->usu_correo; ?>">
        <small id="emailHelp" class="form-text text-muted">Ingres su correo electronico</small>
    </div>
    <?php }?>
    <button type="submit" class="btn btn-dark">Actulizar usuario</button>
</form>
</div>
