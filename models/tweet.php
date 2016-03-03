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

		public function login() {

			if (isset($_POST) && $_POST['email'] != '' && $_POST['password'] != '') {
				$sql =  'SELECT * FROM `members` WHERE `email` ='. $_POST['email']. 'AND `password`='. sha1($_POST['password']);
				$record = mysqli_query($this->dbconnect, $sql) or die(mysqli_error($this->dbconnect));
				if ($table = mysqli_fetch_assoc($record)) {
					//ログイン成功
					$_SESSION['member_id'] = $table['member_id'];
					$_SESSION['time'] = time();

					//自動ログインのボタンのチェックボックスにチェックがあったら、ログイン情報をcookieに記録する
					if ($_POST['save'] == 'on') {
						setcookie('email', $_POST['email'], time() + 60*60*24*14);
						setcookie('password', $_POST['password'], time() + 60*60*24*14);
					}
					header('Location: index.php');
					exit();
				} else {
					$error['login'] = 'failed';
				}

			} else {
				$error['login'] = 'blank';
			}

		}
	}

 ?>