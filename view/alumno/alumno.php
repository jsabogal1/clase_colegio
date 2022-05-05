<section class="col-lg-5">
    <h3>Añadir profesor</h3>
    <form id="frm-alumno" action="?c=Alumno&a=Guardar" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?php echo $alm->id; ?>" />
        <div class="form-group">
            <label>Nombre</label>
            <input type="text" name="Nombre" value="<?php echo $alm->Nombre; ?>" class="form-control" placeholder="Ingrese su nombre" data-validacion-tipo="requerido|min:3" />
        </div>
        <div class="form-group">
            <label>Apellido</label>
            <input type="text" name="Apellido" value="<?php echo $alm->Apellido; ?>" class="form-control" placeholder="Ingrese su apellido" data-validacion-tipo="requerido|min:10" />
        </div>
        <div class="form-group">
            <label>Correo</label>
            <input type="email" name="Correo" value="<?php echo $alm->Correo; ?>" class="form-control" placeholder="Ingrese su correo electrónico" data-validacion-tipo="requerido|email" />
        </div>
        <div class="form-group">
            <label>Sexo</label>
            <select name="Sexo" class="form-control">
                <option <?php echo $alm->Sexo == 1 ? 'selected' : ''; ?> value="1">Masculino</option>
                <option <?php echo $alm->Sexo == 2 ? 'selected' : ''; ?> value="2">Femenino</option>
            </select>
        </div>
        <div class="form-group">
            <label>Fecha de nacimiento</label>
            <input readonly type="text" name="FechaNacimiento" value="<?php echo $alm->FechaNacimiento; ?>" class="form-control datepicker" placeholder="Ingrese su fecha de nacimiento" data-validacion-tipo="requerido" />
        </div>
        <hr />
        <div class="text-right">
            <button class="btn btn-success">Guardar</button>
        </div>
    </form>

</section>
<section class="col-lg-7"  style="height:500px;overflow-y:scroll;">
    <h3>Profesores</h3>
    <table class="table table-striped">
        <thead>
        <tr>
            <th style="width:180px;">Nombre</th>
            <th>Apellido</th>
            <th>Correo</th>
            <th style="width:120px;">Sexo</th>
            <th style="width:120px;">Nacimiento</th>
            <th style="width:60px;"></th>
            <th style="width:60px;"></th>
        </tr>
        </thead>
        <tbody>
        <?php foreach($this->model->Listar() as $r): ?>
            <tr>
                <td><?php echo $r->Nombre; ?></td>
                <td><?php echo $r->Apellido; ?></td>
                <td><?php echo $r->Correo; ?></td>
                <td><?php echo $r->Sexo == 1 ? 'Hombre' : 'Mujer'; ?></td>
                <td><?php echo $r->FechaNacimiento; ?></td>
                <td>
                    <a href="?c=Alumno&a=Crud&id=<?php echo $r->id; ?>">Editar</a>
                </td>
                <td>
                    <a onclick="javascript:return confirm('¿Seguro de eliminar este registro?');" href="?c=Alumno&a=Eliminar&id=<?php echo $r->id; ?>">Eliminar</a>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</section>

<script>
    $(document).ready(function(){
        $("#frm-alumno").submit(function(){
            return $(this).validate();
        });
    })
</script>


