<!--  <a href="index2.php">
        お問い合わせ</a></div>

position
スクロールイベントヘッダー。トップに戻る
display none
popup js fade in
 -->



<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>form
  </title>
  <link rel="stylesheet" type="text/css" href="../css/complete.css">
</head>
<body>

  <?php
  //notshow.phpへの直リンク禁止
  if (empty($_SERVER["HTTP_REFERER"])) {
  //リダイレクト
  header('Location:index.php');
  }
  ?>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
   <script>
    $(function(){
    $('.hajimeni').click(function() {
    var position = $(".location").offset().top;
    $('body,html').animate({scrollTop:position}, 500, 'swing');
    return false;
    });
    });


    $(function(){
    $('.taiken').click(function() {
    var position = $(".black").offset().top;
    $('body,html').animate({scrollTop:position}, 1000, 'swing');
    return false;
    });
    });




    $(function(){
    $('.signin2').on("click",function() {
    $('.overlay').css({
    	'opacity'         :'1',
    	'margin-top'      :'0px',
    	'transition'      :'all 1s ease',
    	'transition-delay': '0s',
        });
    $('.bg-black').css({
    	'background-color': 'rgba(0, 0, 0, 0.5)',
        'opacity'         :'1',
    	  'width'         : '100%',
        'height'        : '100%',
        'z-index'       : '998',
        'top'           : '0',
        'left'          : '0',
        'position'      : 'fixed'
    });
    });
    });

    $(document).on('click',function(e) {
   if(!$(e.target).closest('.signin2').length &&
    !$(e.target).closest('.overlay').length) {
     // ターゲット要素の外側をクリックした時の操作サインインの箱の中身以外、かつ、ポップアップウィンドウの箱の外側

    $('.overlay').animate({'opacity':0}, 0);
    $('.bg-black').animate({'opacity':0}, 0);
    $('.bg-black').css({'z-index':-1});
// pos:unsetでもいい
   }
});






    // $('.bg-black').on('click touchend', function(event) {
    // // 表示したポップアップ以外の部分をクリックしたとき
    // if (!$(event.target).closest('.signin2').length) {
    // // $('.overlay').animate({'opacity':0},1000);
    // // $('.bg-black').animate({'opacity':0},1000);
    // }

    // });


  //   jQuery( window ).on( 'scroll', function(){

  //   if ( 65 < jQuery( this ).scrollTop() ) {
  //   jQuery( '#nav__top' ).addClass( '.header2' );
  //   }
  //   else{
  //   jQuery( '#nav__top' ).removeClass( '.header2' );
  //   }
  //   });

  //   $(function(){
  //   $('a[href^="#"]').click(function(){
  //     let speed = 500;
  //     let href= $(this).attr("href");
  //     let target = $(href == "#" || href == "" ? 'html' : href);
  //     let position = target.offset().top;
  //     $("html, body").animate({scrollTop:position}, speed, "swing");
  //     return false;
  //   });
  // });








// //スクロールすると上部に固定させるための設定を関数でまとめる
// function FixedAnime() {
//   var headerH = $('.alart').outerHeight(true);
//   var value = $(this).scrollTop();

//   if (value >= headerH){//headerの高さ以上になったら
//       $('.header').addClass('.header2');//fixedというクラス名を付与
//     }else{//それ以外は
//       $('.header').removeClass('.header2');//fixedというクラス名を除去
//     }
// }

// //ナビゲーションをクリックした際のスムーススクロール
// $('#g-navi a').click(function () {
//   var elmHash = $(this).attr('href'); //hrefの内容を取得
//   var pos = Math.round($(elmHash).offset().top-120);  //headerの高さを引く
//   $('body,html').animate({scrollTop: pos}, 500);//取得した位置にスクロール※数値が大きいほどゆっくりスクロール
//   return false;//リンクの無効化
// });

   </script>


<!-- ⭐️ -->

     <nav class="header">
       <div class="logo">
        <a href="index.php">
          <img src="../img/logo.png" alt="Cafe">
        </a>
      </div>
      <div class="center">
        <div class="hajimeni">
        <a href="index.php">
        はじめに</a></div>
        <div class="taiken">
        <a href="index.php">
        体験</a></div>
        <div class="otoi">
        <a href="contact.php">
        お問い合わせ</a></div>
      </div>
      <div class="signin">
        <div class="signin2">
        <p>サインイン</p>
        </div>
      </div>
     </nav>





<!-- 🍎ログイン🍎 -->
<div class="bg-black">
     <div class="overlay">
     <div class="login">ログイン</div>
     <div class="up">
       <input type="text" name="e-mail" placeholder="メールアドレス">
       <input type="text" name="password" placeholder="パスワード">
       <button type='submit' class="submit">送信</button>
     </div>
     <dl class="down">
       <dd><button><img src="../img/twitter.png"></button></dd>
       <dd><button><img src="../img/fb.png"></button></dd>
       <dd><button><img src="../img/google.png"></button></dd>
       <dd><button><img src="../img/apple.png"></button></dd>
     </dl>
     </div>
</div>
<!-- 🍎ログイン🍎 -->

<!-- ⭐️ -->
<section class="section2">

     <div class="contact-box">
     <h2 class="head">お問い合わせ</h2>

        <p>お問い合わせ頂きありがとうございます。</p>
        <p>送信頂いた件につきましては、当社より折り返しご連絡を差し上げます。</p>
        <p class="pppp">なお、ご連絡までに、お時間を頂く場合もございますので予めご了承ください。</p>

        <a href="index.php">トップへ戻る</a>


    <?php
    $name=$_POST['name'];
    $kana=$_POST['kana'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];
    $body=$_POST['body'];
    var_dump($name);
    var_dump($kana);
    var_dump($phone);
    var_dump($email);
    var_dump($body);
    ?>
     <?php
      $dsn='mysql:dbname=cafe;host=localhost;charset=utf8';
      $user='cafe';
      $pass='cafe';
      try {
      $dbh = new PDO($dsn,$user,$pass);
      $dbh->beginTransaction();
      echo '接続成功';

// [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,]

        $sql = "INSERT INTO contacts (name,kana,phone,email,body) VALUES
        ('".$name."','".$kana."','".$phone."','".$email."','".$body."')";
        $dbh->commit();

        $stmt = $dbh->query($sql);
        //↑sqlに変換。結果を受け取る。
        $stmt->execute();
        //SQL文を実行
        var_dump($sql);
        $dbh = null;
        //接続解除
        } catch (Exception $e) {
        $dbh->rollback();
        echo '接続失敗';
        }


      // echo '接続失敗'.$e->getMessage();
      // exit();
      ?>

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
