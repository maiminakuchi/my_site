<?php
require_once(ROOT_PATH .'/Models/Player.php');
// require_once(ROOT_PATH .'/Models/Goal.php');
// require_once(ROOT_PATH .'/Models/Update.php');
// require_once(ROOT_PATH .'/Models/Tmp_update.php');
// require_once(ROOT_PATH .'/Models/Login.php');





class PlayerController {
	private $request;  //リクエストパラメータ（GET,POST）
	private $Player;

	public function __construct() {
		//リクエストパラメータの取得
		$this->request['get'] = $_GET;
		$this->request['post'] = $_POST;
		//モデルオブジェクトの生成
		$this->Player = new Player(); //インスタンス生成
		// $this->Goal = new Goal(); //インスタンス生成
		// $this->Update = new Update(); //インスタンス生成
		// $this->Tmp_update = new Tmp_update();
		// $this->Login = new Login();
	}
	public function index() {  //①indexメソッド

		$players = $this->Player->findAll();
		// $players_count = $this->Player->countAll();
		$params = [
            'players' => $players, //返り値を配列にセット
		 ];
		return $params;
	}

	// public function view() {
	//   if(empty($this->request['get']['id'])){
	//   	echo '指定のパラメータが不正です。このページを表示できません。';
	//   	exit;
	//   }
	//   $player = $this->Player->findById($this->request['get']['id']);
	//   $params_d = [
	//              'player'  => $player //この配列の中に、国のデータを入れられれば・・・❗️⇨Playersクラスの中のfBIメソッドを変えればOK
	//   ];
	//   return $params_d;
	// }

	// public function view2() {
	//   if(empty($this->request['get']['id'])){
	//   	echo '指定のパラメータが不正です。このページを表示できません。';
	//   	exit;
	//   }
	//   $goal = $this->Goal->findById($this->request['get']['id']);
 //      return $goal;
	//   }

		public function delete() {
		  if(empty($this->request['get']['id'])){
		  	echo '指定のパラメータが不正です。このページを表示できません。';
		  	exit;
		}
		  $delete = $this->Player->deleteId($this->request['get']['id']);
		  return $delete;
	    }



		public function view(){
		$result = $this->Player->getPost($this->request['post']);
		//var_dump($result); 値入っている👈
		return $result;
		}

	    public function update() {
			// if(empty($this->request['post']['id'])){
		 //  	echo '指定のパラメータが不正です。このページを表示できません。';
		 //  	exit;
		 //  	}
	      // var_dump($this->request['post']['id']); するとNULL→inputタグのvalueに入れたら解決
	      //idがplayerのidじゃなくてcountriesから取り出しちゃうメソッドのc.idはいらないからセレクト文から削除
	      //
		$up = $this->Player->updateInfo($this->request['post']);


	    }

  //   public function country(){
  //     $country = $this->Update->getCountry();
  //     //返り値を配列にセット
	 //  return $country;
  //   }

  //   // 全削除
  //   public function Tmpdelete(){
  //       $tmpdelete = $this->Tmp_update->tmp_delete();

  //       return $tmpdelete;
  //   }

  //   // 再挿入
  //   public function Tmpupdate(){
  //       $tmpupdate = $this->Tmp_update->tmp_update();
  //       return $tmpupdate;
  //   }

  //   public function Login(){
		// 	$user = $this->request['post'];
		// 	// var_dump($user);
		// 	$params = $this->Login->loginUser();
		// 	return $params;
		// }


}
?>