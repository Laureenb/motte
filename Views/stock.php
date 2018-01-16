<div class="stock">
	<h1>STOCK</h1>
	<form name="search-stock" action="../index.php" method="get">
	<label>SEARCH THE STOCK</label><br/>
	<input type="text" placeholder="Exemple:Chaise" />
	<input type="submit" value="search"/>
</form>
</div>
<?php
try {
	$bdd=new PDO('mysql:host=localhost; dbname=stocks;charset=utf8;' 'root','');	
}
catch (Exception $e) {
	die("Erreur : " .$e->getMessage());
}

$requete = $bdd->query('SELECT * FROM meubles');
$donnees = $requete->fetch(PDO::FETCH_ASSOC);

print_r($donnees);






?>

