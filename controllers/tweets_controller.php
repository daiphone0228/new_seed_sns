<?php
	require('models/tweet.php');

	// コントローラのクラスをインスタンス化
	$controller = new TweetsController();

	switch ($action) {
		case 'index':
			$controller->index();
			break;

		case 'login':
			$controller->login();
			break;

		default:
			break;
	}

	class TweetsController {
		// プロパティ
		private $action = '';
		private $resource = '';
		private $viewOptions = '';

		public function index() {
			//モデルを呼び出す
			$tweet = new Tweet();
			$this->viewOptions = $tweet->index();

			// アクション名を設定する
			$this->action = 'index';

			// ビューを呼び出す
			include('views/layout/application.php');
		}

		public function login() {
			// $tweet = new Tweet();
			// $this->viewOptions = $tweet->login();

			$this->action = 'login';

			include('views/layout/application.php');
		}
	}
 ?>