<!doctype html>
<html>
	<head>
		<title>edades</TITLE>
	</head>
	<body>
		<CENTER>
		<table  width="80%" weight="100%">
			<tr>
				<td bgcolor="00FFE2" >
					<center>
					<br><img src="img/edades.jpg" width="300"></br>
					</br>
					En el año "X" la edad de Ana era el triple de la de su hija María.</br> 
					En "Y", sus edades sumaban "Z" años.</br> 
					  </br>
					</br>					
					<form>
					año inicial"X"<input id="x" name="x" onkeyup="calcular()"value=<?=$_GET['x']?> />
					Segunda fecha"Y"<input id="y" name="y" onkeyup="calcular()"value=<?=$_GET['y']?> />
					Suma de los años en el año "Y"<input id="z" name="z" onkeyup="calcular()"value=<?=$_GET['z']?> />
					</br>
					</br><button>CALCULAR</button>
					</br>
					</br>
					</form>
					¿Qué edad tenía María en X?
					<div id="resultado"></div>
					¿En qué año nació María?
					<div id="resultado2"></div>
					¿Qué años tenía su madre cuando nació María?
					<div id="resultado3"></div>
					
					
					<script>
						function calcular(){
						x=document.getElementById('x').value;
						y=document.getElementById('y').value;
						z=document.getElementById('z').value;
						x=parseFloat(x);
						y=parseFloat(y);
						z=parseFloat(z);
						resultado=Math.round((z-((y-x)*2))/4);
						resultado2= Math.round (x-resultado);
						resultado3= Math.round (resultado*2);
						document.getElementById('resultado').innerHTML=resultado;
						document.getElementById('resultado2').innerHTML=resultado2;
						document.getElementById('resultado3').innerHTML=resultado3;
						
						}
					calcular()
					
					</script>
					
					<?php
						$x=$_GET['x'];
						$y=$_GET['y'];
						$z=$_GET['z'];
						echo "edad maria en X php";
						echo"</br>";
						echo round(($z-(($y-$x)*2))/4,0);
						echo"</br>";						
						echo "año nacimiento maria en php";
						echo"</br>";
						echo round ($x-(($z-(($y-$x)*2))/4),0);
						echo"</br>";
						echo "años de madre cuando nacio en php";
						echo"</br>";
						echo round (((($z-(($y-$x)*2))/4)*2),0);
					?>
				
					
					</center>
				</td>
			</tr>	
			 
		</table>
		</CENTER>
	</body>
</html>