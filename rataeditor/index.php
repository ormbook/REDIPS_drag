<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Rataeditor test</title>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="inc/vendor/jquery-2.1.0.min.js">\x3C/script>')</script>
<script src="inc/jquery.rataeditor.js"></script>
<link rel="stylesheet" type="text/css" href="inc/jquery.rataeditor.css">
<script>
$(document).ready(function(){
	// Every .rata textarea is converted
	$('.rata').rataeditor();
});
</script>
</head>
<body>
<textarea id="editorIdRequired" class="rata"><H1>Hello world</H1><p>This is a test</p></textarea>
</body>
</html>
