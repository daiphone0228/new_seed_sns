      <div class="col-md-4 content-margin-top">
        <legend>ようこそ<?php echo 'あとでやる';?>さん！</legend>
        <form method="post" action="" class="form-horizontal" role="form">
            <!-- つぶやき -->
            <div class="form-group">
              <label class="col-sm-4 control-label">つぶやき</label>
              <div class="col-sm-8">
                <textarea name="tweet" cols="50" rows="5" class="form-control" placeholder="例：Hello World!"></textarea>
              </div>
            </div>
          <ul class="paging">
            <input type="submit" class="btn btn-info" value="つぶやく">
          </ul>
        </form>
      </div>

      <div class="col-md-8 content-margin-top">
        <form method="get" action="" class="form-horizontal" role="form">
          <input type="text" name="search_word" value="">
          <input type="submit" class="btn btn-success btn-xs" value="検索">
          &nbsp;&nbsp;&nbsp;&nbsp;
          <li><a href="" class="btn btn-default">前</a></li>
          &nbsp;&nbsp;|&nbsp;&nbsp;
          <li><a href="" class="btn btn-default">次</a></li>
        </form>

        <?php foreach ($this->viewOptions as $viewOption): ?>
        <div class="msg">
          <img src="/new_seed_sns/member_picture/<?php echo $viewOption['picture_path']; ?>" width="48" height="48">
          <p>
            <?php echo $viewOption['tweet']; ?><span class="name"> (<?php echo $viewOption['nick_name']; ?>) </span>
            [<a href="#">Re</a>]
          </p>
          <p class="day">
            <a href="#">
              <?php echo $viewOption['modified'] ?>
            </a>
            [<a href="#" style="color: #F33;">削除</a>]
          </p>
        </div>
      </div>
        <?php endforeach; ?>