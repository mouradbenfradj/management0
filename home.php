<?php session_start(); ?><!DOCTYPE html>
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
<nav class="art-nav">
    <div class="art-nav-inner">
    <ul class="art-hmenu"><li><a href="home.php?act=deconnextion" class="active">Deconnexion</a></li></ul> 
        </div>
    </nav>
<div class="art-sheet clearfix">
            <div class="art-layout-wrapper">
                <div class="art-content-layout">
                    <div class="art-content-layout-row">
                        <div class="art-layout-cell art-content"><article class="art-post art-article">
                                
                                                
                <div class="art-postcontent art-postcontent-0 clearfix">
<div class="art-content-layout">
    <div class="art-content-layout-row">
    <div class="art-layout-cell" style="width: 25%" >
        <?php if((isset($_SESSION['poste']))&&(!empty($_SESSION['poste'])))
		{
			if($_SESSION['poste']=='administrateur')
			{
		?>
        <div class="g1"><p><img width="64" height="64" alt="" src="images/port.png" style="float:left;margin-right:10px;" class=""></p><h4>Administration</h4><p><br></p><p style="text-align: center;"><a href="home.php?act=afficher" class="art-button">Afficher</a></p></div>
    </div><div class="art-layout-cell" style="width: 25%" >
        <div class="g2"><p><img width="64" height="64" alt="" src="images/time-3.png" style="float:left;margin-right:10px;" class=""></p><h4>Fournisseur</h4><p>&nbsp;</p><p style="text-align: center;"><a href="home.php?act=fournisseur" class="art-button">Afficher</a></p></div>
    </div><div class="art-layout-cell" style="width: 25%" >
        <div class="g3"><p><img width="64" height="64" alt="" src="images/chart.png" style="float:left;margin-right:10px;" class=""></p><h4>Produit</h4><p><br></p><p style="text-align: center;"><a href="home.php?act=produit" class="art-button">Afficher</a></p></div>
                <?php }else{ ?>
                <div class="g3"><p><img width="64" height="64" alt="" src="images/chart.png" style="float:left;margin-right:10px;" class=""></p><h4>Produit</h4><p><br></p><p style="text-align: center;"><a href="home.php?act=remplir" class="art-button">Afficher</a></p></div><?php } ?>
    </div><div class="art-layout-cell" style="width: 25%" >
        <div class="g4"><p><img width="64" height="64" alt="" src="images/dir.png" style="float:left;margin-right:10px;" class=""></p><h4>Facture</h4><p><br></p><p style="text-align: center;"><a href="home.php?act=facture" class="art-button">Afficher</a></p></div><?php } ?>
    </div>
    </div>
</div>
<div class="art-content-layout">
    <div class="art-content-layout-row">
    <div class="art-layout-cell layout-item-2" style="width: 100%" >
        <?php 
		include_once("base.php");
		include_once("class/administration.class.php");
		$admin = new Administration($bdd);
		include_once("class/fournisseur.class.php");
		$fournisseur = new Fournisseur($bdd);
		include_once("class/produit.class.php");
		$produit = new Produit($bdd);
		include_once("class/facture.class.php");
		$facture = new Facture($bdd);

		if(isset($_GET['act']))
		{
			extract($_GET);
			switch($_GET['act'])
			{
				case "deconnextion" : include_once('deconnexion.php'); break;
				case "afficher" : include_once('afficheUser.php'); break;
				case "produit" : include_once('afficheProduit.php'); break;
				case "fournisseur" : include_once('afficheFournisseur.php'); break;
				case "facture" : include_once('afficheFournisseur.php'); break;
				case "remplir" : include_once('remplir.php'); break;
				
				case "ajouter" : include_once('ajouter.php'); break;
				case "ajouterf" : include_once('ajouterf.php'); break;
				case "ajouterp" : include_once('ajouterp.php'); break;
				
				case "modifier" : include_once('modification.php'); break;
				case "modifierf" : include_once('modificationf.php'); break;
				case "modifierp" : include_once('modificationp.php'); break;
				
				case "confirmer" : $admin->modUser(); break;
				case "confirmermf" : $fournisseur->mod(); break;
				case "confirmermp" : $produit->mod(); break;
				
				case "supprimer" : $admin->supUser($id); break;
				case "supprimerf" : $fournisseur->supFournisseur($id); break;
				case "supprimerp" : $produit->supFournisseur($id); break;
				
				default : include_once('afficheUser.php');
			}
		}
		 ?>
    </div>
    </div>
</div>
<div class="art-content-layout">
    <div class="art-content-layout-row">
    <div class="art-layout-cell layout-item-2" style="width: 100%" >
        <p><br></p>
    </div>
    </div>
</div>
</div>


</article></div>
                    </div>
                </div>
            </div>
    </div>
<footer class="art-footer">
  <div class="art-footer-inner">
<div class="art-content-layout">
    <div class="art-content-layout-row">
    <div class="art-layout-cell layout-item-0" style="width: 100%">
        <p><br></p>
    </div>
    </div>
</div>

  </div>
</footer>

</div>


</body></html>