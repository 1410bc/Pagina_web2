<?php

require_once 'Conexion.php';


class Usuario {
	//Atributos
	private $id;
	private $email;
	private $password;
	private $estatus;
	private $privilegios;
	const TABLA = 'usuarios';

	//Constructor
	public function __construct($email=null, $password=null, $estatus=null, $privilegios=null,$id=null) {
		$this->email = $email; //Se usa la variable de autoreferencia $this, para referirse al objeto actual
		$this->password = $password;//el operador flecha sirve para llamar a un atributo o metodo de la clase
		$this->estatus = $estatus;
		$this->privilegios = $privilegios;
		$this->id = $id;
	}

	//seccion de getters
	public function getId() {
		return $this->id;
	}

	public function getEmail() {
		return $this->email;
	}

	public function getPassword() {
		return $this->password;
	}
	public function getEstatus() {
		return $this->estatus;
	}
	public function getPrivilegios() {
		return $this->privilegios;
	}
	
	//Seccion de setters
	public function setEmail($email) {
		$this->email = $email;
	}
	public function setPassword($password) {
		$this->password = $password;
	}
	public function setEstatus($estatus) {
		$this->estatus = $estatus;
	}
	public function setPrivilegios($privilegios) {
		$this->privilegios = $privilegios;
	}

	//Metodo que sirve para guardar un registro nuevo o actualizar uno existente
	public function guardar() {
		$conexion = new Conexion();
		if ($this->id) /* Modifica un registro existente si se recibe un id*/ {
			$consulta = $conexion->prepare('UPDATE ' . self::TABLA .
			' SET email = :email, password = :password, estatus = :estatus,
			privilegios = :privilegios WHERE id = :id');
			$consulta->bindParam(':id', $this->id);
			$consulta->bindParam(':email', $this->email);
			$consulta->bindParam(':password', $this->password);
			$consulta->bindParam(':estatus', $this->estatus);
			$consulta->bindParam(':privilegios', $this->privilegios);

			$consulta->execute();
		} else /* Inserta un registro nuevo */ {
			$consulta = $conexion->prepare('INSERT INTO ' . self::TABLA .
			' (email, password, estatus, privilegios)
			VALUES(:email, :password, :estatus, :privilegios)');
			$consulta->bindParam(':email', $this->email);
			$consulta->bindParam(':password', $this->password);
			$consulta->bindParam(':estatus', $this->estatus);
			$consulta->bindParam(':privilegios', $this->privilegios);
			//var_dump($consulta);//Se musetra información de las variables
			//var_dump($this->email);
			//exit();//se detiene el script
			$consulta->execute();
			$this->id = $conexion->lastInsertId();
		}
		$conexion = null;
	}

	//Eliminar un registro de la tabla
	public function eliminar(){
        echo $this->id;
        $conexion = new Conexion();
        $consulta = $conexion->prepare('DELETE FROM ' . self::TABLA . ' WHERE id = :id');
        $consulta->bindParam(':id', $this->id);
        $consulta->execute();
        $conexion = null;
    }

    //Busca un registro de la tabla usando el id de ese registro
    public static function buscarPorId($id) {        
        $conexion = new Conexion();
        $consulta = $conexion->prepare('SELECT * FROM ' . self::TABLA . ' WHERE id = :id');
        $consulta->bindParam(':id', $id);
        $consulta->execute();
        $registro = $consulta->fetch();
        //print_r($registro);
        $conexion = null;
        if ($registro) {
            return new self($registro['email'], $registro['password'],
            $registro['estatus'], $registro['privilegios'], $id);
            
        } else {
            return false;
            
        }
    }

    //Listar todos los registros de la tabla
    public static function recuperarTodos() {
        $conexion = new Conexion();
        $consulta = $conexion->prepare('SELECT * FROM ' . self::TABLA);
        $consulta->execute();
        $registros = $consulta->fetchAll();
        $conexion = null;
        // var_dump($consulta);
        // echo "<br>";
        // var_dump($registros);
        // exit();
        return $registros;
    }



	/* Método que permite a un usuario iniciar sesión en el sitio */
	public function logIn(){
		$conexion = new Conexion();
		$consulta = $conexion->prepare('SELECT email, privilegios FROM ' . self::TABLA .
		' WHERE email = :email and password = :password');
		$consulta->bindParam(':email', $this->email);
		$consulta->bindParam(':password', $this->password);
		$consulta->execute();
		$registro = $consulta->fetch();

		/*var_dump($consulta);
		echo "<br>";
		var_dump($this->email);
		echo "<br>";
		var_dump($this->password);
		echo "<br>";
		var_dump($registro);
		exit();*/
		if ($registro) {
			$_SESSION['email'] = $registro[0];
			$_SESSION['privilegios'] = $registro[1];
			return true;
		} else {
			return false;	
		}
		$conexion = null;
	}//Fin login
}