
<h1 class="page-header">
    <?php echo $alm->id != null ? 'Editar' : 'Nuevo Registro'; ?>
</h1>

<ol class="breadcrumb">
  <li><a href="?c=Asignar">Asignar</a></li>
  <li class="active"><?php echo $alm->id != null ? 'Asignar' : 'Nuevo Registro'; ?></li>
</ol>

<form id="frm-alumno" action="?c=Asignar&a=Guardar" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?php echo $alm->id; ?>" />
    
    <div class="form-group">
        <label>Profesor</label>
        <br>
        <select name="idProfesor" id="idProfesor"/>
        <option value="">Profesor</option>
        <?php foreach($this->model->ListarProfesor() as $p): ?>
                   <option value="<?php echo $p->id;?>"><?php echo $p->PNombre. " ".$p->PApellido. " ".$p->SApellido ;?></option>
        <?php endforeach; ?>
        </select>

    </div>
    
    <div class="form-group">
        <label>Salon</label>
        <br>
        <select name="idSalon" id="idSalon"/>
        <option value="">Salon</option>
        <?php foreach($this->model->ListarSalon() as $r): ?>
            <option value="<?php echo $r->id;?>"><?php echo $r->Nombre." ".$r->Numero; ?></option>
        <?php endforeach; ?>
        </select>
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