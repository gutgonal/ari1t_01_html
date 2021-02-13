<!doctype html>
<html>
	<head>
		<title>HEXAGONO</TITLE>
	</head>
	<body>
		<CENTER>
		<table  width="80%" weight="100%">
			<tr>
				<td bgcolor="00FFE2" >
					<center>
					<br><img src="img/hexagono.jpg" width="300"></br>
					</br>
					Halla la apotema de un hexágono regular de "X" cm de lado.</br>
					</br>					
					<form>
					lado del hexagono<input id="x" name="x" onkeyup="calcular()"value=<?=$_GET['x']?> />						
					</br>
					</br><button>CALCULAR</button>
					</br>
					</br>
					</form>
					Apotema del hexagono
					<div id="resultado"></div>
										
					
					<script>
						function calcular(){
						x=document.getElementById('x').value;
						x=parseFloat(x);
						resultado= (x*1.732/2*100)/100;
						document.getElementById('resultado').innerHTML=resultado;			
						}
					calcular()
					
					</script>
					
					<?php
						$x=$_GET['x'];
						echo "apotema del hexagono en php";
						echo"</br>";
						echo round(($x*1.732/2),3);						
					?>
					
					</center>
				</td>
			</tr>	
			 
		</table>
		</CENTER>
	</body>
</html>