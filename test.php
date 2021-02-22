<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8" />
<title> Test php </title>
</head>

<body>
    
	
	<h1>Les variables</h1>
	
	
				<h2>Exercice 1</h2>
	
		<p>"Créer une variable : «nom» et l'initialiser avec la valeur de votre choix. Afficher son contenu."</p>
				
		<?php
		
			$nom = 'Doe';
			echo 'Bienvenue ' . ' ' . $nom . '.';
		 
		?>
		 
		
				<h2>Exercice 2</h2>
		
		<p>"Créer trois variables : «nom» , «prenom» et «age» et les initialiser avec les valeurs de votre choix. Attention age est de type entier. Afficher leur contenu."</p>
			
		<?php
		 
			$prenom = "John";
			$nom = 'Doe';
			$age = 27;
		 
			echo 'Bienvenue ' . ' ' . $prenom . ' ' . $nom . ', vous avez ' . $age . ' ans.';
		 
		?>
		
		
				<h2>Exercice 3</h2>
		
		<p>"Créer une variable «km». L'initialiser à 1. Afficher son contenu. Changer sa valeur par 3. Afficher son contenu. Changer sa valeur par 125. Afficher son contenu."</p>
				
		<?php
		
			$km = 1;
			echo $km . '<br />';
			
			$km =+ 3;
			echo $km . '<br />';
			
			$km =+ 125;
			echo $km;
		
		?>
		
		
				<h2>Exercice 4</h2>
		
		<p>"Créer une variable de type string, une variable de type int, une variable de type float, une variable de type booléan et les initialiser avec une valeur de votre choix. Les afficher."</p>
		
		<?php
		
			$string = 'John';
			echo $string . '<br />';
			
			$int = 17;
			echo $int . '<br />';
			
			$float = 15.3;
			echo $float . '<br />';
			
			$bool = true;
			echo $bool;
		
		?>
		
		
				<h2>Exercice 5</h2>
		
		<p>"Créer une variable de type int. L'initialiser avec rien. Afficher sa valeur. Donner une valeur à cette variable et l'afficher."</p>
				
		<?php
		
			$Int = NULL;
			echo $Int;
			
			$Int = 15;
			echo $Int;
		
		?>
		
		
		
				<h2>Exercice 6</h2>
		
		<p>"Créer une variable «nom» et l'initialiser avec la valeur de votre choix. Afficher : "Bonjour" + nom + ", comment vas tu ?"."</p>
				
		<?php
		
			$nom = 'Doe';
			
			echo 'Bonjour ' . $nom . '. ' . ' Comment vas tu ?';
		
		?>
		
		
				<h2>Exercice 7</h2>
		
		<p>"Créer trois variables «nom» , «prenom» et «age» et les initialiser avec les valeurs de votre choix. Attention age est de type entier. Afficher : "Bonjour" + nom + prenom + ",tu as" + age + "ans"."</p>
				
		<?php
			
			$nom = 'Doe';
			$prenom = 'John';
			$age = 27;
		
			echo 'Bonjour ' . ' ' . $prenom . ' ' . $nom . '. ' . 'Tu as ' . $age . ' ans.';
			
		?>
		
		
				<h2>Exercice 8</h2>
		
		<p>"Créer 3 variables.<br />
		Dans la première mettre l'addition qui donne le résultat 7.<br />
		Dans la deuxième mettre la multiplication qui donne le résultat 100.<br />
		Dans la troisième mettre la division qui donne le résultat 5.<br />
		Afficher le contenu des variables."</p>
				
		<?php
		
			$chiffre1 = 4;
			$chiffre2 = 3;
			$resultat = $chiffre1 + $chiffre2;
			
			echo $resultat;
		
		?>
		
		
	<h1>Les boucles</h1>
		
	
				<h2>Exercice 1</h2>
		
		<p>"Créer une variable et l'initialiser à 0. Tant que cette variable n'atteint pas 10 :<br />
			
			=> l'afficher.<br />
			=> incrémenter de 1."</p>
				
		<?php
		
			$nombre = 0;
			
			while ($nombre <= 10) {
				echo $nombre . '<br />';
				$nombre++;
			}
		
		?>
		
		
				<h2>Exercice 2</h2>
		
		<p>"Créer deux variables. Initialiser la première à 0 et la deuxième avec un nombre compris entre 1 et 100. Tant que la première variable n'est pas supérieur à 20 :<br />
			
			=> multiplier la première variable avec la deuxième.<br />
			=> afficher le résultat.<br />
			=> incrémenter la première variable."</p>
			
		<?php
		
			$a = 0;
			$ab = 20;
			
		
		?>
		
		
				<h2>Exercice 3</h2>
		
		<p>"Créer deux variables. Initialiser la première à 100 et la deuxième avec un nombre compris entre 1 et 100. Tant que la première variable n'est pas inférieur ou égale à 10 :<br />
			
			=> soustraire la première variable avec la deuxième.<br />
			=> afficher le résultat.<br />
			=> décrémenter la première variable."</p>
			
		<?php
		
		?>
		
		
				<h2>Exercice 4</h2>
		<p>"Créer une variable et l'initialiser à 1. Tant que cette variable n'atteint pas 10 :<br />
			
			=> l'afficher.<br />
			=> l'incrementer de la moitié de sa valeur."</p>
		
		<?php
		
			$c = 1;
            
            while($c <= 10){
                
                echo $c++. '<br />';
            }
		
		?>
		
		
				<h2>Exercice 5</h2>
		
		<p>"En allant de 1 à 15 avec un pas de 1, afficher le message On y arrive presque..."</p>
		
		<?php
		
			for ($h=1; $h <= 15; $h+=1) {
				echo $h . ' ';
			}
			
				echo ' On y arrive presque...';
		
		?>
		
		
				<h2>Exercice 6</h2>
		
		<p>"En allant de 20 à 0 avec un pas de 1, afficher le message C'est presque bon..."</p>
		
		<?php
		
			for ($i=20; $i>0; $i=$i-1){
				echo $i . ' ';
			}
			
				echo ' C\'est presque bon...';
		
		?>
		
		
				<h2>Exercice 7</h2>
		
		<p>"En allant de 1 à 100 avec un pas de 15, afficher le message On tient le bon bout..."</p>
		
		<?php
		
			for ($j=1; $j <=100; $j+=15) {
				echo $j . ' ';
			}
			
				echo ' On tient le bout...';
		
		?>
		
		
				<h2>Exercice 8</h2>
				
		<p>"En allant de 200 à 0 avec un pas de 12, afficher le message Enfin!!!"</p>
		
		<?php
		
			for ($k=200; $k>0; $k=$k-12) {
				echo $k . ' ';
			}
			
				echo ' Enfin!!!';
		
		?>
		
		
	<h1>Les fonctions</h1>
		
	
				<h2>Exercice 1</h2>
				
		<p>"Faire une fonction qui retourne true."</p>
		
		<?php
		
			function maFonction($true) {
  				echo $true;
			}
			
				maFonction(true);
			
		?>
		
		
				<h2>Exercice 2</h2>
		
		<p>"Faire une fonction qui prend en paramètre une chaine de caractères et qui retourne cette même chaine."</p>
		
		<?php
		
			function maFonction2($string1) {
  				return $string1;
			}
			
				maFonction('Caractères.');
			
			?>
		
		
				<h2>Exercice 3</h2>
			
		<p>"Faire une fonction qui prend en paramètre deux chaines de caractères et qui renvoit la concaténation de ces deux chaines."</p>
		
		<?php
		
			function maFonction3($string2, $string3) {
  				return $string2+$string3;
			}
			
				maFonction3('Caractères 2 ', ' Caractères 3');
		
		?>
		
	
				<h2>Exercice 4</h2>
			
		<p>"Faire une fonction qui prend en paramètre deux nombres. La fonction doit retourner :<br />
			
			=> Le premier nombre est plus grand si le premier nombre est plus grand que le deuxième.<br />
			=> Le premier nombre est plus petit si le premier nombre est plus petit que le deuxième.<br />
			=> Les deux nombres sont identiques si les deux nombres sont égaux."</p>
		
		<?php
		
			
		
		?>
		
		
				<h2>Exercice 5</h2>
		
		<p>"Faire une fonction qui prend en paramètre un nombre et une chaine de caractères et qui renvoit la concaténation de ces deux paramètres."</p>
		
		<?php
		
			
		
		?>
		
		
				<h2>Exercice 6</h2>
		
		<p>"Faire une fonction qui prend trois paramètres : nom, prenom et age.<br />
			Elle doit renvoyer une chaine de la forme : "Bonjour" + nom + prenom + ", tu as " + age + "ans"."</p>
		
		<?php
		
			
		
		?>
		
		
				<h2>Exercice 7</h2>
		
		<p>"Faire une fonction qui prend deux paramètres : age et genre.<br />
			Le paramètre genre peut prendre comme valeur Homme ou Femme.<br />
			La fonction doit renvoyer en fonction des paramètres (gérer tous les cas) :<br />
			
			=> Vous êtes un homme et vous êtes majeur.<br />
			=> Vous êtes un homme et vous êtes mineur.<br />
			=> Vous êtes une femme et vous êtes majeur.<br />
			=> Vous êtes une femme et vous êtes mineur."</p>
		
		<?php
		
			
		
		?>
		
		
				<h2>Exercice 8</h2>
		
		<p>"Faire une fonction qui prend en paramètre trois nombres et qui renvoit la somme de ces nombres. Tous les paramètres doivent avoir une valeur par défaut."</p>
		
		<?php
		
			function somme($nb1, $nb2, $nb3){
				return $nb1+$nb2+$nb3;
			}
    
				echo somme(15, 23, 89);
		
		?>
		
		
	<h1>Les tableaux</h1>
		
	
				<h2>Exercice 1</h2>
				
		<p>"Créer un tableau $mois et l'initialiser avec le nom des douze mois de l'année."</p>
		
		<?php
		
			$mois = array(janvier, février, mars, avril, mais, juin, juillet, aout, septembre, octobre, novembre, décembre);
		
		?>
		
		
				<h2>Exercice 2</h2>
				
		<p>"Avec le tableau de l'exercice 1, afficher la valeur de la troisième ligne de ce tableau."</p>
		
		<?php
			
			echo $mois[2];
		
		?>
		
		
				<h2>Exercice 3</h2>
		
		<p>"Avec le tableau de l'exercice, afficher la valeur de l'index 5."</p>
		
		<?php
		
			echo $mois[5];
			
		?>
		
		
				<h2>Exercice 4</h2>
				
		<p>"Avec le tableau de l'exercice 1, modifier le mois de août pour lui ajouter l'accent manquant."</p>
		
		<?php
		
			$replacement = array(7 => "août");

			$basket = array_replace($mois, $replacement);
			print_r($basket);
		
		?>
		
		
				<h2>Exercice 5</h2>
				
		<p>"Créer un tableau associatif avec comme index le numéro des départements
		des Hauts de France et en valeur leur nom."</p>
		
		<?php
		
			$departements = array("02" => "Aisne", "59" => "Nord", "60" => "Oise", "62" => "Pas-de-Calais", "80" => "Somme");
		
		?>
		
		
		
				<h2>Exercice 6</h2>
				
		<p>"Avec le tableau de l'exercice 5, afficher la valeur de l'index 59."</p>
		
		<?php
		
			echo implode($departements[1]);
		
		?>
		
		<?php
		
			print_r($departements[1,'Nom']);
		
		?>
		
		
				<h2>Exercice 7</h2>
		
		<p>"Avec le tableau de l'exercice 5, ajouter la ligne correspondant au département de la ville de Reims."</p>
		
		<?php
		
			
		
		?>
			
		
				<h2>Exercice 8</h2>
				
		<p>"Avec le tableau de l'exercice 1 et une boucle, afficher toutes les valeurs de ce tableau."</p>
		
		<?php
			
			foreach($mois as $element)
			{
				echo $element . '<br />';
			}
			
		?>
		
		
				<h2>Exercice 9</h2>
				
		<p>"Avec le tableau de l'exercice 5, afficher toutes les valeurs de ce tableau."</p>
		
		<?php
			
			echo implode(", ", $departements);
		
		?>
		
		
				<h2>Exercice 10</h2>
				
		<p>"Avec le tableau de l'exercice 5, afficher toutes les valeurs de ce tableau ainsi que les clés associés. Cela pourra être, par exemple, de la forme :<br />
			"Le département" + nom_departement + "a le numéro" + num_departement."</p>
		
		<?php

			$key = array_search('Aisne', $departements);
		
			echo 'Le département ' . $departements[0] . ' a le numéro ';
		?>
		
</body>
</html>