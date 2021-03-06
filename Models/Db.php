<?php
// define('ROOT_PATH', str_replace('public', '', $_SERVER["DOCUMENT_ROOT"]));

require_once(ROOT_PATH .'/database.php');

class Db {
	//ðãã­ããã£
	protected $dbh; //ãã®å¤ã¯åºå®ãæ°å­ãããã°æå­åãããã private $name;  äººéã®åå
    //ðã¡ã½ãã
	public function __construct($dbh = null) { //ã³ã³ã¹ãã©ã¯ã¿ãå¼æ°ã¯$dbhãnullâï¼
		if(!$dbh) {  //ãã$dbhããªãã£ãã
			try {
				$this->dbh = new PDO( //å¤æ°dbhãå¼ã³åºãã¦ DBæ¥ç¶ã®ã¯ã©ã¹ãå¼ã³åºãã¦ãããåæåãããPDOã¯ã©ã¹ã®ãªãã¸ã§ã¯ããä»£å¥ãããããªãã¸ã§ã¯ãã®çæã
					'mysql:dbname='.DB_NAME.
					';host='.DB_HOST, DB_USER, DB_PASSWD
				);
				//æ¥ç¶æå
			} catch (PDOException $e) {
				echo "æ¥ç¶å¤±æ:" . $e->getMessage() . "\n";
				exit();
			}
		} else{ //æ¥ç¶æå ±ãå­å¨ããã°ãã
			$this->dbh = $dbh;
		}
	}
	public function get_db_handler() {
		return $this->dbh;
	}
}

