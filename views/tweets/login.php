      <div class="col-md-6 col-md-offset-3 content-margin-top">
        <legend>ログイン</legend>
        <form method="post" action="" class="form-horizontal" role="form">
          <!-- メールアドレス -->
          <div class="form-group">
            <label class="col-sm-4 control-label">メールアドレス</label>
            <div class="col-sm-8">
            <?php if (isset($_POST['email']) && !empty($_POST['email'])) { ?>
              <input type="email" name="email" class="form-control" placeholder="例： seed@nex.com" value="<?php echo htmlspecialchars($_POST['email']); ?>">
            <?php } else { ?>
              <input type="email" name="email" class="form-control" placeholder="例： seed@nex.com" value="">
            <?php } ?>
              <?php if (isset($error['login']) && $error['login'] == 'blank') { ?>
              <p class="error">* メールアドレスとパスワードをご記入下さい</p>
              <?php } elseif (isset($error['login']) && $error['login'] == 'failed') { ?>
              <p class="error">* ログインに失敗しました。正しくご記入下さい。</p>
              <?php } ?>
            </div>
          </div>
          <!-- パスワード -->
          <div class="form-group">
            <label class="col-sm-4 control-label">パスワード</label>
            <div class="col-sm-8">
              <?php if (isset($_POST['email']) && !empty($_POST['email'])) { ?>
              <input type="password" name="password" class="form-control" placeholder="" value="<?php echo htmlspecialchars($_POST['password']); ?>">
            <?php } else { ?>
              <input type="password" name="password" class="form-control" placeholder="" value="">
            <?php } ?>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-4 control-label">自動ログイン</label>
            <div class="col-sm-8">
            	<input type="checkbox" id="save" name="save" value="on">
            </div>
          </div>
          <input type="submit" class="btn btn-info" value="ログイン"> | <a href="join/" class="btn btn-default">&raquo;会員登録</a>
        </form>
      </div>