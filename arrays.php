<html>
	<head>
		<title>Clase</TITLE>
	</head>
	<body>
		<CENTER>
		<table  width="80%" weight="100%">
			<tr>
				<td bgcolor="00FFE2" >
					<center>
					<br><img src="img/Clase.jpg" width="300"></br>
					</br>
					<h3>Crea un array con el nombre de tus compañeros, en qué puesto se sienta y</br>
					selecciona uno de ellos al azar	indicando su nombre y puesto</br>
					</h3>						
					<form>
					<h4>Puesto</h4><input id="x" name="x" onkeyup="buscar()" value=<?=$_GET['x']?> />
					</br><button>BUSCAR</button>
					
					</form>
					
					<table width="50%">
					<tr>
						<td><center><b>Nombre de Compañero en PHP</b></br>
						
						<?php
						if(!isset($_GET['x']))
						$x=$_GET['x']=7;
						$compañeros =[
						'1'=>'IVAN',
						'2'=>'ANDRES',
						'3'=>'SERGIO',
						'4'=>'ANDRES',
						'5'=>'EDUARDO',
						'6'=>'HECTOR',
						'7'=>'ALBERTO',
						'8'=>'PABLO DELEGADO',
						'9'=>'PABLO',
						'10'=>'JAURY',
						'11'=>'PABLO',
						'12'=>'VALENTIN',
						'13'=>'SERGIO',
						'14'=>'FRANCISCO',
						];
						
						echo $compañeros[$_GET['x']];
						
					?>
						</center></td>
						<td><center><b>Nombre de Compañero en JS</b></br>
						<div id="nombre"></div>
						
						<script>
						
						x=document.getElementById('x').value;
										
						compañeros =[
						'IVAN',
						'ANDRES',
						'SERGIO',
						'ANDRES',
						'EDUARDO',
						'HECTOR',
						'ALBERTO',
						'PABLO DELEGADO',
						'PABLO',
						'JAURY',
						'PABLO',
						'VALENTIN',
						'SERGIO',
						'FRANCISCO',
						];
						
						document.getElementById('nombre').innerHTML=compañeros[x-1];		
						console.log("hola");
						
						
						</script>
						</center>
						</td>
					</tr>
					</table>
					
					
					
					
					
					
					
					</center>
				</td>
			</tr>	
			 
		</table>
		</CENTER>
	</body>
</html>