<p>
<?php 
		include_once("base.php");
		include_once("class/fournisseur.class.php");
		$fournisseur = new Fournisseur($bdd);

		if(isset($_GET['id']))
		{
			$fournisseur->setId($_GET['id']);
			$fournisseur->find();		
		}
		
		
		?>
	<form action="home.php" method="get">
        <input type="hidden" value="<?php echo $fournisseur->getId(); ?>" name="id">

        <table>
        	<tr><td>nom</td><td><input type="text" name="nom" value="<?php echo $fournisseur->getNom(); ?>" /></td></tr>
            <tr><td>adress</td><td><input type="text" name="adress" value="<?php echo $fournisseur->getAdress();?>"/></td></tr>
            <tr><td>telephone</td><td><input type="text" name="tel" value="<?php echo $fournisseur->getTel();?>"/></td></tr>
            <tr><td><input type="submit" value="confirmermf" name="act" /></td></tr>
            </table>
        </table>
        </p>