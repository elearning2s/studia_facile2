<?php
	include('php/connessione_db.php');
	$elenca_materie = mysql_query("SELECT * FROM materie");
?>
<!DOCTYPE html> 
<html>
<head>
<meta charset="utf-8">
<title>Blog-Code</title>
<link href="jquery-mobile/jquery.mobile-1.0.min.css" rel="stylesheet" type="text/css"/>
<script src="jquery-mobile/jquery-1.6.4.min.js" type="text/javascript"></script>
<script src="jquery-mobile/jquery.mobile-1.0.min.js" type="text/javascript"></script>
</head> 
<body> 

<div data-role="page" id="page" data-theme="e">
	<div data-role="header">
		<h1>Materie <br /> in archivio</h1>
	</div>
	<div data-role="content">	
		<ul data-role="listview">
        <?php
			while($nome_materia = mysql_fetch_array($elenca_materie))
			{
		?>
			<li><a href="dettagli_materia.php?codS=<?php echo $nome_materia['id_materia']; ?>" data-ajax="false"><?php echo $nome_materia['nome_materia']; ?></a></li>
            <?php } ?>
		</ul>		
	</div>
	<div data-role="footer">
		<h4>www.test test</h4>
	</div>
</div>
</body>
</html>
