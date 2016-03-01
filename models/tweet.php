<?php 

	class Tweet {
		// プロパティ
		private $dbconnect = '';

		// コンストラクタ
		public function __construct() {
			require('dbconnect.php');
			$this->dbconnect = $db;
		}

		public function index() {
			$sql = 'SELECT m.nick_name, m.picture_path, t.* FROM members m, tweets t WHERE m.member_id=t.member_id ORDER BY t.modified DESC';
			$results = mysqli_query($this->dbconnect, $sql) or die(mysqli_error($this_dbconnect));

			$rtn = array();
			while ($result = mysqli_fetch_assoc($results)) {
				$rtn[] = $result;
			}
			// 取得結果を返す
			return $rtn;
		}
	}

 ?>