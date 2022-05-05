<h1 class="page-header">Salones</h1>

<div class="well well-sm text-right">
    <a class="btn btn-primary" href="?c=Salon&a=Crud">Nuevo Salon</a>
</div>

<table class="table table-striped">
    <thead>
    <tr>
        <th>Item</th>
        <th style="width:180px;">Profesor</th>
        <th>Salon</th>
        <th style="width:60px;"></th>
        <th style="width:60px;"></th>
    </tr>
    </thead>
    <tbody>
    <?php $i=0; foreach($this->model->Listar() as $r): ?>
        <tr><td><?php echo ++$i?></td>
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


