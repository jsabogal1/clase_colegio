<?php
class Profesor
{
	private $pdo;
    
    public $id;
    public $PNombre;
    public $PApellido;
    public $SApellido;
    public $Correo;
    public $Telefono;

	public function __CONSTRUCT()
	{
		try
		{
			$this->pdo = Database::Conectar();     
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Listar()
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("SELECT * FROM profesor");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Obtener($id)
	{
		try 
		{
			$stm = $this->pdo
			          ->prepare("SELECT * FROM profesor WHERE id = ?");
			          

			$stm->execute(array($id));
			return $stm->fetch(PDO::FETCH_OBJ);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Eliminar($id)
	{
		try 
		{
			$stm = $this->pdo
			            ->prepare("DELETE FROM profesor WHERE id = ?");

			$stm->execute(array($id));
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Actualizar($data)
	{
		try 
		{
			$sql = "UPDATE profesor SET
						PNombre          = ?,
						PApellido        = ?,
						SApellido        = ?,
                        Correo        = ?,
						Telefono            = ?
				    WHERE id = ?";

			$this->pdo->prepare($sql)
			     ->execute(
				    array(
                        $data->PNombre,
                        $data->PApellido,
                        $data->SApellido,
						$data->Correo,
                        $data->Telefono,
                        $data->id
					)
				);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Registrar(profesor $data)
	{
		try 
		{
		$sql = "INSERT INTO profesor (PNombre,PApellido,SApellido,Correo,Telefono)
		        VALUES (?, ?, ?, ?, ?)";

		$this->pdo->prepare($sql)
		     ->execute(
				array(
                    $data->PNombre,
                    $data->PApellido,
                    $data->SApellido,
                    $data->Correo,
                    $data->Telefono
                )
			);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}
}