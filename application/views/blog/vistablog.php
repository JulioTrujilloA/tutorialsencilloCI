<html>
<head>
<title><?php echo $titulo; ?></title>
</head>
<body>
	<h1><?php echo $encabezado; ?></h1>
	<h3>Mi lista de Tareas</h3>
	<ul>
		<?php foreach ($lista_de_tareas as $item):?>
			<li><?php echo $item; ?></li>
		<?php endforeach; ?>
		<?php echo anchor('blog/nueva', 'Vamos a nueva', array('title'=>'Las mejores noticias!')); ?>
	</ul>
</body>
</html>