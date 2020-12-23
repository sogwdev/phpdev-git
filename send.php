<!doctype = html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>

<?php
$my_nam = htmlspecialchars($_POST["n"],ENT_QUOTES);
$my_mes = htmlspecialchars($_POST["m"],ENT_QUOTES);
$db = new PDO('mysql:host=us-cdbr-east-02.cleardb.com;port=3306;dbname=heroku_ef5f71273fe5d40;charset=utf8','b712f8e8641bf4','466f991d');
$db->query("insert into admin (id,name,msg,dt) values (NULL,'$my_nam','$my_mes',NOW())");
print "成功";

print "<p><a href = 'home.php'>一覧へ</a></p>";
?>

</body>
</html>
