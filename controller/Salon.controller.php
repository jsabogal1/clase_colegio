<?php
require_once 'model/salon.php';

class SalonController{
    
    private $model;
    
    public function __CONSTRUCT(){
        $this->model = new Salon();
    }
    
    public function Index(){
        require_once 'view/nav.php';
        require_once 'view/header.php';
        require_once 'view/salon/salon.php';
        require_once 'view/footer.php';
    }
    
    public function Crud(){
        $alm = new Salon();
        
        if(isset($_REQUEST['id'])){
            $alm = $this->model->Obtener($_REQUEST['id']);
        }
        require_once 'view/nav.php';
        require_once 'view/header.php';
        require_once 'view/salon/salon-editar.php';
        require_once 'view/footer.php';
    }
    
    public function Guardar(){
        $alm = new Salon();
        
        $alm->id = $_REQUEST['id'];
        $alm->Nombre = $_REQUEST['Nombre'];
        $alm->Numero = $_REQUEST['Numero'];

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