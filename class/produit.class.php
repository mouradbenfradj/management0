<?php
class Produit
{
	private $base;
	private $id;
	private $nomp;
	private $fournisseur;
	private $categorie;
	private $marque;
	private $type;
	private $tva;
	private $pht;	
	private $pvt;
	private $req;
	private $ident;
	private $ajout;
	private $recherche;
	private $mod;


	public function getId()    
	{        
		return $this->id;    
	}     
	public function setId($id)    
	{                  
		$this->id = $id;            
	}        
	
	public function getNomp()    
	{        
		return $this->nomp;
	}            
	public function setNomp($nom)    
	{                  
		$this->nomp = $nom;            
	}
	public function getFournisseur()    
	{        
		return $this->fournisseur;    
	}            
	public function setFournisseur($fournisseur)    
	{                  
		$this->fournisseur = $fournisseur;            
	}
	public function getCategorie()    
	{        
		return $this->categorie;    
	}            
	public function setCategorie($categorie)    
	{                  
		$this->categorie = $categorie;            
	} 
	public function getMarque()    
	{        
		return $this->marque;    
	}            
	public function setMarque($marque)    
	{                  
		$this->marque = $marque;            
	} 	
		public function getType()    
	{        
		return $this->type;    
	}            
	public function setType($type)    
	{                  
		$this->type = $type;            
	} 	
	public function getTva()    
	{        
		return $this->tva;    
	}            
	public function setTva($tva)    
	{                  
		$this->tva = $tva;            
	} 	
	public function getPht()    
	{        
		return $this->pht;    
	}            
	public function setPht($pht)    
	{                  
		$this->pht = $pht;            
	} 	
	public function getPvt()    
	{        
		return $this->pvt;    
	}            
	public function setPvt($pvt)    
	{                  
		$this->pvt = $pvt;            
	} 	
	
	public function __construct($base)   
	{
		$this->base =$base;
		$this->req = $this->base->prepare('SELECT * FROM produit'); 
		$this->recherche = $this->base->prepare('SELECT * FROM produit WHERE id = :id');
  		$this->ajout = $this->base->prepare('INSERT INTO produit VALUES( :id, :nomp, :fournisseur, :categorie, :marque, :type, :tva, :pht, :pvt)'); 
		$this->mod = $this->base->prepare('UPDATE produit SET nomp = :nomp, fournisseur = :fournisseur, categorie = :categorie, marque = :marque, type = :type, tva = :tva, pht = :pht, pvt = :pvt WHERE id = :id');  
	}
	
	public function find()
	{
		$this->recherche->execute(array(    
			'id' => $this->id));    
		$utilisateur = $this->recherche->fetchAll();            
		$this->nomp=$utilisateur[0]['nomp'];
		$this->fournisseur=$utilisateur[0]['fournisseur'];
		$this->categorie=$utilisateur[0]['categorie']; 
		$this->marque=$utilisateur[0]['marque']; 
		$this->type=$utilisateur[0]['type']; 
		$this->tva=$utilisateur[0]['tva']; 
		$this->pht=$utilisateur[0]['pht']; 
		$this->pvt=$utilisateur[0]['pvt']; 
	}
	
	
	public function mod() 
	{    extract($_GET);
		$this->mod->execute(array( 'nomp' => $nomp, 'fournisseur' => $fournisseur, 'categorie' => $categorie, 'marque' => $marque, 'type' => $type, 'tva' => $tva, 'pht' => $pht, 'pvt' => $pvt, 'id' => $id ));
	}
	
	public function get_Produit() 
	{    
		$this->req->execute();    
		$utilisateur = $this->req->fetchAll();            
		return $utilisateur; 
	}
	
	public function addFournisseur()
	{
		$this->ajout->execute(array(
			'id' =>'',  
			'nomp'  => $this->nomp,    
			'fournisseur'  => $this->fournisseur,    
			'categorie'  => $this->categorie,    
			'marque'  => $this->marque,    
			'type'  => $this->type,    
			'tva'  => $this->tva,    
			'pht'  => $this->pht,    
			'pvt'  => $this->pvt));
		echo "succer";
	}
	
	public function supFournisseur($id)
	{
		$this->base->query("DELETE FROM produit WHERE id='$id'");

	}
	
}