      <div class="col-md-4 content-margin-top">
        <legend>ようこそ<?php echo 'あとでやる';?>さん！</legend>
        <form method="post" action="" class="form-horizontal" role="form">
            <!-- つぶやき -->
            <div class="form-group">
              <label class="col-sm-4 control-label">つぶやき</label>
              <div class="col-sm-8">
                <input type="text" name="age" class="form-control" placeholder="例：Hello World!">
              </div>
            </div>
          <input type="submit" class="btn btn-default" value="つぶやく">
        </form>
      </div>

    <?php foreach ($this->viewOptions as $viewOption): ?>
      <div class="col-md-8 content-margin-top">
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