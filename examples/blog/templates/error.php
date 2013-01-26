<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>Delete Post | <?php p(config('blog_title')) ?></title>
  <link rel="stylesheet" href="<?php echo url_for('/style.css') ?>">
</head>
<body>
<div class="container">

  <h1><?php p($title) ?></h1>

  <?php p($message) ?>

  <p><a href="<?php p(url_for('/')) ?>">Click here</a> to go to the front page.</p>

  <hr>
  <p><?php p(config('footer')) ?></p>

</div>
</body>
</html>
