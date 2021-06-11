<p><a href="home.php?act=ajouter">Ajouter un utilisateur</a></p>

<p>
        <table border="1" width="100%">
        	<tr><td>identifiant</td><td>poste</td><td>modifier</td><td>supprimer</td></tr>
		<?php 
		
		$tabs = $admin->get_user();
		foreach($tabs as $cle => $tab) 
		{    
			echo 	"<tr>
						<td>".$tabs[$cle]['login']."</td>
						<td>".$tabs[$cle]['poste']."</td></td>
						<td>
							<form action='home.php' method='get'>
        					<input type='hidden' name='id' value='".$tabs[$cle]['login']."'>
       					 	<input type='submit' name='act' value='modifier'>
        					</form>
						</td>
						<td>
							<form action='home.php' method='get'>
        					<input type='hidden' name='id' value='".$tabs[$cle]['login']."'>
       					 	<input type='submit' name='act' value='supprimer'>
        					</form></td>
					</tr>"; 
		} 
		
		?>
        </table>
        </p>