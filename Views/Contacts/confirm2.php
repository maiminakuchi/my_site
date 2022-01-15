<?php
// session_start();
// $_SESSION['name']=$_POST;
// $_SESSION['kana']=$_POST;
// $_SESSION['phone']=$_POST;
// $_SESSION['mail']=$_POST;
// $_SESSION['body']=$_POST;
?>
<?php
require_once(ROOT_PATH .'/Controllers/PlayerController.php');
$player = new PlayerController(); //クラスをnewする（インスタンス化）
$name=$_POST['name'];
$kana=$_POST['kana'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$body=$_POST['body'];
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>確認画面
  </title>
  <link rel="stylesheet" type="text/css" href="../css/comfirm2.css">
</head>
<body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  <?php
   //直リンク禁止
   if (empty($_SERVER["HTTP_REFERER"])) {
   //リダイレクト
   header('Location:index.php');
   }
  ?>
  <?php
  include('./header.php');
  include('./val.php');
  ?>


<!-- ⭐️ -->


<section class="section2">


     <div class="contact-box">
     <h2 class="head">お問い合わせ</h2>
      <form method="post" action="complete.php">


        <div class="ppp">
        <p>下記の項目をご記入の上送信ボタンを押してください</p>
        <p>内容を訂正する場合は戻るを押してください。</p>
        </div>

        <dl>
          <dt>氏名</dt>
          <dd>
            <input type="hidden" name="name" value="<?= $_POST['name'] ?>">
          <?php echo $name; ?>
          </dd>
          <!-- <input type="text" name="name" id="name" placeholder="海野守"> -->
          <dt>フリガナ</dt>
          <dd>
             <input type="hidden" name="kana" value="<?= $_POST['kana'] ?>">
          <?php echo $kana; ?>
          </dd>

          <dt>電話番号</dt>
          <dd>
            <input type="hidden" name="phone" value="<?= $_POST['phone'] ?>">
          <?php echo $phone; ?>
          </dd>

          <dt>メールアドレス</dt>
          <dd>
            <input type="hidden" name="email" value="<?= $_POST['email'] ?>">
          <?php echo $email ?>
          </dd>


          <dt>お問い合わせ内容</dt>
          <dd class="new-line">
         <input type="hidden" name="body" value="<?= $_POST['body'] ?>">
          <?php echo nl2br($body); ?>
          </dd>



          <?php


          if (($name==''||$kana==''||$email==''||$body=='')){
          print
          '
          <input class="back" type="button" onclick="history.back()" value="戻る">
          <button class="submit3" disabled>送信</button>
          ';
          }else{

          print'<dd>
          <input class="back" type="button" onclick="history.back()" value="戻る">
          <input class="submit2" type="submit" value="送信">
          </dd>';
          }
          var_dump($name);
          var_dump($kana);
          var_dump($phone);
          var_dump($email);
          var_dump($body);
          ?>
          <!-- <dd><input class="submit2" type="submit" value="送信">
          <input class="back" type="button" onclick="history.back()" value="戻る">
          </dd> -->


        </dl>

     </form>
     </div>

</section>



<!-- ⭐️ -->
<section class="hooter">
 <div class="outer">
  <div class="info">
   <div class="inner">
   	<h2>企業情報</h2>
   	 <ul>
      <li><a href="#">ご利用方法</a></li>
      <li><a href="#">ニュースルーム</a></li>
      <li><a href="#">株主・投資家のみなさまへ</a></li>
      <li><a href="#">XXXXXXXXXXXXXXX</a></li>
      <li><a href="#">XXXXXXXXXXXXXXX</a></li>
      <li><a href="#">XXXXXXXXXXXXXXX</a></li>
      <li><a href="#">採用情報</a></li>
     </ul>
    </div>
    <div class="inner">
      	<h2>コミュニティ</h2>
   	 <ul>
      <li><a href="#">ダイバーシティ</a></li>
      <li><a href="#">アクセシビリティ対応</a></li>
      <li><a href="#">お友達を招待</a></li>
      <li><a href="#">XXXXXXXXXXXXXXX</a></li>
      <li><a href="#">XXXXXXXXXXXXXXX</a></li>
     </ul>
     </div>
     <div class="inner">
      	<h2>ホスト</h2>
   	 <ul>
      <li><a href="#">XXXXXXXXXXXXXXX</a></li>
      <li><a href="#">XXXXXXXXXXXXXXX</a></li>
      <li><a href="#">XXXXXXXXXXXXXXX</a></li>
     </ul>
     </div>
     <div class="inner">
      	<h2>サポート</h2>
   	 <ul>
      <li><a href="#">新型コロナウイルスに対する取り組み</a></li>
      <li><a href="#">ヘルプセンター</a></li>
      <li><a href="#">キャンセルオプション</a></li>
      <li><a href="#">コミュニティサポート</a></li>
      <li><a href="#">信頼＆安全</a></li>
     </ul>
   </div>
  </div>
  <div class="policy">
  	<p>このサイトの素材は全て著作権フリーのものを使用しています。</p>
  	<div class="hooterlink">
  	 <a href="">プライバシーポリシー  </a>
  	 <a href="">利用規約  </a>
  	 <a href="">サイトマップ  </a>
  	 <a href="">企業情報  </a>
  	</div>
  	<div class="copy">© 2021- LiNew, Inc. All rights reserved.</div>
  </div>
 </div>
</section>


<p id="page-top"><a href="#wrap">Jump To Top</a></p>
<script>
$(function() {
    var showFlag = false;
    var topBtn = $('#page-top');
    topBtn.css('bottom', '-100px');
    var showFlag = false;
    //スクロールが100に達したらボタン表示
    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            if (showFlag == false) {
                showFlag = true;
                topBtn.stop().animate({'bottom' : '0px'}, 200);
            }
        } else {
            if (showFlag) {
                showFlag = false;
                topBtn.stop().animate({'bottom' : '-100px'}, 200);
            }
        }
    });
    //スクロールしてトップ
    topBtn.click(function () {
        $('body,html').animate({
            scrollTop: 0
        }, 500);
        return false;
    });
});
</script>
</body>
</html>
