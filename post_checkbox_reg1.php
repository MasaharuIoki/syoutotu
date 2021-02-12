<!-- サンプルコード -->
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>post_checkbox_reg1</title>
</head>
<body>
 
<h1>POST送信</h1>
<form method="post" action="post_checkbox_reg2.php">
趣味：<br/>
<input type="checkbox" name="hoby[]" value="musicappreciation">音楽鑑賞<br/>
<input type="checkbox" name="hoby[]" value="moviegoing">映画鑑賞<br/>
<input type="checkbox" name="hoby[]" value="reading">読書<br/>
<input type="checkbox" name="hoby[]" value="fishing">釣り<br/>
<input type="submit" value="送信">
</form>
 
</body>
</html>