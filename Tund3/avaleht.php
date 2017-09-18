<?php
    //Muutujad
	$myName = "Alexander";
	$myFamilyName = "Lawrence";
	$myAge = 0;
	$myBirthYear;
	$myLivedYearsList = "";
	
	$monthNamesEt = ["jaanuar", "veebruar", "märts", "april", "mai", "juuni", "juuli", "august", "september", "oktoober", "november", "detsember"];
	
	var_dump($monthNamesEt);
	echo $monthNamesEt[8];
	
	$hourNow = date("H");
	$partOfDay = "";
	
	if ($hourNow < 8){
	    $partOfDay = "varane hommik";
	}
	if ($hourNow >= 8) {
	    $partOfDay = "koolipäev";
	} 
	if ($hourNow >=16){
	    $partOfDay = "vaba aeg";
		}
		// nüüd vaatame, kas ja mida kasutaja sisestas
        //var_dump($_POST);
    if (isset($_POST["yearBirth"])){
		$myBirthYear = $_POST["yearBirth"];
		$myAge = date("Y") - $myBirthYear;
		
		//Tekitame loendi kõigist elatud aastatest
		$myLivedYearsList .= "<ol> \n";
		for ($i = $myBirthYear; $i <= date("Y"); $i++){
			//echo $i;
			$myLivedYearsList .= "<li>" .$i ."</li> \n";
		}
		$myLivedYearsList .= "</ol> \n";
	}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Alexander Lawrence veebiprogemise asjad</title>
</head>
<body>
    <h1>Alexander Lawrence</h1>
    <p>See veebileht on loodud veebiprogrammerimise kursusel ning ei sisalda mingisugust tõsiseltvõetavat sisu.</p>
	<p>Olen tubli tark ja ilus!</p>
	
	<?php
	    echo "<p>Täna on vastik ilm!</p>";
		echo "<p>Täna on ";
		$monthIndex = date("n") - 1; //n on kuu ilma lisanullita ees
		echo date("d.") .$monthNamesEt[$monthIndex].date(" Y");
		echo ".</p>";
		echo "Lehe laadimise hetkel oli kell: " .date("H:i:s") ;
	?>
	<p> PHP käivitakse lehe laadimisel ja siis tehakse kogu töö ära. Hiljem, kui vaja midagi jälle "kalkuleerida", siis leatakse kogu leht uuesti.</p>
    <?php
	    echo "<Lehe autori täisnimi on: " .$myName ." " .$myFamilyName ." .</p>";
		?>
		<h2>Vanus</h2>
		<p>Järgnevalt palume sisestada oma sünniaasta!</p>
		<form method="POST">
		    <label>Teie sünniaasta: </label>
			<input id="yearBirth" name="yearBirth" type="number" min="1900" max="2017" value="<?php echo $myBirthYear; ?>">
			<input id="submitYearBirth" name="submitYearBirth" type="submit" value="Kinnita">
		</form>
		<p>Teie vanus on <?php echo $myAge; ?> aastat.</p>
		<?php
		    if ($myLivedYearsList != ""){
				echo "<h3>Oled elanud järgnevatel aastatel</h3> \n";
				echo $myLivedYearsList;
			}
		?>
		<h2>Paar linki</h2>
		<p>Õpime <a href="http://www.tlu.ee" target="_blank">Tallinna Ülikoolis</a>.</p>
		<p>Minu esimene php leht on <a href="..">siin</a>.</p>
		<p>Minu sõbra Sergei teeb veebi <a href="../../../../~serfro/Veebiprogrammeerimine">siin</a>.</p>
		<p>Pilt <a href="http://minitorn.tlu.ee/~rinde/media/fotod/TLU_600x400/tlu_22.jpg" target"_blank">trepist</a>.</p>
</body>
</html>