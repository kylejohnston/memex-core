<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>memex</title>
  <?php include('includes/head.php'); ?>
</head>
<body class="home">
  <header>
    <?php include('includes/header-nav.php'); ?>
  </header>
  <article>
  <?php
    $www_root = 'http://memex-core.local/img/';
    $dir = 'img/';
    include('includes/renderer.php');
  ?>
</article>

  <footer>
    <?php include('includes/footer.php'); ?>
  </footer>
  <?php include('includes/foot.php'); ?>
</body>
</html>