<?php
function dbConnect(){
      $dsn='mysql:dbname=cafe;host=localhost;charset=utf8';
      $user='cafe';
      $pass='cafe';

      try {
      $dbh = new PDO($dsn,$user,$pass,[PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,]);
      echo '接続成功';

       } catch (PDOException $e) {
       echo '接続失敗'.$e->getMessage();
       exit();
       };
       return $dbh;
      }


?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>
</title>
</head>
<body>

<head>
    記事検索
</head>
<br/><br/>
<section>
 <form method="post" action="kensaku.php">
 参照したいご意見コードは？<br/>
 <input type="text" name="code" style="width: 100px"><br/>
  <br/>
 <input type="submit" value="検索">
 </form>
</section>
<a href="menu.html">メニューに戻る</a>
</body>
</html>