<html>
	<head>
		<title>dias de la semana con R</TITLE>
	</head>
	<body>
	<?php
						if(!isset($_GET['x']))
						$x=$_GET['x']=r;
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
					<button onclick="generar()">BUSCAR</button>
					<input id="x" name="x" onkeyup="buscador()" value=<?=$_GET['x']?> />
					
					</form>
					los dias de la semana con <div id="x"></div> en JS son:
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
						
					
					
					
					
					
					
					
					</center>
				</td>
			</tr>	
			 
		</table>
		</CENTER>
	</body>
</html>