<p>
<?php 
		include_once("base.php");
		include_once("class/produit.class.php");
		$produit = new produit($bdd);

		if(isset($_GET['id']))
		{
			$produit->setId($_GET['id']);
			$produit->find();		
		}
		
		
		?>
	<form action="home.php" method="get">
        <input type="hidden" value="<?php echo $produit->getId(); ?>" name="id">

        <table>
        	<tr><td>nom</td><td><input type="text" name="nomp" value="<?php echo $produit->getNomp(); ?>" /></td></tr>
            <tr><td>fournisseur</td><td><input type="text" name="fournisseur" value="<?php echo $produit->getFournisseur();?>"/></td></tr>
            <tr><td>categorie</td><td><input type="text" name="categorie" value="<?php echo $produit->getCategorie();?>"/></td></tr>
            <tr><td>marque</td><td><input type="text" name="marque" value="<?php echo $produit->getMarque();?>"/></td></tr>
            <tr><td>type</td><td><input type="text" name="type" value="<?php echo $produit->getType();?>"/></td></tr>
            <tr><td>tva</td><td><input type="text" name="tva" value="<?php echo $produit->getTva();?>"/></td></tr>
            <tr><td>pht</td><td><input type="text" name="pht" value="<?php echo $produit->getPht();?>"/></td></tr>
            <tr><td>pvt</td><td><input type="text" name="pvt" value="<?php echo $produit->getPvt();?>"/></td></tr>
            <tr><td><input type="submit" value="confirmermp" name="act" /></td></tr>
            </table>
        </table>
        </p>