<html>
	<head>
		<title>Cuadrados perfectos</TITLE>
	</head>
	<body>
	<?php
						if(!isset($_GET['x'])){
						$x=$_GET['x']=0;
						$y=$_GET['y']=0;}
						?>
		<CENTER>
		<table  width="80%" weight="100%">
			<tr>
				<td bgcolor="00FFE2" >
					<center>
					<br><img src="img/cuadrados.jpg" width="300"></br>
					</br>
					<h3>Almacena en un array la tabla de cuadrados perfectos y muestra el contenido del array</br></h3>						
					<form>
					numero desde el cual a empezar<input id="x" name="x" onkeyup="calcular()"value=<?=$_GET['x']?> />
					numero de cuadrados deseados<input id="y" name="y" onkeyup="calcular()"value=<?=$_GET['y']?> />
					<button onclick="generar()">GENERAR</button>
					
					</form>
					los valores de los cuadrados en JS son:
					<div id="valor"></div>
									
						<script>
						x=document.getElementById('x').value;
						y=document.getElementById('y').value;
						x=parseFloat(x);
						y=parseFloat(y);						
						cuadrados=[]
						if(true){
						for(i=0;i<y;i++){
							cuadrados[i]=(x+i)*(x+i);
							document.getElementById('valor').innerHTML+=cuadrados[i] ;
							if(i<y-1){
							document.getElementById('valor').innerHTML+=',';}
						}	
											
						}			
						</script>
						<?php
						$x=$_GET['x'];
						$y=$_GET['y'];						
						$compañeros =[];
						echo "los valores de los cuadrados en PHP son:";
						echo "</br>";			
						for($i=0;$i<$y;$i++){
							echo round ($x+$i)*($x+$i);
							if($i<$y-1){
							echo ",";}
						}
							
						?>
					
					
					
					
					
					
					
					</center>
				</td>
			</tr>	
			 
		</table>
		</CENTER>
	</body>
</html>