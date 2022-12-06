<!DOCTYPE html>
<html lang="de">
<head>
<link href="stylesheet.css" rel="stylesheet">
    <meta charset="UTF-8">  
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DAIM THAT SHIT</title>
</head>

<body>
<header>
			<div class="wrapper">
				<div class="logo">
					 <a href="#"><img class="img4" src="Diverses/Bilder/image4.jpeg"> NickelCloud</a> 
				</div>
				<nav>
					<a href="index.html" target="_self">Home</a><a href="Familie/Familie.html" target="_self">Dashboard</a>
				</nav>
				</div>
		</header>
		<div class="banner-area">
			
		</div> 
        <div class="content-area">
    <div  class ="dropdown-menu">
    <form>
  <label for="dropdown-menu">Prozessoren(CPU): gewünschte Anzahl Cores(Anzahl) :</label>
  <select id="dropdown-menu" class="dropdown-menu-item ">
    <option value="1">1(1 CHF)</option>
    <option value="2">2(2 CHF)</option>
    <option value="3">4(4 CHF)</option>
    <option value="4">8(8 CHF)</option>
    <option value="4">16(16 CHF)</option>
  </select>
 
</form>

<form>
  <label for="dropdown-menu">Wählen sie die Menge von RAM:</label>
  <select id="dropdown-menu" class="dropdown-menu-item ">
    <option value="1">512 (1 CHF)</option>
    <option value="2">1024 (2 CHF)</option>
    <option value="3">2048 (4 CHF)</option>
    <option value="4">4096 (8 CHF)</option>
    <option value="5">8192 (16 CHF)</option>
    <option value="6">16384 (32 CHF)</option>
    <option value="7">32768 (64 CHF)</option>
  </select>
 
</form>

<form>
  <label for="Speicherplatz">Wählen sie die Menge von Speicher:</label>
  <select id="speicherplatz" class="dropdown-menu-item ">
    <option value="1">10 (1 CHF)</option>
    <option value="2">20 (2 CHF)</option>
    <option value="3">40 (3 CHF)</option>
    <option value="4">80 (4 CHF)</option>
    <option value="5">240 (5 CHF)</option>
    <option value="6">500 (6 CHF)</option>
    <option value="7">1000 (8 CHF)</option>
  </select>


</form>

<form>
<button style="background-color: #04AA6D;color: white; padding: 12px 20px;border: none;border-radius: 4px;cursor: pointer;width:800px;height:500px">Submit</button>
</from>
</div>
</div>

<?php
  $daten = file_get_contents("Serverspecs.txt");
  $alles = explode("??", $daten);
  $alles1 = explode("||", $alles[0]);
  $alles2 = explode("||", $alles[1]);
  $alles3 = explode("||", $alles[2]);
  echo $alles1[1]."<br>";
  echo $alles2[1]."<br>";
  echo $alles3[1]."<br>";
  $scpu1 = $alles1[1];
  $sram1 = $alles1[2];
  $sssd1 = $alles1[3];

  $scpu2 = $alles2[1];
  $sram2 = $alles2[2];
  $sssd2 = $alles2[3];

  $scpu3 = $alles3[1];
  $sram3 = $alles3[2];
  $sssd3 = $alles3[3];

  $filename="inhalt.txt";
  $inhalt= "ServerSmall: ||$cpu1||$ram1||$ssd1??"."\n"."ServerMedium: ||$cpu2||$ram2||$ssd2??"."\n"
  ."ServerBig: ||$cpu3||$ram3||$ssd3";
  file_put_contents($filename, $inhalt);

  if ($scpu1 >= $acpu || $sram1 >= $aram || $sssd1 >= $assd) {
    #header("Location: success.php");
    #exit();
  }
  elseif ($scpu2 >= $acpu || $sram2 >= $aram || $sssd2 >= $assd) {
    #header("Location: success.php");
    #exit();
  }
  elseif ($scpu3 >= $acpu || $sram3 >= $aram || $sssd3 >= $assd) {
    #header("Location: success.php");
    #exit();
  }
  else {
    echo "Die VM passt in keinen Server";
  }


  
?>

</body>
</html>
