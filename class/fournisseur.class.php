<?php
class Fournisseur
{
	private $base;
	private $id;
	private $valeur;
	private $nom;
	private $adress;
	private $tel;
	private $req;
	private $ident;
	private $ajout;
	private $recherche;
	private $mod;
	
	public function getNom()    
	{        
		return $this->nom;
	}            
	public function setNom($nom)    
	{                  
		$this->nom = $nom;            
	}
	public function getAdress()    
	{        
		return $this->adress;    
	}            
	public function setAdress($adress)    
	{                  
		$this->adress = $adress;            
	}
	public function getTel()    
	{        
		return $this->tel;    
	}            
	public function setTel($tel)    
	{                  
		$this->tel = $tel;            
	} 
		public function getValeur()    
	{        
		return $this->valeur;    
	}            
	public function setValeur($tel)    
	{                  
		$this->valeur = $valeur;            
	} 	
	public function getId()    
	{        
		return $this->id;    
	}     
	public function setId($id)    
	{                  
		$this->id = $id;            
	}        
	
	public function __construct($base)   
	{
		$this->base =$base;
		$this->req = $this->base->prepare('SELECT * FROM fournisseur'); 
		$this->recherche = $this->base->prepare('SELECT * FROM fournisseur WHERE id = :id');
  		$this->ajout = $this->base->prepare('INSERT INTO fournisseur(nom,adress,tel) VALUES( :nom, :adress, :tel)'); 
		$this->mod = $this->base->prepare('UPDATE fournisseur SET nom = :nom, adress = :adress, tel = :tel WHERE id = :id');  

	}
	
	
	public function find()
	{
		$this->recherche->execute(array(    
			'id' => $this->id));    
		$utilisateur = $this->recherche->fetchAll();            
		$this->nom=$utilisateur[0]['nom'];
		$this->adress=$utilisateur[0]['adress'];
		$this->tel=$utilisateur[0]['tel']; 
	}
	
	
	public function mod() 
	{    extract($_GET);
		$this->mod->execute(array( 'nom' => $nom, 'adress' => $adress, 'tel' => $tel, 'id' => $id ));
	}
	
	public function get_fournisseur() 
	{    
		$this->req->execute();    
		$utilisateur = $this->req->fetchAll();            
		return $utilisateur; 
	}
	
	public function addFournisseur()
	{
		$this->ajout->execute(array(    
			'nom'  => $this->nom,    
			'adress'  => $this->adress,    
			'tel'  => $this->tel));
		echo "succer";
	}
	
	public function supFournisseur($id)
	{
		$this->base->query("DELETE FROM fournisseur WHERE id='$id'");

	}
	
}