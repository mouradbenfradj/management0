<p>
	<form action="home.php" method="get">
        <table>
        	<tr><td>nom</td><td><input type="text" name="nom" /></td></tr>
            <tr><td>fournisseur</td><td>
            <?php
		include_once("class/fournisseur.class.php");
		$fournisseurs = new Fournisseur($bdd);

			?>
            <select name="fournisseur">
            <?php foreach($fournisseurs->get_fournisseur() as $val){?>
            <option value="<?php echo $val['id'];?>"><?php echo $val['nom'];?></option> <?php } ?>
            </select>
            </td></tr>
            <tr><td>categorie</td><td><input type="text" name="categorie" /></td></tr>
            <tr><td>marque</td><td><input type="text" name="marque" /></td></tr>
            <tr><td>type</td><td><input type="text" name="type" /></td></tr>
            <tr><td>TVA</td><td><input type="text" name="tva" /></td></tr>
            <tr><td>PHT</td><td><input type="text" name="pht" /></td></tr>
            <tr><td>PVT</td><td><input type="text" name="pvt" /></td></tr>
            <tr><td><input type="submit" value="ajouterp" name="act" /></td></tr>
            </table>
		<?php 
		if(isset($_GET['nom']))
{
				include_once("class/produit.class.php");
				$produit = new Produit($bdd);
				extract($_GET);
				$produit->setNomp($nom);
				$produit->setFournisseur($fournisseur);
				$produit->setCategorie($categorie);
				$produit->setMarque($marque);
				$produit->setType($type);
				$produit->setTva($tva);
				$produit->setPht($pht);
				$produit->setPvt($pvt);
				$produit->addFournisseur();
	
}
		?>
        </table>
        </p>