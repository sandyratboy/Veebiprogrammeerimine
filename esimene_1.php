<?php
    //Muutujad
	$myName = "Alexander";
	$myFamilyName = "Lawrence";
	$practiceStarted = "2017-09-11 8.15";
	
	//echo strtotime($practiceStarted);
	//echo strtotome("now");
	//$timePassed = strtotime("now") -strtotime("practiceStarted");
	//echo $timeStarted;
	
	$hourNow = date("H");
	$partOfDay = "";
	
	if ($hourNow < 8){
	    $partOfDay = "varane hommik";
	}
	if ($hourNow >= 8) {
	    $partOfDay = "koolipäev";
	} 
	if ($hourNow >=16)(
	    $partOfDay = "vaba aeg";
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
		echo date("d.m.Y");
		echo ".</p>";
		echo "Lehe laadimise hetkel oli kell: " .date("H:i:s") ;
	?>
	<p> PHP käivitakse lehe laadimisel ja siis tehakse kogu töö ära. Hiljem, kui vaja midagi jälle "kalkuleerida", siis leatakse kogu leht uuesti.</p>
    <?php
	    echo "<Lehe autori täisnimi on: " .$myName ." " .$myFamilyName ." .</p>";
		?>
</body>
</html>