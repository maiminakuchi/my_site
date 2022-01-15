


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
        'z-index'       : '10',
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






// これから？やる
  $(function(){
    $('.jumptop').click(function() {
    var position = $(".location").offset().top;
    $('body,html').animate({scrollTop:position}, 500, 'swing');
    return false;
    });
    });
   </script>

<!-- ⭐️ -->
<div class="alart">
 <a href="#">新型コロナウイルスに対する取り組みの最新情報をご案内</a>
</div>


<!-- ⭐️ -->
     <nav class="header">
       <div class="logo">
        <a href="index.php">
          <img src="../img/logo.png" alt="Cafe">
        </a>
      </div>
      <div class="center">
        <div class="hajimeni">
        <a href="index.php#loca">
        はじめに</a></div>
        <div class="taiken">
        <a href="index.php#bl">
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




