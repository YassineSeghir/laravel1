<?php
include_once("array.php"); 

//----------------------------------------------------------------------
// AFFICHE ARTICLES 
//---------------------------------------------------------------------- 
function afficheArticleFull(){
    $nb = ConnectBDD()->query('SELECT * FROM article 
    INNER JOIN asso_article_img ON article.ID_ARTICLE = asso_article_img.ID_ARTICLE
    INNER JOIN images ON images.ID_IMAGE = asso_article_img.ID_IMAGE
    ORDER BY NAME ASC
    ');	
    while ($article = $nb->fetch()){
        echo "<div class=\"article\">";
            echo "<div class=\"four left\"><h4>".$article['NAME']."</h4>  
                <p>".$article['DESCRIPTION']." </p>
                <p>Poids : ".$article['WEIGHT']."</p>";
                    if($article['STOCK'] == 1){
                        echo "<p>Il reste ". $article['STOCK']." article en stock</p>";
                        }
                    else if($article['STOCK'] > 1){
                                echo "<p>Il reste ". $article['STOCK']." articles en stock</p>";
                    }
            echo "</div>" ;   
            echo"<div class=\"four left\"><img src=../images/".$article['NAME_IMG']." alt=\"".$article['NAME']."\"></div>";     
            echo "<div><span>Prix : ".number_format($article['PRICE'],2,","," ")." €</span> <p>Je le veux !  
            <input type=\"checkbox\" name=\"produits[]\" value=\"".$article['ID_ARTICLE']."\"></p></div>"; 
        echo "</div>"; 
        echo "<hr>";
    }  
}
?>
<html lang="fr">
	<head>
		<title>Catalogue - fonctions 2</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<link rel="stylesheet" type="text/css" href="style.css"> 
		<link href="https://fonts.googleapis.com/css?family=Merriweather|Pacifico" rel="stylesheet"> 
		<meta name="keywords" content="">
		<meta name="description" content=" ">
		<meta name="viewport" content="width=device=width, initial-scale=1, maximum-scale=1">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP"
        crossorigin="anonymous">
	</head>
	<body> 
		<?php include_once("header.php") ?>
		 <section class="bande">
			<div class="container">

			<h2><span>Fonction</span> : bonnes pratiques</h2>
 		<form method="post" action="panier.php" enctype="multipart/form-data" class="contact">  
				<?php  
				  foreach($articlePanier as $key => $article){ 
                     afficheProduits(
							$article["title"],
							$article["description"],
							$article["image"],
							$article["price"], 
                            $key 
                        ); 
					}  				
				?> 
				<div class="article">  
		    		<input type="submit" name="go" id="go" value="J'achète" />  
				</div>
				</form> 
				 
			</div>
		</section>
	</body>
<html>