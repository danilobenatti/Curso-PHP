<div class="titulo">Download de Arquivos</div>

<?php
//session_start();

if ($_FILES && $_FILES['file']) {
	$filesList = $_SESSION['files'] ?? []; // instancia um array vazio.
	$uploadFolder = __DIR__ . "/../files/";
	$filenameLocal = $_FILES['file']['name'];
	$filename = $_FILES['file']['tmp_name'];
	$destination = $uploadFolder . $filenameLocal;
	if (move_uploaded_file($filename, $destination)) {
		echo "<br>Arquivo válido e enviado com sucesso!<br>";
		$filesList[] = $filenameLocal;
		$_SESSION['files'] = $filesList;
	} else {
		echo "<br>Falha ao enviar arquivo.<br>";
	}
}

?>
<form action="#" method="post" enctype="multipart/form-data">
	<p>
		<label for="filename">Arquivo para upload:</label>
		<input type="file" id="filename" name="file">
	</p>
	<button>Enviar o arquivo</button>
</form>

<ul>
<?php if (isset($filesList)): ?>
	<?php foreach ($filesList as $file): ?>
		<li>
			<a href="./files/<?= $file ?>" target="_blank"><?= $file ?></a>
		</li>
	<?php endforeach;?>
<?php endif;?>
</ul>
