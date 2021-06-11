<p>
	<form action="home.php" method="get">
        <table>
        	<tr><td>nom</td><td><input type="text" name="nom" /></td></tr>
            <tr><td>adress</td><td><input type="text" name="adress" /></td></tr>
            <tr><td>telephone</td><td><input type="text" name="tel" /></td></tr>
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