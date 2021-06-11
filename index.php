<!DOCTYPE html>
<html dir="ltr" lang="en-US"><head><!-- Created by Artisteer v4.1.0.59861 -->
    <meta charset="utf-8">
    <title>Nouvelle Page</title>
    <meta name="viewport" content="initial-scale = 1.0, maximum-scale = 1.0, user-scalable = no, width = device-width">

    <!--[if lt IE 9]><script src="https://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <link rel="stylesheet" href="style.css" media="screen">
    <!--[if lte IE 7]><link rel="stylesheet" href="style.ie7.css" media="screen" /><![endif]-->
    <link rel="stylesheet" href="style.responsive.css" media="all">


    <script src="jquery.js"></script>
    <script src="script.js"></script>
    <script src="script.responsive.js"></script>


<style>.art-content .art-postcontent-0 .layout-item-0 { margin-top: 13px;margin-bottom: 13px;  }
.art-content .art-postcontent-0 .layout-item-1 { color: #101B23; background: #FFFFFF url('images/45e89.png') no-repeat scroll; padding: 0px;  }
.art-content .art-postcontent-0 .layout-item-2 { padding: 10px;  }
.ie7 .art-post .art-layout-cell {border:none !important; padding:0 !important; }
.ie6 .art-post .art-layout-cell {border:none !important; padding:0 !important; }

</style></head>
<body>
<div id="art-main">
<header class="art-header">


    <div class="art-shapes">
<div class="art-object1142538220" data-left="0.38%"></div>

            </div>
<h1 class="art-headline" data-left="12.78%">
    <a href="#">Targeter</a>
</h1>




                        
                    
</header>
<div class="art-sheet clearfix">
            <div class="art-layout-wrapper">
                <div class="art-content-layout">
                    <div class="art-content-layout-row">
                        <div class="art-layout-cell art-content"><article class="art-post art-article">
                                
                                                
                <div class="art-postcontent art-postcontent-0 clearfix">
               
<div class="art-content-layout">
    <div class="art-content-layout-row"></div>
</div>
<div class="art-content-layout">
    <div class="art-content-layout-row">
    <div class="art-layout-cell layout-item-2" style="width: 100%" >
        <p><?php 
		if(isset($_POST['login']))
		{
			include_once("base.php");
			include_once("class/administration.class.php");
			extract($_POST);
			$identifier = new Administration($bdd);
			$identifier->setLogin($login);
			$identifier->setPass($password);
			$identifier->identification();
		}
		
		?>
        <table>
		<form action="" method="post">
        <tr><td>Login</td>
        <td><input type="text" name="login"></td></tr>
        <tr><td>Mot de passe</td>
        <td width="50%"><input type="password" name="password"></td></tr>
        <tr><td colspan="2"><input type="submit" value="connexion"></td></tr></form></table></p>
    </div>
    </div>
</div>



</article></div>
                    </div>
                </div>
            </div>
    </div>
</div>


</body></html>