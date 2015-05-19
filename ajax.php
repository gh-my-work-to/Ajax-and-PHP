<?php
echo <<< EOF
<!doctype html>
<html lang="ja">
<head>
	<meta charset="UTF-8" />
	<title>ajax</title>
	<script type="text/javascript" src="../../jquery-2.1.3.min.js"></script>
</head>
<body>
	name
	<input type="text" id="name" />
	<br />
	memo
	<input type="text" id="memo" />
	<br />
	<button id="call">call</button>
	<script type="text/javascript" src="./ajax.js"></script>
</body>
</html>
EOF;
?>
