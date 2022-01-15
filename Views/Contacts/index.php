<!--  <a href="index2.php">
        お問い合わせ</a></div>

position
スクロールイベント　ヘッダー。トップに戻る
display none
popup js fade in
 -->



<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>cafe sample site
  </title>
  <link rel="stylesheet" type="text/css" href="../css/index1.css">
</head>
<body>
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
     // ターゲット要素の外側をクリックした時の操作

    $('.overlay').animate({'opacity':0}, 0);
    $('.bg-black').animate({'opacity':0}, 0);
    $('.bg-black').css({'z-index':-1});

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

// スクロールイベント
  $(function() {
  var $win = $(window),
      $main = $('.location'),
      $nav = $('.header'),
      navHeight = $nav.outerHeight(),
      navPos = $nav.offset().top,
      fixedClass = '.motion';

  $win.on('load scroll', function() {
    var value = $(this).scrollTop();
    if ( value > navPos ) {
      $('.header').addClass('motion');//fixedというクラス名を付与
    }else{//それ以外は
      $('.header').removeClass('motion');//fixedというクラス名を除去
    }
  });
});
  



// これから？やる
  $(function(){
    $('.jumptop').click(function() {
    var position = $(".location").offset().top;
    $('body,html').animate({scrollTop:position}, 500, 'swing');
    return false;
    });
    });


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
<div class="alart">
 <a href="#">新型コロナウイルスに対する取り組みの最新情報をご案内</a>
</div>


<!-- ⭐️ -->

 <div id="bg">
    <!-- <img src="../img/cafe1.jpg" alt="Cafe"> -->
     <nav class="header">
       <div class="logo">
        <a href="index.php">
          <img src="../img/logo.png" alt="Cafe">
        </a>
      </div>
      <div class="center">
        <div class="hajimeni">
        <a href="location">
        はじめに</a></div>
        <div class="taiken">
        <a href="black">
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




     <h1 class="anatano">あなたの<br>好きな空間を作る。</h1>

 </div>




<!-- ⭐️ -->
<section class="location" id="loca">
<div class="cafecontainer1">
<div class="box">
  <div><img src="../img/cafe1.jpg" alt="東京"><div class="moji">東京<br>車で15分</div></div>
  
</div>

<div class="box">
  <div><img src="../img/cafe2.jpg" alt="東京"><div class="moji">神奈川<br>車で30分</div></div>
  
</div>

<div class="box">
  <div ><img src="../img/cafe3.jpg" alt="東京"><div class="moji">愛知<br>車で1時間</div></div>
  
</div>

<div class="box">
  <div ><img src="../img/cafe4.jpg" alt="東京"><div class="moji">京都<br>車で40分</div></div>
  
</div>

</div>

<div class="cafecontainer2">
 <div class="box">
  <div ><img src="../img/cafe5.jpg" alt="東京"><div class="moji">岡山<br>車で1.5時間</div></div>
  
 </div>

 <div class="box">
  <div ><img src="../img/cafe6.jpg" alt="東京"><div class="moji">鹿児島<br>車で50分</div></div>
  
 </div>

 <div class="box">
  <div ><img src="../img/cafe7.jpg" alt="東京"><div class="moji">沖縄<br>車で2時間</div></div>
  
 </div>

 <div class="box">
  <div ></div>
  <div><br></div>
 </div>

</div>
</section>

<!-- ⭐️ -->
<section class="white">
 <h2 class="h2">好きなロケーションを選ぼう</h2>
 <div class="container3">
  <div class="classic">
   <img src="../img/intro1.jpg" alt="classic">
   <div class="classicmoji">クラシック</div>
  </div>

  <div class="classic">
   <img src="../img/intro2.jpg" alt="classic">
   <div class="classicmoji">バー</div>
  </div>

  <div class="classic">
   <img src="../img/intro3.jpg" alt="classic">
   <div class="classicmoji">キャンプ</div>
  </div>
  <div class="classic">
   <img src="../img/intro4.jpg" alt="classic">
   <div class="classicmoji">リゾート</div>
  </div>
</div>

<div class="gotoeat">
 <div class="gotoeat-textbox">
  <h3 class="h3">Go To Eat</h3>
  <p>キャンペーンを利用して、全国で食事しよう。<br>
いつもと違う景色に囲まれてカラダもココロもリフレッシュ。</p>
 </div>
 <img src="../img/goto.jpg" alt="GoToEat">
</div>

</section>


<!-- ⭐️ -->
<section class="black" id="bl">
<h4 class="h4">カフェ作りを体験しよう</h4>
<h5 class="h5">お店のエキスパートが案内するユニークな体験（直接対面型またはオンライン）。
</h5>
<div class="container4">
  <div class="classic">
   <img src="../img/exp1.jpg" alt="classic">
   <div class="job-text">ジョブ体験</div>
   <div class="job-text2">カフェカウンターを体験しよう。</div>
  </div>

  <div class="classic">
   <img src="../img/exp2.jpg" alt="classic">
   <div class="job-text">レシピ体験</div>
   <div class="job-text2">美味しいレシピを考えてみよう。</div>
  </div>

  <div class="classic">
   <img src="../img/exp3.jpg" alt="classic">
   <div class="job-text">プロモーション体験</div>
   <div class="job-text2">お店の宣伝を手伝ってみよう。</div>
  </div>

</div>
</section>

<!-- ⭐️ -->
<section class="white2">
 <h2 class="h2">全国のホストに仲間入りしよう</h2>
 <div class="container5">
  <div class="img5">
   <img src="../img/host1.jpg" alt="classic">
   <div class="classicmoji">ビジネス</div>
  </div>

  <div class="img5">
   <img src="../img/host2.jpg" alt="classic">
   <div class="classicmoji">コミュニティ</div>
  </div>

  <div class="img5">
   <img src="../img/host3.jpg" alt="classic">
   <div class="classicmoji">食べ歩き</div>
  </div>

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
