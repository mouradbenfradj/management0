<?php
class Facture
{
	private $base;
	private $id;
	private $fournisseur;
	private $produitdem;
	private $datedem;
	private $dateliv;
	private $validliv;
	private $lieu;
	private $facturation;
	private $req;
	private $ident;
	private $ajout;
	private $recherche;
	private $mod;
	private $modl;
	
	public function getId()    
	{        
		return $this->id;
	}            
	public function setId($id)    
	{                  
		$this->id = $id;            
	}
	public function getFournisseur()    
	{        
		return $this->fournisseur;    
	}            
	public function setFournisseur($fournisseur)    
	{                  
		$this->fournisseur = $fournisseur;            
	}
	public function getProduitdem()    
	{        
		return $this->produitdem;    
	}            
	public function setProduitdem($produitdem)    
	{                  
		$this->produitdem = $produitdem;            
	} 	

	public function getDatedem()    
	{        
		return $this->datedem;    
	}            
	public function setDatedem($datedem)    
	{                  
		$this->datedem = $datedem;            
	} 	
	public function getDateliv()    
	{        
		return $this->dateliv;    
	}            
	public function setDateliv($dateliv)    
	{                  
		$this->dateliv = $dateliv;            
	} 	
	public function getValidliv()    
	{        
		return $this->validliv;    
	}            
	public function setValidliv($validliv)    
	{                  
		$this->validliv = $validliv;            
	} 	
	public function getLieu()    
	{        
		return $this->lieu;    
	}            
	public function setLieu($produitdem)    
	{                  
		$this->lieu = $lieu;            
	} 	
	public function getFacturation()    
	{        
		return $this->facturation;    
	}            
	public function setFacturation($facturation)    
	{                  
		$this->facturation = $facturation;            
	} 	
	
	public function __construct($base)   
	{
		$this->base =$base;
		$this->req = $this->base->prepare('SELECT * FROM facture'); 
		$this->recherche = $this->base->prepare('SELECT * FROM facturation WHERE id = :id');
  		$this->ajout = $this->base->prepare('INSERT INTO facturation VALUES(:fournisseur, :produitdem, :datedem, :dateliv, :validliv, :lieu, :facturation)'); 
		$this->mod = $this->base->prepare('UPDATE facturation SET validliv = :validliv WHERE id = :id');  
		$this->modl = $this->base->prepare('UPDATE facturation SET lieu = :lieu WHERE id = :id');  

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