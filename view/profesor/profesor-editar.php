
<h1 class="page-header">
    <?php echo $alm->id != null ? $alm->PNombre : 'Nuevo Registro'; ?>
</h1>

<ol class="breadcrumb">
  <li><a href="?c=Profesor">Profesor</a></li>
  <li class="active"><?php echo $alm->id != null ? $alm->PNombre : 'Nuevo Registro'; ?></li>
</ol>

<form id="frm-alumno" action="?c=Profesor&a=Guardar" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?php echo $alm->id; ?>" />
    
    <div class="form-group">
        <label>Nombre</label>
        <input type="text" name="PNombre" value="<?php echo $alm->PNombre; ?>" class="form-control" placeholder="Ingrese su nombre" data-validacion-tipo="requerido|min:3" />
    </div>
    
    <div class="form-group">
        <label>Apellido</label>
        <input type="text" name="PApellido" value="<?php echo $alm->PApellido; ?>" class="form-control" placeholder="Ingrese su apellido" data-validacion-tipo="requerido" />
    </div>

    <div class="form-group">
        <label>Apellido</label>
        <input type="text" name="SApellido" value="<?php echo $alm->SApellido; ?>" class="form-control" placeholder="Ingrese su apellido" />
    </div>
    
    <div class="form-group">
        <label>Correo</label>
        <input type="text" name="Correo" value="<?php echo $alm->Correo; ?>" class="form-control" placeholder="Ingrese su correo electrónico" data-validacion-tipo="requerido|email" />
    </div>

    <div class="form-group">
        <label>Telefono</label>
        <input type="text" name="Telefono" value="<?php echo $alm->Telefono; ?>" class="form-control" placeholder="Ingrese su Telefono" data-validacion-tipo="requerido|min:7" />
    </div>
    
    <hr />
    
    <div class="text-right">
        <button class="btn btn-success">Guardar</button>
    </div>
</form>

<script>
    $(document).ready(function(){
        $("#frm-alumno").submit(function(){
            return $(this).validate();
        });
    })
</script>