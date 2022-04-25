<div class="titulo">Desafio Imagens</div>

<?php
if (!isset($_SESSION)) {
	session_start();
}
$uploadFolder = __DIR__ . "/../files/";
// $path_parts = pathinfo($uploadFolder);

if (is_dir($uploadFolder)) {
// 	echo "Imagens contidas na pasta: " . dir($uploadFolder)->path . '<br>';
// 	echo "Imagens contidas na pasta: " . $path_parts['dirname'] . '<br>';
	echo "Imagens contidas na pasta: " . realpath($uploadFolder) . '<br>';
	if ($handle = opendir('./files/')) {
		while (($entry = readdir($handle)) !== false) {
			if ($entry != "." && $entry != "..") {
				echo "* $entry" . '<br>';
			}
		}
		closedir($handle);
	}
}

if ($_FILES && $_FILES['file']) {
	$filesList = $_SESSION['files'] ?? []; // instancia um array vazio.
// 	$uploadFolder = __DIR__ . "/../files/";
	$filenameLocal = $_FILES['file']['name'];
	$filename = $_FILES['file']['tmp_name'];
	$destination = $uploadFolder . $filenameLocal;
	if (move_uploaded_file($filename, $destination)) {
		echo "<br>Imagem válida e enviada com sucesso!<br>";
		$filesList[] = $filenameLocal;
		$_SESSION['files'] = $filesList;
	} else {
		echo "<br>Falha ao enviar imagem.<br>";
	}
}

?>
<form action="#" method="post" enctype="multipart/form-data">
	<p>
		<label for="filename">Imagem para upload:</label>
		<input type="file" id="filename" name="file">
	</p>
	<button>Enviar imagem</button>
</form>

<?php if (isset($filesList)): ?>
<p>Imagens contidas na sessão:</p>
<ul>
	<?php foreach ($filesList as $file): ?>
		<?php if (stripos($file, '.jpg') > 0): ?>
			<li><img src="./files/<?= $file ?>" target="_blank" height="120"></li>
		<?php endif;?>
	<?php endforeach;?>
</ul>
<?php endif;?>
