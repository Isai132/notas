<?php
include 'db.php';


class User extends DB
{
	private $nombre;
	private $username;


	public function userExists($user, $pass)
	{
		//$md5pass = md5($pass);
		$query = $this->connect()->prepare('SELECT * FROM usuarios WHERE usuario = :user AND contraseña = :pass');
		$query->execute(['user' => $user, 'pass' => $pass]);

		if ($query->rowCount()) {
			return true;
		} else {
			return false;
		}
	}

	public function setUser($user)
	{
		$query = $this->connect()->prepare('SELECT * FROM usuarios WHERE usuario = :user');
		$query->execute(['user' => $user]);

		foreach ($query as $currentUser) {
			$this->nombre = $currentUser['nombre'];
			$this->username = $currentUser['usuario'];
			$this->id = $currentUser['ID'];
		}
	}

	public function getNombre()
	{
		return $this->nombre;
	}
	public function getId()
	{
		return $this->id;
	}
}

?>