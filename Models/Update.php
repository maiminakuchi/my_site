<?php
// define('ROOT_PATH', str_replace('public', '', $_SERVER["DOCUMENT_ROOT"]));

require_once(ROOT_PATH .'/Models/Db.php');

class UD extends Db {   //๐ใกใฝใใ

  public function update (){
       $id = $_GET['id'];
       $sql = "SELECT * FROM contacts Where id = ".$id;
       $stmt = $dbh->query($sql);
       //โขSQLใฎ็ตๆใๅใๅใ
       $result = $stmt->fetch(PDO::FETCH_ASSOC);
         // var_dump($result);

      if ($_POST){
       $sql2 = "UPDATE contacts
                    SET name   = '".$_POST['name']."',
                        kana   = '".$_POST['kana']."',
                        phone  = '".$_POST['phone']."',
                        email  = '".$_POST['email']."',
                        body   = '".$_POST['body']."' WHERE id = ".$id;
       // var_dump($update);
       // $dbh->commit();
       $stmt = $dbh->query($sql2);
       $stmt->execute();
       header( "Location: contact.php" ) ;
       }
  }
}

?>