<?php
require_once(ROOT_PATH .'/Controllers/PlayerController.php');
$player = new PlayerController(); //クラスをnewする（インスタンス化）

$result = $player->view();

$u = $player->update();
var_dump($_POST);

  // $name=$_POST['name'];
  // $kana=$_POST['kana'];
  // $phone=$_POST['phone'];
  // $email=$_POST['email'];
  // $body=$_POST['body'];

// var_dump($result[0]['name']);👈これで解決！！！✨✨✨

// var_dump($result['name']);

// $id = $_POST['id'];
if ($_POST) {
include('val.php');
}

?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>編集
</title>
<link rel="stylesheet" type="text/css" href="../css/contact.css">
</head>
<body>
<a href="contact.php">メニューに戻る</a>
 <div class="contact-box">
   <h2 class="head">お問い合わせ</h2>

    <form method="post" action="edit.php?id=<?php echo $_GET['id']?>" id="form1">

    <h3>下記の項目をご記入の上送信ボタンを押してください</h3>
    <p>送信頂いた件につきましては、当社より折り返しご連絡を差し上げます。</p>
    <p>なお、ご連絡までに、お時間を頂く場合もございますので予めご了承ください。</p>
    <p><span class="kome">*</span>は必須項目となります。</p>
    <dl>
      <dt><label for="name">氏名<span class="kome">*</span></label></dt>
      <!-- エラー表示 -->
      <dd class="err">
        <?php //include("val.php"); ?>
       <?php

//        $dbh = dbConnect();
//        $id = $_GET['id'];
//        $sql = "SELECT * FROM contacts Where id = ".$id;
//        $stmt = $dbh->query($sql);
//        //③SQLの結果を受け取る
//        $result = $stmt->fetch(PDO::FETCH_ASSOC);
//          // var_dump($result);

// if ($_POST){
//     $dbh = dbConnect();
//        $update = "UPDATE contacts
//                     SET name   = '".$_POST['name']."',
//                         kana   = '".$_POST['kana']."',
//                         phone  = '".$_POST['phone']."',
//                         email  = '".$_POST['email']."',
//                         body   = '".$_POST['body']."' WHERE id = ".$id;
//        // var_dump($update);
//        $dbh->commit();
//        $stmt = $dbh->query($update);
//        $stmt->execute();
//        header( "Location: contact.php" ) ;
// }
       if ($_POST&&isset($err_msg[0])){
       echo $err_msg[0];
       }
       ?>
      </dd>
      <!-- ここまで -->
      <dd>
      <input type="text" name="name" id="name" placeholder="海野守" value="<?php echo $result[0]['name']; ?>">
      </dd>

      <dt><label for="kana">フリガナ<span class="kome">*</span></label></dt>

      <!-- エラー表示 -->
      <dd class="err">
       <?php
       if($_POST&&isset($err_msg[1])){
       echo $err_msg[
        1
        // 'kana'
      ];
       }
       ?>
      </dd>
      <!-- ここまで -->
      <dd><input type="text" name="kana" id="kana" placeholder="ウミノマモル" value="<?php echo $result[0]['kana']; ?>"></dd>

      <dt><label for="phone">電話番号</label></dt>
      <!-- エラー表示 -->
      <dd class="err">
       <?php
       if($_POST&&isset($err_msg[2])){
       echo $err_msg[
        2
        // 'phone'
      ];
       }
       ?>
      </dd>
      <!-- ここまで -->
      <dd><input type="text" name="phone" id="phone" placeholder="09012345678" value="<?php echo $result[0]['phone']; ?>"></dd>

      <dt><label for="email">メールアドレス<span class="kome">*</span></label></dt>
      <!-- エラー表示 -->
      <dd class="err">
       <?php
       if($_POST&&isset($err_msg[3])){
       echo $err_msg[
        3
        // 'email'
      ];
       }
       ?>
      </dd>
      <!-- ここまで -->
      <dd><input type="text" name="email" id="email" placeholder="umino@test.co.jp" value="<?php echo $result[0]['email']; ?>"></dd>
      <h3>お問い合わせ内容をご記入ください<span class="kome">*</span></h3>
        </dl>
        <dl>
          <!-- エラー表示 -->
          <dd class="err">
           <?php
           if($_POST&&isset($err_msg[4])){
           echo $err_msg[
            4
            // 'body'
          ];
           }
           ?>
          </dd>
          <!-- ここまで -->
          <dd><textarea name="body" id="body" ><?php echo $result[0]['body']; ?></textarea></dd>
          <dd id="submit1"><input class="submit" type="submit" value="更　新"></dd>

        </dl>

    </form>
 </div>


<a href="contact.php">メニューに戻る</a>
</body>
</html>