
<?php
  $name=$_POST['name'];
  $kana=$_POST['kana'];
  $phone=$_POST['phone'];
  $email=$_POST['email'];
  $body=$_POST['body'];
  //定義
  $name=htmlspecialchars($name);
  $kana=htmlspecialchars($kana);
  $phone=htmlspecialchars($phone);
  $email=htmlspecialchars($email);
  $body=htmlspecialchars($body);
  //sanitize


  //$err_msg=array();
  $err_msg=[];
  //エラーの格納場所。初期化

  if(($name == '')||(mb_strlen($name)>10)){
  $err_msg[] = '氏名は必須項目です。10文字以内でご入力ください。';
  }else{
  $err_msg[]= '';
  }
//0

  if(($kana == '')||(mb_strlen($kana)>10)){
  $err_msg[] = 'フリガナは必須項目です。10文字以内でご入力ください。';
  }else{
  $err_msg[] = '';
  }
//1

  if(($phone !== '')&& !preg_match('/^[0-9]$/',$phone)){
  $err_msg[] = '電話番号は0-9の数字のみでご入力ください。';
  }else{
  $err_msg[] = '';
  }
//2

  if(($email == '')&& !preg_match('/^[a-zA-Z0-9_.+-]+[@][a-zA-Z0-9.-]+$/',$email)){
  $err_msg[] =
  'メールアドレスは必須です。メールアドレスは正しくご入力ください。';
  }else{
  $err_msg[]='';
  }
//3

  if($body == '' ){
  $err_msg[] = 'お問い合わせ内容は必須入力です。';
  }else{
  $err_msg[]='';
  }
//4


?>

<?php

  //$err_msg = [];
  //エラーの格納場所。初期化

  //if($name == '' ){
  // $err_msg['name'] = '氏名は必須項目です。';
  // }elseif(mb_strlen($name)>10){
  // $err_msg['name'] = '氏名は10文字以内です。';
  // }else{
  // $err_msg['name']='';
  // }


  // if($kana == '' ) {
  // $err_msg['kana'] = 'フリガナは必須項目です。';
  // }elseif(mb_strlen($kana)>10){
  // $err_msg['kana'] = 'フリガナは10文字以内です。';
  // }else{
  // $err_msg['kana']='';
  // }


  // if($phone = !'/^[0-9０-９]$/'){
  // $err_msg['phone'] = '電話番号は0-9の数字のみでご入力ください。';
  // }else{
  // $err_msg['phone']='';
  // }


  // if($email == '' ){
  // $err_msg['email'] = 'メールアドレスは必須です。';
  // }elseif($email == !'/^[a-zA-Z0-9_.+-]+[@][a-zA-Z0-9.-]+$/'){
  // = 'メールアドレスは正しくご入力ください。';
  // }else{
  // $err_msg['email']='';
  // }


  // if($body == '' ){
  // $err_msg['body'] = 'お問い合わせ内容は必須入力です。';
  // }else{
  // $err_msg['body']='';
  // }

?>

