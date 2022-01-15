<?php
// define('ROOT_PATH', str_replace('public', '', $_SERVER["DOCUMENT_ROOT"]));

require_once(ROOT_PATH .'/Models/Db.php');

class Player extends Db {   //👇メソッド

	public function __construct($dbh = null) { //コンストラクタ。引数は$dbhがnull←？
        parent::__construct($dbh);
	}
    /**
     * playersテーブルからすべてのデータを取得（20件ごと）
     *
     * @param integer $page ページ番号
     * @return Array $result 全選手データ（20件ごと）
     */

	public function findAll():Array { //メソッド横のArrayは返り値の型を表します。

    $sql = 'SELECT * FROM contacts';
    $sth = $this->dbh->prepare($sql);
    $sth->execute();
    $result = $sth->fetchAll(PDO::FETCH_ASSOC);
    return $result;
  }




	// public function findById($id = 0):Array {
 //        $sql = 'SELECT p.* ,
 //                       c.name AS country
 //                FROM players AS p
 //                JOIN countries AS c
 //                ON p.country_id = c.id';
 //        $sql .= ' WHERE p.id = :id';
 //        $sth = $this->dbh->prepare($sql);
 //        $sth->bindParam(':id', $id, PDO::PARAM_INT);
 //        $sth->execute();
 //        $result = $sth->fetch(PDO::FETCH_ASSOC);

 //        return $result;
 //    }



 //  public function countAll():Int {
 //      $sql = 'SELECT COUNT(*) FROM players'; //全選手の数(736)
 //      // $sql = 'SELECT count(*) as count FROM players';
 //      $sth = $this->dbh->prepare($sql); //SQL文を実行する準備
 //      $sth->execute(); //実行
 //      $count = $sth->fetchColumn(); //なぜfetchColumm?fetchでもいいのでは？
 //      return $count;
 //  }







  public function deleteId($id = 0){

       // $id = $_GET['id'];





      $sql = 'DELETE FROM contacts WHERE id = :id';
      $sth = $this->dbh->prepare($sql);
      $sth->bindParam(':id', $id, PDO::PARAM_INT);
      // $sth->bindParam(':del_flg', $del_flg, PDO::PARAM_INT);
      $sth->execute();
      //header( "Location: contact.php" );
    }

    public function getPost(){
           $id = $_GET['id'];
           $sql = "SELECT * FROM contacts Where id = ".$id;
           $sth = $this->dbh->prepare($sql);
           $sth->execute();
           $result = $sth->fetchAll(PDO::FETCH_ASSOC);
           return $result;
    }




    public function updateInfo (){

       if ($_POST){







       $id = $_GET['id'];
       $sql2 = "UPDATE contacts
                    SET name   = '".$_POST['name']."',
                        kana   = '".$_POST['kana']."',
                        phone  = '".$_POST['phone']."',
                        email  = '".$_POST['email']."',
                        body   = '".$_POST['body']."' WHERE id = ".$id;
       // var_dump($update);
       // $dbh->commit();
       $sth = $this->dbh->prepare($sql2);
       $sth->execute();
       header( "Location: contact.php" ) ;
    }
  }



}


?>