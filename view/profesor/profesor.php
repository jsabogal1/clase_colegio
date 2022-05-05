<h1 class="page-header">Profesores</h1>

<div class="well well-sm text-right">
    <a class="btn btn-primary" href="?c=Profesor&a=Crud">Nuevo Profesor</a>
</div>

<table class="table table-striped">
    <thead>
    <tr>
        <th style="width:180px;">Nombre</th>
        <th>Apellido</th>
        <th>Apellido</th>
        <th style="width:120px;">Correo</th>
        <th style="width:120px;">Telefono</th>
        <th style="width:60px;"></th>
        <th style="width:60px;"></th>
    </tr>
    </thead>
    <tbody>
    <?php foreach($this->model->Listar() as $r): ?>
        <tr>
            <td><?php echo $r->PNombre; ?></td>
            <td><?php echo $r->PApellido; ?></td>
            <td><?php echo $r->SApellido; ?></td>
            <td><?php echo $r->Correo; ?></td>
            <td><?php echo $r->Telefono; ?></td>
            <td>
                <a href="?c=Profesor&a=Crud&id=<?php echo $r->id; ?>">Editar</a>
            </td>
            <td>
                <a onclick="javascript:return confirm('¿Seguro de eliminar este registro?');" href="?c=Profesor&a=Eliminar&id=<?php echo $r->id; ?>">Eliminar</a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>


