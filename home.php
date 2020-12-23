<!doctype = html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>
<form action ="send.php" method="post">
名前
<div><input type="text" name = "n"></div>
メッセージ
<div><textarea name = "m"></textarea></div>
<input type = "submit" value = "送信">
</form>

<?php
$db = new PDO('mysql:host=us-cdbr-east-02.cleardb.com;port=3306;dbname=heroku_ef5f71273fe5d40;charset=utf8','b712f8e8641bf4','466f991d');
$ps = $db->query("SELECT * FROM admin");
while ($r = $ps->fetch()){
print "{$r['id']} {$r['name']} {$r['msg']} {$r['dt']}<hr>";}
?>
</body>
</html>
