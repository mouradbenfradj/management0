<p>
	<form action="home.php" method="get">
        <table>
        	<tr><td>identifiant</td><td><input type="text" name="login" /></td></tr>
            <tr><td>mot de passe</td><td><input type="password" name="pass" /></td></tr>
            <tr><td>verif passe</td><td><input type="password" name="vpass" /></td></tr>
            <tr><td>poste</td>
            	<td>
          			<select name="poste">
        				<option value="administrateur">administrateur</option>
                        <option value="utilisateur">utilisateur</option>
         		   </select>
        	    </td>
            </tr>
            <tr><td><input type="submit" value="ajouter" name="act" /></td></tr>
            </table>
		<?php 
		if(isset($_GET['login']))
			if($_GET['pass']==$_GET['vpass'])
			{
				extract($_GET);
				$admin->setLogin($login);
				$admin->setPass($pass);
				$admin->setPoste($poste);
				$admin->addUser();
			}
			else
			{
				echo "mot de passe ne sons pas identique";
			}
		
		?>
        </table>
        </p>