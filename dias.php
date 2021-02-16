<html>
	<head>
		<title>dias de la semana con R</TITLE>
	</head>
	<body>
	<?php
						if(!isset($_GET['x']))
						$x=$_GET['x']='r';
						?>

		<CENTER>
		<table  width="80%" weight="100%">
			<tr>
				<td bgcolor="00FFE2" >
					<center>
					<br><img src="img/dias.jpg" width="300"></br>
					</br>
					<h3>Muestra el listado ordenado de días de la semana que contengan la letra deseada</br></h3>						
					<form>
					<button>BUSCAR</button>
					<input id="x" name="x" onkeyup="buscador()" value=<?=$_GET['x']?> />
					
					</form>
					
					Los dias de la semana con esa letra en JS son:
					<div id="dias"></div>
									
						<script>
						
							semana=[
							'lunes',
							'martes',
							'miercoles',
							'jueves',
							'viernes',
							'sabado',
							'domingo'
							];
						
							if(true){
								
							x=document.getElementById('x').value;
							
								for(i=0;i<7;i++){
									
									if(semana[i].indexOf(x) != -1){
																						
									document.getElementById('dias').innerHTML+=semana[i];
									document.getElementById('dias').innerHTML+=',';
							
									}
							
								}
							}

						</script>
						
					<?php
						
						$semana=[
							'lunes',
							'martes',
							'miercoles',
							'jueves',
							'viernes',
							'sabado',
							'domingo'
							];
						
							if(true){
							$x=$_GET['x'];	
							echo"</br>";
							echo"Los dias de la semana con ";
							echo $x;
							echo" en PHP son:";
							echo"</br>";
							
							
								for($i=0;$i<7;$i++){
									
									if (strlen(strstr($semana[$i],$x))>0) {
									echo $semana[$i];	
									echo ","; 
									}
								}
							}
						
							
						
					?>
					
					
					
					
					
					
					</center>
				</td>
			</tr>	
			 
		</table>
		</CENTER>
	</body>
</html>