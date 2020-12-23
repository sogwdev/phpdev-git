<!doctype = html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>
<?php

$user=htmlspecialchars($_POST["u"],ENT_QUOTES);
<h2>$userの投稿</h2>

$db = new PDO('mysql:host=us-cdbr-east-02.cleardb.com;port=3306;dbname=heroku_ef5f71273fe5d40;charset=utf8','b712f8e8641bf4','466f991d');
$ps = $db->query("SELECT * FROM admin where name=$user");
while ($r = $ps->fetch()){
print "{$r['name']} {$r['msg']} {$r['dt']}<hr>";}
?>
</body>
</html>
