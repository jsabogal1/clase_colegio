<?php
class Asignar
{
	private $pdo;
    
    public $id;
    public $idProfesor;
    public $idSalon;

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

	public function ListarSalon()
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("SELECT * FROM salon");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
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

			$stm = $this->pdo->prepare("SELECT * FROM asignar");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}
	public function ListarProfesor()
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

	public function Asignaciones()
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("select asignar.id,salon.Nombre,salon.numero,profesor.PNombre,profesor.PApellido,profesor.SApellido from asignar, salon,profesor where profesor.id = asignar.idProfesor and salon.id = asignar.idSalon");
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
			          ->prepare("SELECT * FROM asignar WHERE id = ?");
			          

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
			            ->prepare("DELETE FROM asignar WHERE id = ?");

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
			$sql = "UPDATE asignar SET
						idProfesor        = ?,
						idSalon        = ?
                    WHERE id = ?";

			$this->pdo->prepare($sql)
			     ->execute(
				    array(
                        $data->idProfesor,
                        $data->idSalon,
                        $data->id
					)
				);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Registrar(asignar $data)
	{
		try 
		{
		$sql = "INSERT INTO Asignar (idProfesor,idSalon)
		        VALUES (?, ?)";

		$this->pdo->prepare($sql)
		     ->execute(
				array(
                    $data->idProfesor,
                    $data->idSalon
                )
			);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}
}