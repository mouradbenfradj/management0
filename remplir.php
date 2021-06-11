<p>            <?php 		
			include_once("class/fournisseur.class.php");
			$fournisseur = new Fournisseur($bdd);
			include_once("class/produit.class.php");
			$produit = new Produit($bdd);
			include_once("class/facture.class.php");
			$facture = new Facture($bdd);

 			?>

	<form action="" method="get">
        <table width="100%">
        	<tr><td>fournisseur</td>
            <td><select name="fournisseur">
            <?php foreach($fournisseur->get_fournisseur() as $val){?>
            <option value="<?php echo $val['id'];?>"><?php echo $val['nom'];?></option> <?php } ?>
            </select>
            </td></tr>
            <tr><td>produit</td><td><select name="produit">
            <?php foreach($produit->get_Produit() as $val){?>
            <option value="<?php echo $val['id'];?>"><?php echo $val['nomp'];?></option> <?php } ?>
            </select></td></tr>
            <tr><td>date de livraison</td>
            <td><input type="date" name="date" /></td></tr>
            <tr><td>quantiter demander</td>
            <td><input type="number" name="qnt" /></td></tr>
            <tr><td>emplacement de stockage</td>
            <td><input type="text" name="emp" /></td></tr>
            <tr><td><input type="submit" value="ajouterf" name="act" /></td></tr>
            </table>
		<?php 
		if(isset($_GET['nom']))
{
				include_once("class/fournisseur.class.php");
				$fournisseur = new Fournisseur($bdd);
				extract($_GET);
				$fournisseur->setNom($nom);
				$fournisseur->setAdress($adress);
				$fournisseur->setTel($tel);
				$fournisseur->addFournisseur();
	
}
		?>
        </table>
        </p>