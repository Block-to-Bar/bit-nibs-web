<div id="registro"  class="seccion confoto">

<!-- cerro inner -->
<div class="inner" id="registroinner">

<h1>joint à notre projet</h1>

<p>Il progetto Bit&amp;Nibs cerca investitori e colaboratori il quali vogliano 
protagonizare insieme a noi la creazione di una startup 100% basata su il potere 
de la blockchain y di i contrati inteligentes. ¡Seamos todos juntos la referencia 
del nuevo mundo que está por nacer!</p>


<form name="FORM" method="POST" action="">
<label>
<span>nom :</span>
<input type="text" name="NOM">
</label>

<label>
<span>e-mail :</span>
<input type="text" name="EMAIL">
</label>

<div id="separador" style="height:20px"></div>
<center><button type="submit" name="submit" class="boton icono enviar_fr"></button></center>
</form>

<?php

if(isset($_POST['submit'])){
	require("registr_fr.php");
}

?>


</div>
<!-- cerro inner -->


</div>

