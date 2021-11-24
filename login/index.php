<?php include 'include/header.php'; ?>

<body style="background-color:  rgb(108,70,117)" class="text-white">

	<br>
	<br>	
	<div id="formdiv">
		<div class="row d-flex justify-content-center border border-info formu" style="display:none">
			<form action="validacion.php" class="">
			  <label for="fname">Usuario:<span></span> </label><br>
			  <input type="text" id="fname" name="fname"   required><br>
			  <label for="lname">Contraseña:</label><br>
			  <input type="password" id="pass" name="pass" pattern="(?=.*\d)(?=.*[A-Z]).{4,}" required><br><br>
			  <label class="miro-radiobutton">
				<input type="radio" value="0" name="radio" checked>
    			<span>Escritor</span>
				</label>
				<label class="miro-radiobutton">
    			<input type="radio" value="1" name="radio">
				<span>Lector</span>
				</label>
			  <input type="submit" value="Entrar" class="nav-link btn btn-info " >

			</form> 
			<br>
		</div>
	</div>

	<div class="contenido">
		
	</div>
	
		
	
	

	<script src="login.js"></script>


<?php include 'include/footer.php'; ?>