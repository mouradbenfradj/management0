<p><a href="home.php?act=ajouterp">Ajouter un Produit</a></p>

<p>
        <table border="1" width="100%">
        <tr><td>identifiant</td><td>nom</td><td>fournisseur</td><td>categorie</td><td>marque</td><td>type</td><td>TVA</td><td>PHT</td><td>PVT</td><td>modifier</td><td>supprimer</td></tr>
		<?php 
		include_once("class/produit.class.php");
		$fournisseur = new Produit($bdd);
		$tabs = $fournisseur->get_Produit();
		foreach($tabs as $cle => $tab) 
		{    
			echo 	"<tr>
						<td>".$tabs[$cle]['id']."</td>
						<td>".$tabs[$cle]['nomp']."</td>
						<td>".$tabs[$cle]['fournisseur']."</td>
						<td>".$tabs[$cle]['categorie']."</td>
						<td>".$tabs[$cle]['marque']."</td>
						<td>".$tabs[$cle]['type']."</td>
						<td>".$tabs[$cle]['tva']."</td>
						<td>".$tabs[$cle]['pht']."</td>
						<td>".$tabs[$cle]['pvt']."</td>

						<td>
							<form action='home.php' method='get'>
        					<input type='hidden' name='id' value='".$tabs[$cle]['id']."'>
       					 	<input type='submit' name='act' value='modifierp'>
        					</form>
						</td>
						<td>
							<form action='home.php' method='get'>
        					<input type='hidden' name='id' value='".$tabs[$cle]['id']."'>
       					 	<input type='submit' name='act' value='supprimerp'>
        					</form></td>
					</tr>"; 
		} 
		
		?>
        </table>
        </p>