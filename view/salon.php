<section class="col-lg-3">
    <h3>Añadir Salon</h3>
    <form id="frm-alumno" action="?c=Salon&a=Guardar" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?php echo $alm->id; ?>" />
        <div class="form-group">
            <label>Nombre</label>
            <input type="text" name="Nombre" value="<?php echo $alm->Nombre; ?>" class="form-control" placeholder="Ingrese el Nombre " data-validacion-tipo="requerido" />
        </div>
        <div class="form-group">
            <label>Numero</label>
            <input type="text" name="Numero" value="<?php echo $alm->Numero; ?>" class="form-control" placeholder="Ingrese el Número" data-validacion-tipo="requerido" />
        </div>

        <hr />
        <div class="text-right">
            <button class="btn btn-success">Guardar</button>
        </div>
    </form>

</section>
<section class="col-lg-9"  style="height:500px;overflow-y:scroll;">
    <h3>Salones</h3>
    <table class="table table-striped">
        <thead>
        <tr>
            <th style="width:180px;">Nombres</th>
            <th>Numero</th>
            <th colspan="2" style="width:120px;">Acciones</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach($this->model->Listar() as $r): ?>
            <tr>
                <td><?php echo $r->Nombre; ?></td>
                <td><?php echo $r->Numero; ?></td>
                <td>
                    <a href="?c=Salon&a=Crud&id=<?php echo $r->id; ?>">Editar</a>
                </td>
                <td>
                    <a onclick="javascript:return confirm('¿Seguro de eliminar este registro?');" href="?c=Salon&a=Eliminar&id=<?php echo $r->id; ?>">Eliminar</a>
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


