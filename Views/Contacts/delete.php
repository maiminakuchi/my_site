<?php

require_once(ROOT_PATH .'/Controllers/PlayerController.php');
$player = new PlayerController(); //クラスをnewする（インスタンス化）

$sakujo = $player->delete();

?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>削除しました
</title>
</head>
<body>
削除しました
<br/><br/>

<?php

       header( "Location: contact.php" );

?>

<a href="contact.php">トップ画面に戻る</a>
</body>
</html>