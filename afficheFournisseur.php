<p><a href="home.php?act=ajouterf">Ajouter un Fournisseur</a></p>

<p>
        <table border="1" width="100%">
        <tr><td>identifiant</td><td>nom</td><td>adress</td><td>telephone</td><td>valeur</td><td>modifier</td><td>supprimer</td></tr>
		<?php 
		include_once("class/fournisseur.class.php");
		$fournisseur = new Fournisseur($bdd);
		$tabs = $fournisseur->get_fournisseur();
		foreach($tabs as $cle => $tab) 
		{    
			echo 	"<tr>
						<td>".$tabs[$cle]['id']."</td>
						<td>".$tabs[$cle]['nom']."</td>
						<td>".$tabs[$cle]['adress']."</td>
						<td>".$tabs[$cle]['tel']."</td>
						<td>".$tabs[$cle]['valeur']."%</td>

						<td>
							<form action='home.php' method='get'>
        					<input type='hidden' name='id' value='".$tabs[$cle]['id']."'>
       					 	<input type='submit' name='act' value='modifierf'>
        					</form>
						</td>
						<td>
							<form action='home.php' method='get'>
        					<input type='hidden' name='id' value='".$tabs[$cle]['id']."'>
       					 	<input type='submit' name='act' value='supprimerf'>
        					</form></td>
					</tr>"; 
		} 
		
		?>
        </table>
        </p>