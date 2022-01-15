<?php
// session_start();

// $_SESSION['name']=$_POST;
// $_SESSION['kana']=$_POST;
// $_SESSION['phone']=$_POST;
// $_SESSION['mail']=$_POST;
// $_SESSION['body']=$_POST;

require_once(ROOT_PATH .'Controllers/PlayerController.php');
$player = new PlayerController(); //クラスをnewする（インスタンス化）
$params = $player->index(); //クラスの中のindexメソッドを呼び出す（オブジェクトの生成）

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>お問い合わせ
  </title>
  <link rel="stylesheet" type="text/css" href="../css/contact.css">
</head>
<body>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>


<?php include("header.php"); ?>
<?php //include("val.php"); ?>
<?php
// $name=$_POST['name'];
// $kana=$_POST['kana'];
// $phone=$_POST['phone'];
// $email=$_POST['email'];
// $body=$_POST['body'];
?>

<!-- ⭐️ -->

<section class="section2">
 <div class="contact-box">
   <h2 class="head">お問い合わせ</h2>
    <form method="post" action="confirm2.php" id="form1">
    <h3>下記の項目をご記入の上送信ボタンを押してください</h3>
    <p>送信頂いた件につきましては、当社より折り返しご連絡を差し上げます。</p>
    <p>なお、ご連絡までに、お時間を頂く場合もございますので予めご了承ください。</p>
    <p><span class="kome">*</span>は必須項目となります。</p>
    <dl>
      <dt><label for="name">氏名<span class="kome">*</span></label></dt>
      <!-- エラー表示 -->
      <dd class="err">
       <?php
       if ($_POST){
       echo $err_msg[
        0
        // 'name'
      ];
       }
       ?>
      </dd>
      <!-- ここまで -->
      <dd>
      <input type="text" name="name" id="name" placeholder="海野守" value="<?php if($_POST){echo $name;} ?>">
      </dd>

      <dt><label for="kana">フリガナ<span class="kome">*</span></label></dt>

      <!-- エラー表示 -->
      <dd class="err">
       <?php
       if($_POST){
       echo $err_msg[
        1
        // 'kana'
      ];
       }
       ?>
      </dd>
      <!-- ここまで -->
      <dd><input type="text" name="kana" id="kana" placeholder="ウミノマモル" value="<?php if($_POST){echo $kana;} ?>"></dd>

      <dt><label for="phone">電話番号</label></dt>
      <!-- エラー表示 -->
      <dd class="err">
       <?php
       if($_POST){
       echo $err_msg[
        2
        // 'phone'
      ];
       }
       ?>
      </dd>
      <!-- ここまで -->
      <dd><input type="text" name="phone" id="phone" placeholder="09012345678" value="<?php if($_POST){echo $phone;} ?>"></dd>

      <dt><label for="email">メールアドレス<span class="kome">*</span></label></dt>
      <!-- エラー表示 -->
      <dd class="err">
       <?php
       if($_POST){
       echo $err_msg[
        3
        // 'email'
      ];
       }
       ?>
      </dd>
      <!-- ここまで -->
      <dd><input type="text" name="email" id="email" placeholder="umino@test.co.jp" value="<?php if($_POST){echo $email;} ?>"></dd>
      <h3>お問い合わせ内容をご記入ください<span class="kome">*</span></h3>
        </dl>
        <dl>
          <!-- エラー表示 -->
          <dd class="err">
           <?php
           if($_POST){
           echo $err_msg[
            4
            // 'body'
          ];
           }
           ?>
          </dd>
          <!-- ここまで -->
          <dd><textarea name="body" id="body" value="<?php if($_POST){echo $body;} ?>"></textarea></dd>
          <dd id="submit1"><input class="submit" type="submit" value="送　信"></dd>
        </dl>

    </form>
 </div>

<?php
//       $dsn='mysql:dbname=cafe;host=localhost;charset=utf8';
//       $user='cafe';
//       $pass='cafe';
//       try {
//       $dbh = new PDO($dsn,$user,$pass);
//       $dbh->query('SET NAMES UTF-8');

//       echo '接続成功';

// // [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,]

//         $sql = 'SELECT*FROM contacts WHERE 1';
//         $stmt = $dbh->prepare($sql);
//         $stmt->execute();

//         while(1)
//         {
//           $rec = $stmt->fetch(PDO::FETCH_ASSOC);
//           if($rec == false)
//           {
//             break;
//           }
//           echo $rec['id'];
//           echo $rec['name'];
//           echo $rec['kana'];
//           echo $rec['phone'];
//           echo $rec['email'];
//           echo $rec['body'];
//           echo '<br/>';
//           }

//           $dbh = null;
//           //接続解除
//         } catch (Exception $e) {

//         echo '接続失敗';
//         exit();
//         }


      // echo '接続失敗'.$e->getMessage();
      // exit();
?>
<?php

//関数一つに一つの機能を持たせる
//①DB接続
//②データを取得
//③カテゴリ名を表示←今回なし

//①DB接続
//引数：なし
//返り値：接続結果を返す⇨return $dbh;
// function dbConnect(){
//       $dsn='mysql:dbname=cafe;host=localhost;charset=utf8';
//       $user='cafe';
//       $pass='cafe';

//       try {
//       $dbh = new PDO($dsn,$user,$pass,[PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,]);
//       echo '接続成功';

//        } catch (PDOException $e) {
//        echo '接続失敗'.$e->getMessage();
//        exit();
//        };
//        return $dbh;
//       }

// //②データを取得
// //引数：なし
// //返り値：取得したデータ
//     function getAllBlog(){
//      $dbh = dbConnect();
//      //①SQLの準備
//      $sql = 'SELECT * FROM contacts';
//      //②SQLの実行。SELECTはデータを選択している。
//      $stmt = $dbh->query($sql);
//      //③SQLの結果を受け取る
//      $result = $stmt->fetchall(PDO::FETCH_ASSOC);
//      // var_dump($result);
//      return $result;
//      $dbh = null;
//      }

// //②-2取得したデータを表示
// $blogData = getAllBlog();

//③カテゴリ名を表示
//引数：数字
//返り値：カテゴリの文字列
?>
</section>
<section class="db">
<h2 style="margin: 30px;">お問い合わせ一覧</h2>
    <table class="db_table">
        <tr>
            <th>No</th>
            <th>氏名</th>
            <th>フリガナ</th>
            <th>電話番号</th>
            <th>メールアドレス</th>
            <th>お問い合わせ内容</th>
            <th>タイムスタンプ</th>
            <th>編集</th>
            <th>削除</th>
        </tr>
        <?php foreach ($params['players'] as $player): ?>
        <tr>
            <td><?php echo $player['id']; ?></td>
            <td><?php echo $player['name']; ?></td>
            <td><?php echo $player['kana']; ?></td>
            <td><?php echo $player['phone']; ?></td>
            <td><?php echo $player['email']; ?></td>
            <td><?php echo nl2br($player['body']); ?></td>
            <td><?php echo $player['created_at']; ?></td>
              <!-- 編集・削除リンクの追加
              ①一覧画面からデータのidを送る
              ②GETリクエストでidをURLにつけて送る -->
              <!-- ?id=でidの値を受け取る(クエリストリング) -->
            <td><a href="edit.php?id=<?php echo $player['id']; ?>">編集</a></td>
            <td>
                    <!-- <input type="submit" value="削除" id=<?php echo $column['id']; ?>> -->
                <button class="delete_btn"><a style="cursor: pointer;" href="delete.php?id=<?php echo $player['id']; ?>">削除</a></button>
            </td>
        </tr>
    <?php endforeach;
    $dbh = null;
    ?>
    </section>
    <style type="text/css">
    th,td {
    border: solid 1px;
    padding: 3px;           /* 枠線指定 */
    }
    table {
    border-collapse:  collapse;
    margin: 30px;     /* セルの線を重ねる */
    }
    </style>
    </table>
    <script>
      //confirmメソッドで選択処理をする
      $('.delete_btn').on("click", function(){
        var select = confirm("削除しますか?");
        return select;
      });
    </script>

<!-- <body>
<form name="myform">
    <input type="text" value="名前">
    <input name="btn" type="submit" value="送信">
</form>

<script>
document.myform.btn.addEventListener('click', function() {
    var result = window.confirm('送信しても宜しいですか？');

    if( result ) {

        //「true」の処理

    }
    else {

        //「false」の処理

    }
})
</script>
</body> -->

<!-- jqueryバリデーション -->
    <script>
      $('#submit1').click(function(){
        var name = $('#name').val(); //value()を使ってvalue値(value=""の部分)を取得
        var kana = $('#kana').val();
        var phone = $('#phone').val();
        var email = $('#email').val();
        var body = $('#body').val();
        var err = 0;
        let msg = [];
        //氏名チェック
        if (name == "" || name.length > 10) {
          err += 1;
          msg.push('氏名は必須項目です。10文字以内でご入力ください。\n');
        }
        // フリガナチェック
        if (kana == "" || kana.length > 10) {
          err += 1;
          msg.push('フリガナは必須項目です。10文字以内でご入力ください。\n');
        }
        // 電話番号チェック
        if ( phone !== "" && !phone.match(/^[0-9]+$/)) {
          err += 1;
          msg.push('電話番号は0-9の数字のみでご入力ください。\n');
        }
        // メールアドレスチェック
        // 先頭の1文字/＠まで/＠/ドメインまで/ドメイン
        if (!email.match(/^[A-Za-z0-9]{1}[A-Za-z0-9_.-]*@{1}[A-Za-z0-9_.-]{1,}\.[A-Za-z0-9]{1,}$/)||email=="") {
          err += 1;
          msg.push(
  'メールアドレスは必須です。メールアドレスは正しくご入力ください。\n');
        }
        //お問い合わせ内容チェック
        if (body == "") {
          err += 1;
          msg.push('お問い合わせ内容は必須入力です。\n');
        }
        // チェックに引っかかっていたら遷移しない
        if (err > 0){
          $('form').submit(function() {
          $(this).attr('action', 'contact.php');
          alert(msg);
          });
        }
        //ブラウザ側が標準で用意しているイベントを中断できる
        // if (err > 0){
        //   return false;
        // }
      });
    </script>




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
