<?php
require_once 'model/asignar.php';

class AsignarController{
    
    private $model;
    
    public function __CONSTRUCT(){
        $this->model = new Asignar();
    }
    
    public function Index(){
        require_once 'view/nav.php';
        require_once 'view/header.php';
        require_once 'view/asignar/asignar.php';
        require_once 'view/footer.php';
    }
    
    public function Crud(){
        $alm = new Asignar();
        
        if(isset($_REQUEST['id'])){
            $alm = $this->model->Obtener($_REQUEST['id']);
        }
        require_once 'view/nav.php';
        require_once 'view/header.php';
        require_once 'view/asignar/asignar-editar.php';
        require_once 'view/footer.php';
    }
    
    public function Guardar(){
        $alm = new Asignar();
        
        $alm->id = $_REQUEST['id'];
        $alm->idProfesor = $_REQUEST['idProfesor'];
        $alm->idSalon = $_REQUEST['idSalon'];

        $alm->id > 0 
            ? $this->model->Actualizar($alm)
            : $this->model->Registrar($alm);
        
        header('Location: index.php');
    }
    
    public function Eliminar(){
        $this->model->Eliminar($_REQUEST['id']);
        header('Location: index.php');
    }
}