<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset= utf-8">
</head>
<body>

<h2>Tingimuslaused</h2>
<?php
	$a = 5 . "<br>";
	$b = 5 . "<br>";
	if ($a < $b) {
		echo "{$a} on väiksem kui {$b}";
	} elseif ($a > $b) {
		echo "{$a} on suurem kui {$b}";
	} elseif ($a = $b) {
		echo "{$a} on võrdne{$b}" . "<br>";
}
?>
<?php
	$age = 45; 
	$age_limit = 18;
	if ($age < $age_limit) {
		echo "Kahjuks olete liiga noor. Te peate olema vähemalt " . ($age_limit)
		 . ' aastat vana. ' . "Tulge " . ($age_limit - $age) . " aasta pärast tagasi.";
	} elseif ($age >= $age_limit) {
		echo "Olete piisavalt vana." . "Tulge edasi." . "<br>";

	}

?>

<?php
	$var1 = 3;
	$var2 = 3;
	$var3 = 4;
	$var4 = 5;
	if (($var1 = $var2) && ($var3 > $var4)) {
		echo "Esimene ja teine muutuja on võrdsed ja kolmas muutuja on suurem kui neljas";
	}

if (($var1 = $var2) || ($var3 > $var4)) {
		echo "Esimene ja teine muutuja on võrdsed ja kolmas muutuja on suurem kui neljas";
	}	// tõesti ei tea miks üks väljastas teksti ja teine mitte, kell on liiga palju :( 
?>

<h3>Eitus</h3>
<?php
	if (!isset($nothing)) {
		echo "OLEMAS";
	}
?>

<h3>switch</h3>
<?php
	$current_language = 'fi';
	switch ($current_language) {
		case 'et':
			echo "Tere! Kuidas sul läheb?";
			break;
		case 'ru':
			echo "Здравствуйте! Как вы собираетесь?";
			break;
		case 'fi':
			echo "Hei! Miten aiotte?";
				break;	
		default:
			echo "Hi! How are you?";
			break;
	}
?>

</body>


</html>