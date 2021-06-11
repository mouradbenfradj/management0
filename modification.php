<p>
<?php 
		include_once("base.php");
		include_once("class/administration.class.php");

		$admin = new Administration($bdd);

		if(isset($_GET['id']))
		{
			$admin->setLogin($_GET['id']);
			$admin->findUser();		
		}
		
		
		?>
	<form action="home.php?act=confmod" method="get">
    <input type="hidden" value="<?php echo $admin->getLogin(); ?>" name="logino">
        <table>
        	<tr><td>identifiant</td><td><input type="text" name="login" value="<?php echo $admin->getLogin(); ?>" /></td></tr>
            <tr><td>mot de passe</td><td><input type="password" name="pass" value="<?php echo $admin->getPass();?>"/></td></tr>
            <tr><td>verif passe</td><td><input type="password" name="vpass" value=""/></td></tr>
            <tr><td>poste</td>
            	<td>
          			<select name="poste">
        				<option value="1">administrateur</option>
                        <option value="0">utilisateur</option>
         		   </select>
        	    </td>
            </tr>
            <tr><td><input type="submit" value="confirmer" name="act" /></td></tr>
            </table>
        </table>
        </p>