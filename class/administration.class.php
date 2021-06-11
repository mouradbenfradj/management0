<?php
class Administration
{
	private $base;
	private $login;
	private $pass;
	private $poste;
	private $req;
	private $ident;
	private $ajout;
	private $recherche;
	private $mod;
	
	public function getLogin()    
	{        
		return $this->login;
	}            
	public function setLogin($login)    
	{                  
		$this->login = $login;            
	}
	public function getPass()    
	{        
		return $this->pass;    
	}            
	public function setPass($pass)    
	{                  
		$this->pass = $pass;            
	}
	public function getPoste()    
	{        
		return $this->poste;    
	}            
	public function setPoste($poste)    
	{                  
		$this->poste = $poste;            
	} 	
	
	public function __construct($base)   
	{
		$this->base =$base;
		$this->req = $this->base->prepare('SELECT * FROM administration'); 
		$this->ident = $this->base->prepare('SELECT * FROM administration WHERE login = :login AND pass = :pass'); 
		$this->recherche = $this->base->prepare('SELECT * FROM administration WHERE login = :login');
  		$this->ajout = $this->base->prepare('INSERT INTO administration VALUES(:login, :pass, :poste)'); 
		$this->mod = $this->base->prepare('UPDATE administration SET login = :login, pass = :pass, poste = :poste  WHERE login = :logino');  

	}
	
	public function identification()
	{
		$this->ident->execute(array(    
			'login' => $this->login,    
			'pass' => $this->pass)); 
		$resultat = $this->ident->fetch(); 
		if (!$resultat) 
		{    
			echo 'Mauvais identifiant ou mot de passe !'; 
		} 
		else 
		{    
			session_start();    
			$_SESSION['login'] = $this->login; 
			$_SESSION['pass'] = $this->pass; 
			$_SESSION['poste'] = $resultat['poste'];    
			header('Location: home.php');
  
		}
	}
	
	public function findUser()
	{
		$this->recherche->execute(array(    
			'login' => $this->login));    
		$utilisateur = $this->recherche->fetchAll();            
		$this->login=$utilisateur[0]['login'];
		$this->pass=$utilisateur[0]['pass'];
		$this->poste=$utilisateur[0]['poste']; 
	}
	
	
	public function modUser() 
	{    extract($_GET);
		$this->mod->execute(array( 'login' => $login, 'pass' => $pass, 'poste' => $poste, 'logino' => $logino ));
	}
	
	public function get_user() 
	{    
		$this->req->execute();    
		$utilisateur = $this->req->fetchAll();            
		return $utilisateur; 
	}
	
	public function addUser()
	{
		$this->ajout->execute(array(    
			'login' => $this->login,    
			'pass'  => $this->pass,    
			'poste' => $this->poste));
		echo "succer";
	}
	
	public function supUser($id)
	{
		$this->base->query("DELETE FROM administration WHERE login='$id'");

	}
	
}