<div class="titulo">Upload de Arquivos</div>

<?php
print_r($_FILES);
echo '<br>';
print_r($_POST);
echo '<br>';
print_r($_GET);
echo '<hr>';

if ($_FILES && $_FILES['arquivo']) {
	$uploadFolder = "api/upload/";
	$filenameLocal = $_FILES['arquivo']['name'];
	$destination = $uploadFolder . $filenameLocal;
	$filename = $_FILES['arquivo']['tmp_name'];
	
	if (move_uploaded_file($filename, $destination)) {
		echo "<br>Arquivo válido e enviado com sucesso!<br>";
	} else {
		echo "<br>Falha ao enviar arquivo.<br>";
	}
	
}

?>
<form action="#" method="post" enctype="multipart/form-data">
	<p>
		<label for="filename">Arquivo para upload:</label>
		<input type="file" id="filename" name="arquivo">
	</p>
	<button>Enviar o arquivo</button>
</form>
