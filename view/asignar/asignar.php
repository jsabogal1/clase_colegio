<h1 class="page-header">Asignaciones</h1>

<div class="well well-sm text-right">
    <a class="btn btn-primary" href="?c=Asignar&a=Crud">Nueva Asignacion</a>
</div>

<table class="table table-striped">
    <thead>
    <tr>
        <th>Item</th>
        <th style="width:180px;">Nombre Profesor</th>
        <th style="width:180px;">Apellido Profesor</th>
        <th>Apellido Profesor</th>
        <th>Nombre Salon</th>
        <th>Numero Salon</th>
        <th style="width:60px;"></th>

    </tr>
    </thead>
    <tbody>
    <?php $i=0; foreach($this->model->Asignaciones() as $r): ?>
        <tr><td><?php echo ++$i?></td>
            <td><?php echo $r->PNombre; ?></td>
            <td><?php echo $r->PApellido; ?></td>
            <td><?php echo $r->SApellido; ?></td>
            <td><?php echo $r->Nombre; ?></td>
            <td><?php echo $r->numero; ?></td>

            <td>
                <a onclick="javascript:return confirm('¿Seguro de eliminar este registro?');" href="?c=Asignar&a=Eliminar&id=<?php echo $r->id; ?>">Eliminar</a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>


